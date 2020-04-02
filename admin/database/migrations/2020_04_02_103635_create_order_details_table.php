<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('restaurant_id');
            $table->Integer('branch_id');
            $table->Integer('customer_id');
            $table->string('voucher_no');
            $table->float('subtotal');
            $table->float('total');
            $table->float('order_charge');
            $table->float('delivery_charge');
            $table->float('service_provider');
            $table->float('restaurant_charge');
            $table->Integer('delivery_status')->comment="1=Restuarant,2=manager,3=chef,4=delivery man,5=cancel";
            $table->Integer('payment_type')->nullable();
            $table->Integer('payment_status')->nullable();
            $table->Integer('manager_id')->nullable();
            $table->Integer('chef_id')->nullable();
            $table->Integer('delivery_by')->nullable();
            $table->Integer('canceled_by')->nullable();
            $table->date('drder_date')->nullable();
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
        Schema::dropIfExists('order_details');
    }
}
