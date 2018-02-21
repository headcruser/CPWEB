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
                ->query('SELECT * FROM cliente ORDER BY id_cliente LIMIT 10');
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
        echo '<pre>';
        $query = $this->pdo
            ->prepare('SELECT * FROM cliente WHERE id_cliente =?');
        $query->execute([$id]);
        $query->setFetchMode(\PDO::FETCH_CLASS,Cliente::class);
        return $query->fetch();
    }
}