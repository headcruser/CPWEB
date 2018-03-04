<?php
namespace Framework\Database;

use Pagerfanta\Pagerfanta;

class Table
{
    private $pdo;

    protected $table;

    protected $entity;

    protected $id;

    /**
     * __construct
     * @param PDO $pdo
     */
    public function __construct(\PDO $pdo){
         $this->pdo = $pdo;
    }
     /**
     * Paginate Elements
     * @return Pagerfanta[]
     */
    public function findPaginated(int $perPage,int $currentPage):Pagerfanta
    {
        $query = new PaginatedQuery
        (
            $this->pdo,
            $this->paginationQuery(),
            "SELECT COUNT(*) FROM $this->table",
            $this->entity
        );
        return (new Pagerfanta($query))
        ->setMaxPerPage($perPage)
        ->setCurrentPage($currentPage);
    }
    /**
     * paginationQuery
     * @return mixed
     */
    protected function paginationQuery(){
        return "SELECT * FROM $this->table";
    }
    /**
     * Recuperate an Element
     * @param int $id
     * @return mixed
     */
    public function find(int $id)
    {
        $query = $this->pdo
            ->prepare("SELECT * FROM $this->table WHERE $this->id =?");
        $query->execute([$id]);
        if($this->entity){
            $query->setFetchMode(\PDO::FETCH_CLASS,$this->entity);
        }
        return $query->fetch()?:null;
    }
    /**
     * update
     * @param int $id
     * @param array $params
     * @return bool
     */
    public function update(int $id,array $params):bool
    {
        $fieldQuery = $this->buildFieldQuery($params);
        $params[$this->id]=$id;

        $statement = $this->pdo
            ->prepare("UPDATE $this->table  SET $fieldQuery WHERE $this->id = :$this->id");

        return $statement->execute($params);
    }
    /**
     * insert
     * @param array $params
     * @return bool
     */
    public function insert(array $params):bool
    {
        $fields = array_keys($params);
        $values = join(', ',array_map(function($field){
            return ':'.$field;
        },$fields));
        $fields = join(', ',$fields);
        $statement = $this->pdo->prepare("INSERT INTO $this->table ($fields) VALUES ($values)");

        return $statement->execute($params);
    }
    /**
     * delete a Customer
     * @param int $id id_client
     * @return bool
     */
    public function delete(int $id):bool
    {
        $statement = $this->pdo
            ->prepare("DELETE FROM $this->table WHERE $this->id = ?");
        return $statement->execute([$id]);
    }
    /**
     * buildFieldQuery
     * @param array $params
     * @return mixed
     */
    private function buildFieldQuery(array $params)
    {
        return join(',',array_map(
            function($field){return "$field=:$field";
            },array_keys($params))
        );
    }
    /**
     * Get the value of entity
     */
    public function getEntity():string
    {
        return $this->entity;
    }
    /**
     * Get the value of table
     */
    public function getTable():string{
        return $this->table;
    }
    /**
     * Insance PDO
     * @return PDO
     */
    public function getPDO():\PDO{
        return $this->pdo;
    }
    /**
     * get ID name
     * @return void
     */
    public function getID() :string
    {
        return $this->id;
    }
}