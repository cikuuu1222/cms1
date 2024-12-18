<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class caraousel extends CI_Controller {
    public function __construct(){
        parent:: __construct(); 
        // if($this->session->userdata('level')==NULL){
		// 	redirect('auth');
		// }
		
    }
	public function index(){
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$data = array (
			'judul_halaman' 	=> 'Halaman caraousel',
			'caraousel'          => $caraousel,
		);
	
		$this->template->load('admin/template','admin/caraousel_index', $data);
	}
	public function simpan(){
        // data_default_timezone_set("Asia/Jakarta");
        $namafoto = date('YmdHis'). '.jpg';
        $config['upload_path']        = 'assets/upload/caraousel/';
        $config['max_size']= 500 * 1024; //3* 1024 *1024; // 3mb; 0unlimited
        $config['allowed_types']      = '*';
        // $config['overwrite']          = TRUE;
        $config['file_name']          = $namafoto;
        $this->load->library('upload', $config);
        if(! isset($_FILES['foto']['size']) >= 500 *1024 ){
            $this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible mb-0" role="alert">
				Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
			</div>
			');
			redirect('admin/konten');
        } elseif (! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data  = array('upload_data' => $this->upload->data());
        }
		$data = array(
			'judul'  => $this->input->post('judul'),
			'foto'  => $namafoto,
		);
		$this->db->insert('caraousel', $data);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-primary alert-dismissible mb-0" role="alert">
          Massyaallah Berhasil menambahkan caraousel
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
		');
		redirect('admin/caraousel');
	}
	public function delete_data($id) {
		// // Ambil data konten berdasarkan ID untuk mendapatkan nama file
		// $konten = $this->db->get_where('caraousel', array('id_konten' => $id_konten))->row_array();
	
		// Pastikan data ditemukan
		// if (!$konten) {
		// 	$this->session->set_flashdata('alert', '
		// 	<div class="alert alert-danger alert-dismissible mb-0" role="alert">
		// 		Konten tidak ditemukan atau sudah dihapus.
		// 		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
		// 		</button>
		// 	</div>
		// 	');
		// 	redirect('admin/caraousel');
		// }
	
        $where = array(
            'foto'  => $id
        );
		// Hapus data dari database berdasarkan ID konten
		$this->db->delete('caraousel', $where);
	
		$this->session->set_flashdata('alert', '
		<div class="alert alert-dark alert-dismissible mb-0" role="alert">
			Alhamdulillah caraousel berhasil dihapus.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			</button>
		</div>
		');
		redirect('admin/caraousel');
	}

	
}