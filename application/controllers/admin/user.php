<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		$this->load->model('user_model');
		
    }
	public function index(){
		$this->db->from('user');
		$this->db->order_by('nama', 'ASC');
		$user = $this->db->get()->result_array();
		$data = array (
			'judul_halaman' => 'Data pengguna',
			'user'          => $user
		);
	
		$this->template->load('admin/template','admin/user_index', $data);
	}
	public function simpan(){
		$this->db->from('user');
		$this->db->where('username', $this->input->post('username'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible mb-0" role="alert">
				Allahhu Akbar Username syudah ada
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
			</div>
			');
			redirect('admin/user');
		}
		$this->user_model->simpan();
		$this->session->set_flashdata('alert', '
		<div class="alert alert-danger alert-dismissible mb-0" role="alert">
          Massyaallah Berhasil Disimpan
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
		');
		redirect('admin/user');
	}
	public function delete_data($id){
		$where = array(
			'id_user' => $id
		);
		$this->db->delete('user',$where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-warning alert-dismissible mb-0" " role="alert">
          Alhamdulillah berhasil dihapuss
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
		');
		redirect('admin/user');
	}
	public function update(){
		$this->user_model->update();
		$this->session->set_flashdata('alert', '
		<div class="alert alert-danger alert-dismissible mb-0" role="alert">
          Massyaallah Berhasil Disimpan
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
		');
		redirect('admin/user');
    }
}