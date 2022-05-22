<?php

class Data_registrasi extends CI_Controller{
    public function index(){
        $data['mahasiswa'] = $this->rental_model->get_data('mahasiswa')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('data_registrasi',$data);
    }

}

?>