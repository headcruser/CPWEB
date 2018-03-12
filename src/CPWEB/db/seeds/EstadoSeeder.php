<?php


use Phinx\Seed\AbstractSeed;

class EstadoSeeder extends AbstractSeed
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
            ['descripcion'=>'Aguascalientes'],
            ['descripcion'=>'Baja California'],
            ['descripcion'=>'Baja California Sur'],
            ['descripcion'=>'Campeche'],
            ['descripcion'=>'Chiapas'],
            ['descripcion'=>'Chihuahua'],
            ['descripcion'=>'Coahuila de Zaragoza'],
            ['descripcion'=>'Colima'],
            ['descripcion'=>'Ciudad de México'],
            ['descripcion'=>'Durango'],
            ['descripcion'=>'Guanajuato'],
            ['descripcion'=>'Guerrero'],
            ['descripcion'=>'Hidalgo'],
            ['descripcion'=>'Jalisco'],
            ['descripcion'=>'Mexico'],
            ['descripcion'=>'Michoacan de Ocampo'],
            ['descripcion'=>'Morelos'],
            ['descripcion'=>'Nayarit'],
            ['descripcion'=>'Nuevo Leon'],
            ['descripcion'=>'Oaxaca'],
            ['descripcion'=>'Puebla'],
            ['descripcion'=>'Queretaro de Arteaga'],
            ['descripcion'=>'Quintana Roo'],
            ['descripcion'=>'San Luis Potosi'],
            ['descripcion'=>'Sinaloa'],
            ['descripcion'=>'Sonora'],
            ['descripcion'=>'Tabasco'],
            ['descripcion'=>'Tamaulipas'],
            ['descripcion'=>'Tlaxcala'],
            ['descripcion'=>'Veracruz-Llave'],
            ['descripcion'=>'Yucatan'],
            ['descripcion'=>'Zacatecas'],
		];
         $this->table('estado')
            ->insert($data)
            ->save();
    }
}
