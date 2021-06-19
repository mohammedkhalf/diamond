<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('phone_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('status')->nullable();
            $table->string('therapist')->nullable();
            $table->string('address')->nullable();
            $table->date('last_receipt')->nullable();
            $table->string('last_receipt_value')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('chronic_diseases')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('phone_number');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('status');
            $table->dropColumn('therapist');
            $table->dropColumn('address');
            $table->dropColumn('last_receipt');
            $table->dropColumn('last_receipt_value');
            $table->dropColumn('payment_type');
            $table->dropColumn('chronic_diseases');
        });
    }
}
