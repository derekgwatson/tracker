<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuzDataExportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buz_data_export_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('orderno');
            $table->dateTime('datedoc', 0);
            $table->dateTime('date_order_accepted', 0);
            $table->string('workflow_job_tracking_status');
            $table->string('inventory_item');
            $table->dateTime('order_history_lastactiondate', 0);
            $table->string('customer');
            $table->string('contact_emailaddress')->nullable();
            $table->string('contact_mobile')->nullable();
            $table->string('contact_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buz_data_export_items');
    }
}
