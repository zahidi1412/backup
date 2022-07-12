<?php


class Home extends CI_Controller {

		function __construct(){
			parent::__construct();

			if($this->session->userdata('status') != "Login"){
			redirect(base_url("Login"));
		}

			$this->load->model('Modelsm');
			$this->load->helper('url');
			//$this->load->view('head');
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
		
		
		$this->load->view('head');
		$this->load->view('v_admin');
		
		
	}

	

	public function anggota(){
		$this->load->view('head');
		$this->load->database();
		$jumlah_data = $this->Modelsm->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url(). 'Home/anggota/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['anggota'] = $this->Modelsm->anggota($config['per_page'],$from);	
		$this->load->view('v_anggota.php',$data);
		$this->load->helper('url');
		$this->load->view('foot');
		
	}
	

	public function tambah_angg(){
		$this->load->view('head');
		$this->load->view('i_anggota');
		$this->load->view('foot');
		
	}

	public function add_angg(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jurusan = $this->input->post('jurusan');
		$no_hp = $this->input->post('no_hp');
		$tgl_lahir = $this->input->post('tgl_lahir');


		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
		 	'jurusan' => $jurusan,
		 	'no_hp' => $no_hp,
		 	'tgl_lahir' => $tgl_lahir
		 	);
		$this->modelsm->input_data($data,'anggota');
		redirect('Home/anggota');
	}



	public function edit_ang($id){
			$this->load->view('head');
			$where = array('id' => $id );
			$data['anggota'] = $this->Modelsm->edit_data($where, 'anggota')->result();
			$this->load->view('e_ang',$data);
			$this->load->view('foot');
		
	}

	public function update_angg(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
 			$jurusan = $this->input->post('jurusan');
			$tgl_lahir = $this->input->post('tgl_lahir');
			
			

			$data = array(
				'nama' => $nama,
				'no_hp' => $no_hp,
		 		'alamat' => $alamat,
		 		'jurusan'=> $jurusan,
		 		'tgl_lahir' => $tgl_lahir,
		 		
			);
 
		$where = array(
		'id' => $id
		);
 
		$this->modelsm->update_data($where,$data,'anggota');
		redirect('Home/anggota');
	}
	
	

	public function hapus_angg($id){
		$where = array('id' => $id);
		$this->Modelsm->hapus_data($where,'anggota');
		redirect('Home/anggota');
	}



	public function pengurus(){
		$this->load->view('head');
		$this->load->database();
		$jumlah_pengu = $this->modelsm->jumlah_pengu();
		$this->load->library('pagination');
		$config['base_url'] = base_url(). 'Home/pengurus/';
		$config['total_rows'] = $jumlah_pengu;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['pengurus'] = $this->Modelsm->pengurus($config['per_page'],$from);	
		$this->load->view('v_pengu.php',$data);
		$this->load->helper('url');
		$this->load->view('foot');
		
	}
	

	public function tambah_pengu(){
		$this->load->view('head');
		$this->load->view('i_pengu');
		$this->load->view('foot');
		
	}

	public function add_pengu(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jurusan = $this->input->post('jurusan');
		$no_hp = $this->input->post('no_hp');
		$divisi = $this->input->post('divisi');


		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
		 	'jurusan' => $jurusan,
		 	'no_hp' => $no_hp,
		 	'divisi' => $divisi
		 	);
		$this->modelsm->input_data($data,'pengurus');
		redirect('Home/pengurus');
	}



	public function edit_pengu($id){
			$this->load->view('head');
			$where = array('id' => $id );
			$data['pengurus'] = $this->Modelsm->edit_data($where, 'pengurus')->result();
			$this->load->view('e_pengu',$data);
			$this->load->view('foot');
		
	}

	public function update_pengu(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
 			$jurusan = $this->input->post('jurusan');
			$divisi = $this->input->post('divisi');
			
			

			$data = array(
				'nama' => $nama,
				'no_hp' => $no_hp,
		 		'alamat' => $alamat,
		 		'jurusan'=> $jurusan,
		 		'divisi' => $divisi,
		 		
			);
 
		$where = array(
		'id' => $id
		);
 
		$this->modelsm->update_data($where,$data,'pengurus');
		redirect('Home/pengurus');
	}
	
	

	public function hapus_pengu($id){
		$where = array('id' => $id);
		$this->Modelsm->hapus_data($where,'pengurus');
		redirect('Home/pengurus');
	}

	public function pembina(){
		$this->load->view('head');
		$this->load->database();
		$jumlah_pemb = $this->Modelsm->jumlah_pemb();
		$this->load->library('pagination');
		$config['base_url'] = base_url(). 'Home/pembina/';
		$config['total_rows'] = $jumlah_pemb;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['pembina'] = $this->Modelsm->pembina($config['per_page'],$from);	
		$this->load->view('v_pemb.php',$data);
		$this->load->helper('url');
		$this->load->view('foot');
		
	}
	

	public function tambah_pemb(){
		$this->load->view('head');
		$this->load->view('i_pemb');
		$this->load->view('foot');
		
	}

	public function add_pemb(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		
		$no_hp = $this->input->post('no_hp');
		


		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
		 	
		 	'no_hp' => $no_hp
		 	
		 	);
		$this->modelsm->input_data($data,'pembina');
		redirect('home/pembina');
	}



	public function edit_pemb($id){
			$this->load->view('head');
			$where = array('id' => $id );
			$data['pembina'] = $this->modelsm->edit_data($where, 'pembina')->result();
			$this->load->view('e_pemb',$data);
			$this->load->view('foot');
		
	}

	public function update_pemb(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
 			
			
			

			$data = array(
				'nama' => $nama,
				'no_hp' => $no_hp,
		 		'alamat' => $alamat,
		 		
		 		
			);
 
		$where = array(
		'id' => $id
		);
 
		$this->modelsm->update_data($where,$data,'pembina');
		redirect('home/pembina');
	}
	
	

	public function hapus_pemb($id){
		$where = array('id' => $id);
		$this->modelsm->hapus_data($where,'pembina');
		redirect('home/pembina');
	}

	public function proker(){
		$this->load->view('head');
		$this->load->database();
		$jumlah_pro = $this->modelsm->jumlah_pro();
		$this->load->library('pagination');
		$config['base_url'] = base_url(). 'home/proker/';
		$config['total_rows'] = $jumlah_pro;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['proker'] = $this->modelsm->proker($config['per_page'],$from);	
		$this->load->view('v_pro.php',$data);
		$this->load->helper('url');
		$this->load->view('foot');
		
	}
	

	public function tambah_pro(){
		$this->load->view('head');
		$this->load->view('i_pro');
		$this->load->view('foot');
	}

	public function add_pro(){
		$nama = $this->input->post('nama');
		$kegiatan = $this->input->post('kegiatan');
		$divisi = $this->input->post('divisi');
		$catatan = $this->input->post('catatan');
		$tgl = $this->input->post('tgl');


		$data = array(
			'nama' => $nama,
			'kegiatan' => $kegiatan,
		 	'divisi' => $divisi,
		 	'catatan' => $catatan,
		 	'tgl' => $tgl
		 	);
		$this->modelsm->input_data($data,'proker');
		redirect('home/proker');
	}



	public function edit_pro($id){
			$this->load->view('head');
			$where = array('id' => $id );
			$data['proker'] = $this->modelsm->edit_data($where, 'proker')->result();
			$this->load->view('e_pro',$data);
			$this->load->view('foot');
		
	}

	public function update_pro(){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$catatan = $this->input->post('catatan');
			$kegiatan = $this->input->post('kegiatan');
 			$divisi = $this->input->post('divisi');
			$tgl = $this->input->post('tgl');
			
			

			$data = array(
				'nama' => $nama,
				'catatan' => $catatan,
		 		'kegiatan' => $kegiatan,
		 		'divisi'=> $divisi,
		 		'tgl' => $tgl,
		 		
			);
 
		$where = array(
		'id' => $id
		);
 
		$this->modelsm->update_data($where,$data,'proker');
		redirect('home/proker');
	}
	
	

	public function hapus_pro($id){
		$where = array('id' => $id);
		$this->modelsm->hapus_data($where,'proker');
		redirect('home/proker');
	}	

}
	
?>

