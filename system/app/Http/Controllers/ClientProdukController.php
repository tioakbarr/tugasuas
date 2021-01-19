<?php


namespace App\Http\Controllers;
use App\Models\Produk;

class ClientProdukController extends Controller{

	function index(){
		$data['list_produk'] = Produk::All();
		
		return view('client.index', $data);
	}


}