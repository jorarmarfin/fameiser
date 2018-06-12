<?php

namespace App\Http\Controllers;

use App\Repositories\Drupal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $drupal;

	public function __construct(Drupal $drupal)
	{
		$this->drupal = $drupal;
	}

	public function index()
	{
		//$logo = $this->drupal->getRequest('logo');
		return view('index');
	}
	public function nosotros()
	{
		$nosotros = $this->drupal->getRequest('nosotros',true);

		return view('web.nosotros',compact('nosotros'));
	}

}
