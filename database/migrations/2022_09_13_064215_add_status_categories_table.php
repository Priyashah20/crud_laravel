<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->enum('status', ['Active','Inactive','Delete']);
        });
    }
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
        });
    }
}
