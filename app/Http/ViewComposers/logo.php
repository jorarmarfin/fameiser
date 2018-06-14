<?php
namespace App\Http\ViewComposers;

use App\Repositories\Drupal;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;

class logo
{
	/**
	 * Variables
	 * @param  actions: hide para ocultar el panel
	 * @return [type]       [description]
	 */
	public function compose(View $view)
	{
		$drupal = new Drupal;
		$logo = $drupal->getRequest('logo');
		$footer = $drupal->getRequest('nid',false,3);

		$view->with(compact('logo','footer'));
	}
}