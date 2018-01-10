<?php


use Phinx\Migration\AbstractMigration;

class RecreateCustomers extends AbstractMigration
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
        $cliente = $this->table('cliente', ['id' =>'id_cliente']);
        $cliente->addColumn('razon_social', 'string', ['null' => true])
              ->addColumn('rfc', 'string', ['limit' => 13])
              ->addColumn('domicilio', 'string', ['limit' => 255])
              ->addColumn('correo', 'string', ['limit' => 200])
              ->addColumn('telefono', 'string', ['limit' => 10])
              ->addColumn('id_tipo', 'integer')
              ->addColumn('id_estado', 'integer')
              ->addColumn('id_usuario', 'integer')
              ->create();
    }
}
