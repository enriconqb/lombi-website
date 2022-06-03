<?php

namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\Mlomba;
use App\Models\Mtim;
use App\Models\Mlistlomba;


class PengumumanAdmin extends BaseController
{
	public function __construct(){
		$this->datalomba = new Mlomba();
		$this->datatim = new Mtim();
}
	
	public function index()
	{
		$id_lomba = session()->get('id_lomba');
		$ada = $this->datatim->juara1($id_lomba);
		if($ada){
			$data = array(
				'nama' => $this->datalomba->detail($id_lomba),
				'juara1' => $this->datatim->juara1($id_lomba),
				'juara2' => $this->datatim->juara2($id_lomba),
				'juara3' => $this->datatim->juara3($id_lomba),
			);
			return view('admin/v_pengumuman', $data);
		}
		else{
			$data = array(
				'nama' => $this->datalomba->detail($id_lomba),
			);
			return view('admin/v_pengumuman', $data);
		}
	}

	public function umum()
	{
		$id_lomba = session()->get('id_lomba');

		// === Update Data Link Bukti Bayar di database List lomba ====
		$modellistlomba = new Mlistlomba();

		$data = [ //ambil data form
				'status_juara' => 'sudah',
		]; 
		
		$save = $modellistlomba
		->whereIn('id_lomba', [$id_lomba])
		->set([
				'status_juara'=>$data['status_juara']])
		->update();
		// ----- END update -----

		// === Update Data Link Bukti Bayar di database lomba ====
		$modellomba = new Mlomba();

		$data = [ //ambil data form
				'status_juara' => 'sudah',
		]; 
		
		$save = $modellomba
		->whereIn('id_lomba', [$id_lomba])
		->set([
				'status_juara'=>$data['status_juara']])
		->update();
		// ----- END update -----

		return redirect()->to(base_url('home'));

	}

	public function batal()
	{
		$id_lomba = session()->get('id_lomba');

		// === Update Data Link Bukti Bayar di database List lomba ====
		$modellistlomba = new Mlistlomba();

		$data = [ //ambil data form
				'status_juara' => 'belum',
		]; 
		
		$save = $modellistlomba
		->whereIn('id_lomba', [$id_lomba])
		->set([
				'status_juara'=>$data['status_juara']])
		->update();
		// ----- END update -----

		// === Update Data Link Bukti Bayar di database lomba ====
		$modellomba = new Mlomba();

		$data = [ //ambil data form
				'status_juara' => 'belum',
		]; 
		
		$save = $modellomba
		->whereIn('id_lomba', [$id_lomba])
		->set([
				'status_juara'=>$data['status_juara']])
		->update();
		// ----- END update -----

		return redirect()->to(base_url('home'));
	}
}
