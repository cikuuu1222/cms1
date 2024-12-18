<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfigurasi extends CI_Controller {
    
	public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
		$data = array (
			'judul_halaman' => 'Halaman Konfigurasi',
            'konfig'        => $konfig
		);
	
		$this->template->load('admin/template','admin/konfigurasi', $data);
	}
    public function update(){
		$where = array('id_konfigurasi'  => 1);
		$data = array(
            'judul_website' => $this->input->post('judul'),
            'profil_website' => $this->input->post('profil_website'),
            'instagram' => $this->input->post('instagram'),
            'facebook' => $this->input->post('facebook'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'no_wa' => $this->input->post('no_wa'),
        );
		$this->db->update('konfigurasi', $data,$where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-warning alert-dismissible mb-0" role="alert">
          Alhamdulillah berhasil memperbarui Konfigurasi
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
		');
		redirect('admin/konfigurasi');
    }
}