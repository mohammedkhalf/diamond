<?php

use Illuminate\Database\Seeder;
use App\Models\CallLog;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CallsTableSeeder extends Seeder
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
            CallLog::create([
                'name'=>'Ahmed Ali',
                'phone'=>'01112311728',
                'duration'=>3,
                'date_time'=>Carbon::now(),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
        }

    }
}
