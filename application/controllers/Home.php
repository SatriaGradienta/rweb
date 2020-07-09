<?php


class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_data');

		if($this->session->userdata('login')==null){
			redirect('login');
		}
	}

	public function index(){
		$data = array(
			'judul' => 'Data Pasien',
			'data_pasien' => $this->m_data->data_pasien(),
			// 'data_mahasiswa' => $this->m_data->data_mahasiswa(),
		);
		$this->load->view('v_home', $data);
	}
}
?>