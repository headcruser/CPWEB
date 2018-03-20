<?php
namespace App\CPWEB\Table;

use Pagerfanta\Pagerfanta;
use App\CPWEB\Entity\Estado;
use Framework\Database\Table;
use Framework\Database\PaginatedQuery;

class EstadoRepository extends Table
{
    protected $entity = Estado::class;

    protected $table = 'estado';

    protected $id = 'id_estado';
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
        return parent::paginationQuery()." ORDER BY descripcion ASC";
    }

    protected function findListQuery():string
    {
        return "SELECT $this->id ,descripcion FROM VISTA_ESTADO";
    }
}
