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
		Schema::create('trainings', function (Blueprint $table) {
			$table->id();
			$table->foreignId('trainer_id')->constrained()->onDelete('cascade'); // Relazione 1-to-n con Trainer
			$table->dateTime('date'); // Proprietà Date
			$table->integer('hours'); // Proprietà Hours
			$table->integer('minutes'); // Proprietà Minutes
			$table->integer('payment')->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('trainings');
	}
};
