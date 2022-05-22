<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function index(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates_admin/header');
			$this->load->view('register');
			$this->load->view('templates_admin/footer');
		}
		else{
            $nama       = $this->input->post('nama');
            $universitas   = $this->input->post('universitas');
            $nim     = $this->input->post('nim');
            $tempat_lahir     = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jurusan     = $this->input->post('jurusan');
            $alamat       = $this->input->post('alamat');
            $gender   = $this->input->post('gender');
            $no_telepon     = $this->input->post('no_telepon');
            $no_ktp     = $this->input->post('no_ktp');
            $password   = md5($this->input->post('password'));
            $role_id    = '2';
            

            $data = array(
                'nama'       => $nama,
                'universitas'   => $universitas,
                'nim'     => $nim,
                'tempat_lahir'     => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jurusan'     => $jurusan,  
                'alamat'       => $alamat,
                'gender'   => $gender,
                'no_telepon'     => $no_telepon,
                'no_ktp'     => $no_ktp,  
                'password'   => $password,
                'role_id'    => $role_id,
                    );
			
			$this->rental_model->insert_data($data, 'mahasiswa');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Berhasil register, Silahkan login!
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
      redirect('data_registrasi');
		}
	}


    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('universitas','universitas','required');
        $this->form_validation->set_rules('nim','nim','required');
        $this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
        $this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
        $this->form_validation->set_rules('jurusan','jurusan','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('gender','gender','required');
        $this->form_validation->set_rules('no_telepon','no_telepon','required');
        $this->form_validation->set_rules('no_ktp','no_ktp','required');
        $this->form_validation->set_rules('password','password','required');
    }





}