<?php namespace App\Controllers;

class Helloworld extends BaseController
{
	public function index()
	{
		echo $this->nama;
		//echo "Muhammad Azriel Bintang Saputra";
	}

		public function show($nama,$npm)
	{
		echo $this->nma.'<br>';
		echo $nama.'<br>';
		echo $npm.'<br>';
	}

}	