<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            //$table->foreignId('category_id')->nullable()->references('id')->on('categories');
            $table->id();
            $table->string('fullname');
            $table->string('gender');
            $table->string('email');
            $table->string('postcode');
            $table->string('address');
            $table->text('building_name')->nullable();
            $table->string('opinion');
            //$table->foreignId('category_id')->nullable()->references('id')->on('categories');
            //$table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnDelete();
            //$table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
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
        Schema::dropIfExists('contacts');
    }
}
