<?php

namespace App\Repositories;

use GuzzleHttp\Client;
/**
* Clase de conexion con drupal
*/
class Drupal
{
	private $client;

	public function __construct()
	{
		$this->client = new Client([
			'base_uri' => 'http://admin.fameiser.com'
		]);
	}

	public function getRequest($name,$isarray=false,$nid=null)
	{
		$retVal = ($name=='nid' || $name=='galeria') ? '/'.$nid : '' ;
		$sufijo = $retVal.'?_format=json';
		$url = '/api/'.$name.$sufijo;
		$response = $this->client->request('GET',$url);

		$data = json_decode($response->getBody()->getContents());

		if($isarray)return $data;
		else return $data[0];
	}
}