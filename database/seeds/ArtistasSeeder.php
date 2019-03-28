<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArtistasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artistas')->insert([
            'Nombre' => 'Miguel',
            'Apellidos' => 'Arteaga Valle',
            'Genero' => 'Hombre',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('artistas')->insert([
            'Nombre' => 'Marcos',
            'Apellidos' => 'Arteaga Valle',
            'Genero' => 'Hombre',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('artistas')->insert([
            'Nombre' => 'Cristian',
            'Apellidos' => 'Salinas',
            'Genero' => 'Hombre',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('artistas')->insert([
            'Nombre' => 'Khalid',
            'Apellidos' => 'Alouan',
            'Genero' => 'Hombre',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
