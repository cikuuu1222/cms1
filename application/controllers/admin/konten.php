<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konten extends CI_Controller {
    public function __construct(){
        parent:: __construct(); 
        // if($this->session->userdata('level')==NULL){
		// 	redirect('auth');
		// }
		
    }
	public function index(){
		$this->db->from('kategori');
		$this->db->order_by('nama_kategori', 'ASC');
		$kategori = $this->db->get()->result_array();

		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();
		$data = array (
			'judul_halaman' 	=> 'Halaman konten',
			'kategori'          => $kategori,
            'konten'            => $konten,
		);
	
		$this->template->load('admin/template','admin/konten_index', $data);
	}
	public function simpan(){
        // data_default_timezone_set("Asia/Jakarta");
        $namafoto = date('YmdHis'). '.jpg';
        $config['upload_path']        = 'assets/upload/konten/';
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
		$this->db->from('konten');
		$this->db->where('judul', $this->input->post('judul'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible mb-0" role="alert">
				Allahhu Akbar Judul konten sudah ada!!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
			</div>
			');
			redirect('admin/konten');
		}
		$data = array(
			'judul'  => $this->input->post('judul'),
			'id_kategori'  => $this->input->post('id_kategori'),
			'keterangan'  => $this->input->post('keterangan'),
			'tanggal'  => date('Y-m-d'),
			'foto'  => $namafoto,
			'Harga' => $this->input->post('Harga'),
			'username'  => $this->session->userdata('username'),
			'slug'  => str_replace( ' ', '-',$this->input->post('judul')),
		);
		$this->db->insert('konten', $data);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-primary alert-dismissible mb-0" role="alert">
          Massyaallah Berhasil menambahkan konten
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
		');
		redirect('admin/konten');
	}
	public function delete_data($id_konten) {
		// Ambil data konten berdasarkan ID untuk mendapatkan nama file
		$konten = $this->db->get_where('konten', array('id_konten' => $id_konten))->row_array();
	
		// Pastikan data ditemukan
		if (!$konten) {
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible mb-0" role="alert">
				Konten tidak ditemukan atau sudah dihapus.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
			</div>
			');
			redirect('admin/konten');
		}
	
		// // Hapus file foto jika ada
		// $file_path = FCPATH . "/assets/upload/konten/" . $konten['foto'];
		// if (file_exists($file_path)) {
		// 	unlink($file_path); // Hapus file fisik
		// }
	
		// Hapus data dari database berdasarkan ID konten
		$this->db->delete('konten', array('id_konten' => $id_konten));
	
		$this->session->set_flashdata('alert', '
		<div class="alert alert-dark alert-dismissible mb-0" role="alert">
			Alhamdulillah Konten berhasil dihapus.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			</button>
		</div>
		');
		redirect('admin/konten');
	}
	public function update(){
        // data_default_timezone_set("Asia/Jakarta");
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']        = 'assets/upload/konten/';
        $config['max_size']= 500 * 1024; //3* 1024 *1024; // 3mb; 0unlimited
        $config['allowed_types']      = '*';
        $config['overwrite']          = TRUE;
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
			'id_kategori'  => $this->input->post('id_kategori'),
			'keterangan'  => $this->input->post('keterangan'),
			'Harga' => $this->input->post('Harga'),
			'slug'  => str_replace(' ', '-',$this->input->post('judul')),
		);
		$where = array(
			'foto'   =>   $this->input->post('nama_foto')
		);
		$this->db->update('konten', $data, $where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-primary alert-dismissible mb-0" role="alert">
          Massyaallah Berhasil memperbarui konten
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
		');
		redirect('admin/konten');
	}
	
}