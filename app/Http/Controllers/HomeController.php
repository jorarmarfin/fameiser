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
		$sliders = $this->drupal->getRequest('sliders',true);
		$portada = $this->drupal->getRequest('portada',true);
		$galeria_productos = $this->drupal->getRequest('galeria-productos',true);
		$garantia = $this->drupal->getRequest('nid',false,30);
		$contactanos = $this->drupal->getRequest('nid',false,14);
		$current_menu = 'inicio';

		return view('index',compact('portada','galeria_productos','sliders','garantia','contactanos','current_menu'));
	}
	public function nosotros()
	{
		$nosotros = $this->drupal->getRequest('nosotros',true);
		$equipo = $this->drupal->getRequest('nid',false,15);
		$img_equipo = explode(',',$equipo->imagenes);
		$current_menu = 'nosotros';
		return view('web.nosotros',compact('nosotros','equipo','img_equipo','current_menu'));
	}
	public function productos()
	{
		$slogan = $this->drupal->getRequest('nid',false,17);
		$productos = $this->drupal->getRequest('productos',true);
		$current_menu = 'productos';
		return view('web.productos',compact('slogan','productos','current_menu'));
	}
	public function producto($prod)
	{
		switch ($prod) {
			case 'refrigerante-fameiser':
				$nid=26;
			break;
			case 'agua-optima-fameiser':
				$nid=27;
			break;
			case 'refrigerante-fameiser-potenciado':
				$nid=28;
			break;
			case 'refrigerante-fameiser-premium':
				$nid=29;
			break;			
		}
		$producto = $this->drupal->getRequest('nid',false,$nid);
		return view('web.producto',compact('producto'));		
	}
	public function contactanos()
	{
		$slogan = $this->drupal->getRequest('nid',false,14);
		$contactanos = $this->drupal->getRequest('nid',false,14);
		$current_menu = 'contactanos';
		return view('web.contactanos',compact('slogan','contactanos','current_menu'));
	}
	public function email(Request $request)
	{
		$datos = $request->all();
        Mail::to('luis.mayta@gmail.com','Luis Mayta')
                ->send(new ContactEmail($datos));
		return redirect()->back();
	}

}
