<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Role;

class Trainer extends Model
{
	use HasFactory;

	protected $fillable = ['name', 'surname', 'role', 'payment'];

	protected $casts = [
		'role' => Role::class,
	];

	// Relazione 1-to-1 con User
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function trainings()
	{
		return $this->hasMany(Training::class);
	}
}
