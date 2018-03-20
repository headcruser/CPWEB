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

    protected function findListQuery():string
    {
        return "SELECT $this->id ,email FROM $this->table";
    }

    /**
     * Login Privitional
     * @param int $id
     * @return mixed
     */
    public function findUserLogin(string $email, string $password):Usuario
    {
        $query = $this->getPDO()
            ->prepare(parent::paginationQuery()." WHERE email =? and contrasena = ?  limit 1");
        $query->execute([$email,$password]);
        if ($this->entity) {
            $query->setFetchMode(\PDO::FETCH_CLASS, $this->entity);
        }
        return $query->fetch()?:null;
    }
}
