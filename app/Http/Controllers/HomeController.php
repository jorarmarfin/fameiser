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
		$portada = $this->drupal->getRequest('portada',true);
		$galeria = $this->drupal->getRequest('galeria',true);
		$imagenes = explode(',',$galeria[0]->imagenes);
		return view('index',compact('portada','imagenes','galeria'));
	}
	public function nosotros()
	{
		$nosotros = $this->drupal->getRequest('nosotros',true);

		return view('web.nosotros',compact('nosotros'));
	}

}
