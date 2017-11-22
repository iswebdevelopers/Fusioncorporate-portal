<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelPrinted extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('labels_printed')) {
            Schema::create('label_printed', function (Blueprint $table) {
                $table->integer('order_no');
                $table->date('createdate');
                $table->string('filename',50);
                $table->string('reprint_required',1)->default('N');
                $table->integer('sticky')->nullable();
                $table->integer('packcartons')->nullable();
                $table->integer('loosesimplecartons')->nullable();
                $table->integer('mixedcartons')->nullable();
                $table->integer('ticketrequestid')->nullable();
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
        if (Schema::hasTable('label_printed')) {
            Schema::drop('label_printed');
        }    
    }
}
