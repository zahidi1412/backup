<?php
	
	/**
	* 
	*/
	class Upload extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
				$this->load->helper(array('form', 'url'));
		}
	}

	public function aksi_up(){
		$config['upload_path']   = './aset/upload/';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']      = '10000';
		$config['max_width']     = '10000';
		$config['max_height'] 	 = '10000';

		$this->load->library('upload',$config);

		if (! $this->upload->do_upload('berkas')) {
			$error = array('error' => $this->upload->display_error());
			$this->load->view('i_surat_masuk', $error);
		}else{
			$data = array('upload_data' =>$this->upload->data());
			$this->load->view('v_upload_sukses', $data);
		}
	}

?>