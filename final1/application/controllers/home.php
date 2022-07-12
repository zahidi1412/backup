<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->model('modelsm');
			$this->load->helper('url');
			$this->load->view('head');
		}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		
		
		$this->load->view('beranda');
		$this->load->view('foot');
		
	}

	

	public function t_surat_masuk(){
		
		$data['t_surat_masuk'] = $this->modelsm->surat_masuk()->result();
		
		$this->load->view('v_surat_masuk.php',$data);
		$this->load->helper('url');
		$this->load->view('foot');
		
	}

	public function t_surat_keluar(){
		
		//$this->load->view('modelsm');
		$data['t_surat_keluar'] = $this->modelsm->surat_keluar()->result();
		$this->load->view('v_surat_keluar.php',$data);
		$this->load->view('foot');
		
	} 

	public function tambah_keluar(){
		$this->load->view('i_surat_keluar');
	}

	public function tambah_skeluar(){
		$no_agenda=$this->input->post('no_agenda');
		$no_surat=$this->input->post('no_surat');
		$isi_ringkas= $this->input->post('isi_ringkas');
		$tujuan = $this->input->post('tujuan');
		$tgl_surat = $this->input->post('tgl_surat');

		$data = array(
			'no_agenda' => $no_agenda,
			'no_surat'=>$no_surat,
			'isi_ringkas' => $isi_ringkas,
			'tujuan' =>$tujuan,
			'$tgl_surat' =>$tgl_surat
			);
		$this->modelsm->input_data($data, 't_surat_keluar');
		redirect('home/t_surat_keluar');

	}

	public function tambah(){
		$this->load->view('i_surat_masuk');
		
	}

	public function tambah_aksi(){
		$no_agenda = $this->input->post('no_agenda');
		$no_surat = $this->input->post('no_surat');
		$perihal = $this->input->post('perihal');
		$dari = $this->input->post('dari');
		$tgl_surat = $this->input->post('tgl_surat');

		$data = array(
			'no_agenda' => $no_agenda,
			'no_surat' => $no_surat,
		 	'perihal' => $perihal,
		 	'dari' => $dari,
		 	'tgl_surat' => $tgl_surat
		 	);
		$this->modelsm->input_data($data,'t_surat_masuk');
		redirect('home/t_surat_masuk');
	}

	public function disp(){
		$this->load->helper('url');
		
		$this->load->view('i_disposisi');
		$this->load->view('foot');
		
	}

	public function edit_disp($id){
		
			$where = array('id' => $id );
			$data['t_surat_masuk'] = $this->modelsm->edit_data($where, 't_surat_masuk')->result();
			$this->load->view('e_surat_masuk',$data);
		
	}

	public function update(){
			$id = $this->input->post('id');
			$no_agenda = $this->input->post('no_agenda');
			$no_surat = $this->input->post('no_surat');
			$perihal = $this->input->post('perihal');
 			$dari = $this->input->post('dari');
			$tgl_surat = $this->input->post('tgl_surat');
			

			$data = array(
				'no_agenda' => $no_agenda,
				'no_surat' => $no_surat,
		 		'perihal' => $perihal,
		 		'dari' => $dari,
		 		'tgl_surat' => $tgl_surat
			);
 
		$where = array(
		'id' => $id
		);
 
		$this->modelsm->update_data($where,$data,'t_surat_masuk');
		redirect('');
	}
	
	public function e_dispos($id){
			$where = array('id' => $id );
			$data['t_surat_masuk'] = $this->modelsm->edit_data($where, 't_surat_masuk')->result();
			$this->load->view('i_disposisi',$data);
		}

	public function dispos(){
			$id = $this->input->post('id');
			$status = $this->input->post('status');
			$sifat = $this->input->post('sifat');
			$kerahasiaan = $this->input->post('kerahasiaan');
 			$disposisi_kepala = $this->input->post('disposisi_kepala');
			$catatan_kepala = $this->input->post('catatan_kepala');
			$disposisi_kasubag = $this->input->post('disposisi_kasubag');	
			$catatan_kasubag = $this->input->post('catatan_kasubag');
			
			$data = array(
				'status' => $status,
				'sifat' => $sifat,
		 		'kerahasiaan' => $kerahasiaan,
		 		'disposisi_kepala' => $disposisi_kepala,
		 		'catatan_kepala' => $catatan_kepala,
		 		'disposisi_kasubag' => $disposisi_kasubag,
		 		'catatan_kasubag' => $catatan_kasubag
			);
 
		$where = array(
		'id' => $id
		);
 
		$this->modelsm->update_data($where, $data, 't_surat_masuk');
		redirect('');
	}

	public function hapus($id){
		$where = array('id' => $id);
		$this->modelsm->hapus_data($where,'t_surat_masuk');
		redirect('home/t_surat_masuk');
	}

	public function v_disp($id){
		
		$where= array('id' => $id);
		$data['t_surat_masuk'] = $this->modelsm->edit_data($where, 't_surat_masuk')->result();
		$this->load->view('v_dis', $data);
		
	}

	public function v_all(){
		$id = $this->input->post('id');
			$no_agenda = $this->input->post('no_agenda');
			$no_surat = $this->input->post('no_surat');
			$perihal = $this->input->post('perihal');
 			$dari = $this->input->post('dari');
			$tgl_surat = $this->input->post('tgl_surat');
			$status = $this->input->post('status');
			$sifat = $this->input->post('sifat');
			$kerahasiaan = $this->input->post('kerahasiaan');
 			$disposisi_kepala = $this->input->post('disposisi_kepala');
			$catatan_kepala = $this->input->post('catatan_kepala');
			$disposisi_kasubag = $this->input->post('disposisi_kasubag');	
			$catatan_kasubag = $this->input->post('catatan_kasubag');


			$data = array(
				'no_agenda' => $no_agenda,
				'no_surat' => $no_surat,
		 		'perihal' => $perihal,
		 		'dari' => $dari,
		 		'tgl_surat' => $tgl_surat,
		 		'status' => $status,
				'sifat' => $sifat,
		 		'kerahasiaan' => $kerahasiaan,
		 		'disposisi_kepala' => $disposisi_kepala,
		 		'catatan_kepala' => $catatan_kepala,
		 		'disposisi_kasubag' => $disposisi_kasubag,
		 		'catatan_kasubag' => $catatan_kasubag
			);
				$where = array(
		'id' => $id
		);
 
		$this->modelsm->update_data($where, $data, 't_surat_masuk');
		redirect('');
	}

}
	
?>

