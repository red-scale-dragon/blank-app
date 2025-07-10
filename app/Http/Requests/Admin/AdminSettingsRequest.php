<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminSettingsRequest extends FormRequest {
	public function messages(): array {
		return [
			'remove_migrations_on_deactivation.in' => 'Remove DB tables on deactivation must be yes or no.',
		];
	}
	
	public function rules(): array {
		return [
			'remove_migrations_on_deactivation' => 'required|in:yes,no',
		];
	}
}
