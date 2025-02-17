<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('typedoc',1)->nullable();
            $table->string('numdoc',15)->unique();
            $table->string('last_name0',150);
            $table->string('last_name1',150);
            $table->string('first_name',150);
            $table->date('birthday')->nullable();
            $table->string('sex',1);
            $table->string('civil',1);
            $table->string('mail_person',150)->nullable()->unique();
            $table->string('mail_work',150)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('cellular',15)->nullable();
            $table->string('address',150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
