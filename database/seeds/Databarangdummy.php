<?php

use Illuminate\Database\Seeder;

class Databarangdummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
        	DB::table('barang')->insert([
        		'kode_barang'=>'BR00'.$i,
        		'nama_barang'=>'Barang ke-'.$i,
        		'harga'=>10.000,
        	]);
        }
    }
}
