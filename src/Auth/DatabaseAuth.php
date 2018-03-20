<?php
namespace App\Auth;

use Framework\Auth;
use App\CPWEB\Entity\Usuario;
use App\CPWEB\Table\UsuarioRepository;
use Framework\Session\SessionInterface;

class DatabaseAuth implements Auth
{

  /**
   * $userTable
   *
   * @var UserRepository
   */
    private $userTable;

  /**
   * $session
   *
   * @var SessionInterface
   */
    private $session;

  /**
   * $user
   *
   * @var Usuario
   */
    private $user;


    public function __construct(
        UsuarioRepository $userTable,
        SessionInterface $session
    ) {
        $this->userTable = $userTable;
        $this->session = $session;
    }

    public function login(string $username, string $password):?Usuario
    {
        if (empty($username)|| empty($password)) {
            return null;
        }
        $user = $this->userTable->findUserLogin($username, $password);
        if ($user) {
          //$this->session->set('auth.user',$user->id_usuario);
            return $user;
        }
    }

    public function logout():void
    {
      //$this->session->delete('auth.user');
        print('cerrando session');
    }

    public function getUser():?Usuario
    {
        if ($this->user) {
            return $this->user;
        }
        $userID = $this->session->get('auth.user');
        if ($userID) {
            try {
                $this->user = $this->userTable->find($userID);
                return $user;
            } catch (\Exception $e) {
                $this->session->delete('auth.user');
                return null;
            }
        }
    }
}
