<?php


use Phinx\Migration\AbstractMigration;

class TablaUsuario extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $cliente = $this->table('usuario', ['id' =>'id_usuario']);
        $cliente->addColumn('email', 'string', ['limit' => 100]) //alter table usuario MODIFY email varchar (100);
              ->addColumn('contrasena', 'string', ['limit' => 32])
              ->addColumn('clave', 'string', ['limit' => 64])
              ->addColumn('fecha_clave', 'date',['null' => true])
              ->addColumn('nombres', 'string', ['limit' => 255])
              ->addColumn('apellidos', 'string', ['limit' => 255])
              ->addColumn('nacimiento', 'date' ,['null' => true])
              ->addColumn('foto', 'blob')
              ->create();

    }
}
