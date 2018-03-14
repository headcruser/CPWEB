<?php
namespace App\CPWEB\Table;

use App\CPWEB\Entity\Cliente ;
use Framework\Database\Table;
use Framework\Database\PaginatedQuery;
use Pagerfanta\Pagerfanta;

class ClienteRepository extends Table
{
    protected $entity = Cliente::class;

    protected $table = 'cliente';

    protected $id = 'id_cliente';
    /**
     * __construct
     * @param PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
         parent::__construct($pdo);
    }

    protected function paginationQuery()
    {
        return parent::paginationQuery()." ORDER BY $this->id DESC";
    }
}
