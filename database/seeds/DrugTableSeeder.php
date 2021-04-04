<?php

use Illuminate\Database\Seeder;
use App\Models\Auth\User;
use App\Models\Drug;
use Illuminate\Database\Eloquent\Model;

class DrugTableSeeder extends Seeder
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

            Drug::create([
            	'name'=>'diamicron',
            	'manufacture'=>'Servier Research International',
            	'amount'=>30,
            	'created_by'=>factory(User::class)->state('active')->create()->id
            ]);

            Model::reguard();

		}
    }
}
