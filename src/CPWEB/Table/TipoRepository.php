<?php
namespace App\CPWEB\Table;

use Pagerfanta\Pagerfanta;
use App\CPWEB\Entity\Tipo;
use Framework\Database\Table;
use Framework\Database\PaginatedQuery;

class TipoRepository extends Table
{
    protected $entity = Tipo::class;

    protected $table = 'tipo';

    protected $id = 'id_tipo';
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

    protected function findListQuery():string
    {
        return "SELECT $this->id ,descripcion FROM VISTA_TIPO";
    }
}
