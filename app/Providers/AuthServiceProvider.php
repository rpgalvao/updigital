<?php

namespace App\Providers;

use App\Permissao;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {
	/**
	 * The policy mappings for the application.
	 *
	 * @var array
	 */
	protected $policies = [
		'App\Model' => 'App\Policies\ModelPolicy',
	];

	/**
	 * Register any application authentication / authorization services.
	 *
	 * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
	 * @return void
	 */
	public function boot(GateContract $gate) {
		$this->registerPolicies($gate);

		foreach ($this->getPermissoes() as $permissao) {
			$gate->define($permissao->nome, function ($user) use ($permissao) {
					return $user->existePapel($permissao->papeis) || $user->existeAdmin();
				});
		}
	}

	public function getPermissoes() {
		return Permissao::with('papeis')->get();
	}
}
