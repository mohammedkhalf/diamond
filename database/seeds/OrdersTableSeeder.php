<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! \App::environment(['production'])) {
            Model::unguard();
            Order::create([
            	'patient_name'=>'mohamed khalf',
            	'drug_name'=>'Diamacron',
            	'dose'=>'1',
            	'amount'=>30,
            ]);
            Model::reguard();
		}
    }
}
