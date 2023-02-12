<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Ticket;
use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tickets')->insert([
            [
                "usuario" => "Prueba 1"
                , "estado" => "Abierto"
                , "created_at" => date('Y-m-d H:m:s')
                , "updated_at" => date('Y-m-d H:m:s')
            ],
            [
                "usuario" => "Prueba 2"
                , "estado" => "Cerrado"
                , "created_at" => date('Y-m-d H:m:s')
                , "updated_at" => date('Y-m-d H:m:s')
            ]
        ]);
    }
}
