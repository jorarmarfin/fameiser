<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Repositories\Drupal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
		$equipo = $this->drupal->getRequest('nid',false,15);
		$img_equipo = explode(',',$equipo->imagenes);
		return view('web.nosotros',compact('nosotros','equipo','img_equipo'));
	}
	public function productos()
	{
		$slogan = $this->drupal->getRequest('nid',false,17);
		$productos = $this->drupal->getRequest('productos',true);
		return view('web.productos',compact('slogan','productos'));
	}
	public function contactanos()
	{
		$slogan = $this->drupal->getRequest('nid',false,22);
		$contactanos = $this->drupal->getRequest('nid',false,14);
		return view('web.contactanos',compact('slogan','contactanos'));
	}
	public function email(Request $request)
	{
		$datos = $request->all();
        Mail::to('luis.mayta@gmail.com','Luis Mayta')
                ->send(new ContactEmail($datos));
		return redirect()->back();
	}

}
