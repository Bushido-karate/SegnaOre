<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Trainer;
use App\Enums\Role;
use Illuminate\Support\Facades\Hash;

class TrainerSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$user = User::create([
			'name' => 'Test Teacher',
			'email' => 'test.teacher@example.com',
			'password' => Hash::make('Fedjbest1'), // Assicurati di hasharlo
			'email_verified_at' => now(), // Opzionale: imposta la data di verifica
		]);

		// Associa il trainer all'utente
		Trainer::create([
			'user_id' => $user->id,
			'name' => 'Teacher',
			'surname' => 'Test',
			'role' => Role::Teacher,
			'payment' => 1200,
		]);

		// Crea un secondo utente
		$user2 = User::create([
			'name' => 'Test President',
			'email' => 'test.president@example.com',
			'password' => Hash::make('Fedjbest1'),
			'email_verified_at' => now(), // Opzionale
		]);

		// Associa un altro trainer all'utente
		Trainer::create([
			'user_id' => $user2->id,
			'name' => 'President',
			'surname' => 'Test',
			'role' => Role::President,
			'payment' => 1200,
		]);
	}
}
