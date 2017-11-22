<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('label_requests')) {
            Schema::create('label_request', function (Blueprint $table) {
                $table->string('item',25);
                $table->string('ticket_type_id',4);
                $table->integer('quantity');
                $table->string('location_type',1);
                $table->integer('location');
                $table->decimal('unit_retail',20,4)->nullable();
                $table->decimal('multi_units',20,4)->nullable();
                $table->decimal('multi_unit_retail',20,4)->nullable();
                $table->string('country_of_origin',3)->nullable();
                $table->integer('order_no');
                $table->string('print_online_ind',1)->default('Y');
                $table->date('create_datetime');
                $table->date('last_update_datetime');
                $table->string('last_update_id',30);
                $table->string('sort_order_type',6);
                $table->string('printer_type',6);
            });
        }    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('label_request')) {
            Schema::drop('label_request');
        }
        
    }
}
