<?php
namespace Framework\Database;

use Pagerfanta\Adapter\AdapterInterface;

class PaginatedQuery implements AdapterInterface
{
    private $pdo;
    private $query;
    private $countQuery;
    private $entity;
    /**
     * __construct
     * @param PDO $pdo
     * @param string $query Results of data
     * @param string $countQuery Number Results of data
     * @param string|null $countQuery Number Results of data
     */
    public function __construct(\PDO $pdo, $query, $countQuery, ?string $entity)
    {
        $this->pdo = $pdo;
        $this->query = $query;
        $this->countQuery = $countQuery;
        $this->entity = $entity;
    }
     /**
     * Returns the number of results.
     *
     * @return integer The number of results.
     */
    public function getNbResults():int
    {
        return $this->pdo->query($this->countQuery)->fetchColumn();
    }

    /**
     * Returns an slice of the results.
     *
     * @param integer $offset The offset.
     * @param integer $length The length.
     *
     * @return array|\Traversable The slice.
     */
    public function getSlice($offset, $length)
    {
        $statement = $this->pdo->prepare($this->query.' LIMIT :offset,:length');
        $statement->bindParam('offset', $offset, \PDO::PARAM_INT);
        $statement->bindParam('length', $length, \PDO::PARAM_INT);
        if ($this->entity) {
            $statement->setFetchMode(\PDO::FETCH_CLASS, $this->entity);
        }
        $statement->execute();
        return $statement->fetchAll();
    }
}
