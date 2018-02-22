<?php
namespace App\CPWEB\Table;

use App\CPWEB\Entity\Cliente ;

class ClienteRepository
{
    private $pdo;
    public function __construct(\PDO $pdo)
    {
         $this->pdo = $pdo;

    }
    /**
     * Paginate clients
     * @return stdClass[]
     */
    public function findPaginated():array
    {
        $query= $this->pdo
                ->query('SELECT * FROM cliente ORDER BY id_cliente DESC LIMIT 10');
        $query->setFetchMode(\PDO::FETCH_CLASS,Cliente::class);
        return $query->fetchAll();
    }
    /**
     * Recuperate a Client with id
     * @param int $id
     * @return Cliente
     */
    public function find(int $id):Cliente
    {
        $query = $this->pdo
            ->prepare('SELECT * FROM cliente WHERE id_cliente =?');
        $query->execute([$id]);
        $query->setFetchMode(\PDO::FETCH_CLASS,Cliente::class);
        return $query->fetch();
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
        $params['id_cliente']=$id;

        $statement = $this->pdo
            ->prepare("UPDATE cliente SET $fieldQuery WHERE id_cliente = :id_cliente");

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
        $values = array_map(function($field){
            return ':'.$field;
        },$fields);
        $statement = $this->pdo
            ->prepare("INSERT INTO cliente
            (". join(',',$fields).") VALUES (".join(',',$values).")");

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
            ->prepare('DELETE FROM cliente WHERE id_cliente = ?');
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

}