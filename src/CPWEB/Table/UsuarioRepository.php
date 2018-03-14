<?php
namespace App\CPWEB\Table;

use App\CPWEB\Entity\Usuario ;
use Framework\Database\Table;
use Framework\Database\PaginatedQuery;
use Pagerfanta\Pagerfanta;

class UsuarioRepository extends Table
{
    protected $entity = Usuario::class;

    protected $table = 'usuario';

    protected $id = 'id_usuario';
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
