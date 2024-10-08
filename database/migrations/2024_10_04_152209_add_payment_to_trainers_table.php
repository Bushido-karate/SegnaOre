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
		Schema::table('trainers', function (Blueprint $table) {
			$table->integer('payment')->default(0); // Aggiungi la colonna Payment
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::table('trainers', function (Blueprint $table) {
			//
		});
	}
};
