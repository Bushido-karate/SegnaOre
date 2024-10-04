<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
	use HasFactory;

	protected $fillable = ['trainer_id', 'date', 'hours', 'minutes', 'payment'];

	// Relazione 1-to-n con Trainer
	public function trainer()
	{
		return $this->belongsTo(Trainer::class);
	}
}
