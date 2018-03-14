<?php


use Phinx\Seed\AbstractSeed;

class RolPrivilegioSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'id_rol'=>1,
                'id_privilegio'=>1
            ],
            [
                'id_rol'=>2,
                'id_privilegio'=>2
            ],
            [
                'id_rol'=>3,
                'id_privilegio'=>2
            ]
        ];
         $this->table('rol_privilegio')
            ->insert($data)
            ->save();
    }
}
