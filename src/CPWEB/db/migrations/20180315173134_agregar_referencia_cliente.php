<?php


use Phinx\Migration\AbstractMigration;

class AgregarReferenciaCliente extends AbstractMigration
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
        $this->table('cliente')
            ->addColumn('id_tipo', 'integer')
            ->addColumn('id_estado', 'integer')
            ->addColumn('id_usuario', 'integer')
            ->addForeignKey(
                'id_usuario',
                'usuario',
                'id_usuario',
                [
                    'delete'=>'SET NULL',
                    'constraint' => 'fk_usuario',
                ]
            )
            ->addForeignKey(
                'id_estado',
                'estado',
                'id_estado',
                [
                    'delete'=>'SET NULL',
                    'constraint' => 'fk_estadoRepublica',
                ]
            )
            ->addForeignKey(
                'id_tipo',
                'tipo',
                'id_tipo',
                [
                    'delete'=>'SET NULL',
                    'constraint' => 'fk_tipoCliente',
                ]
            );
    }
}
