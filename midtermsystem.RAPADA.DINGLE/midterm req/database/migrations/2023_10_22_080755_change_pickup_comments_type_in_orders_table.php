<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePickupCommentsTypeInOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('pickup_comments')->nullable();
        });
    }

    public function down()
    {
        // If needed, you can define the rollback operation here
    }
}
