<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Reservasi_model');
    }

    public function index()
    {
        $data['title'] = 'Reservasi';
        $this->load->view('reservasi', $data);
    }

    public function tambah_reservasi()
    {
        
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        $jumlah_orang = $this->input->post('jumlah_orang');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'no_hp' => $no_hp,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'jumlah_orang' => $jumlah_orang
        );

        $this->Reservasi_model->tambah_reservasi($data);
        $this->session->set_flashdata('pesan', 'Reservasi berhasil ditambahkan!');
        redirect('reservasi');
    }

    public function lihat_reservasi()
    {
        $data['reservasi'] = $this->Reservasi_model->lihat_reservasi();
        $this->load->view('lihat_reservasi', $data);
    }

    public function hapus_reservasi($id)
    {
        $this->Reservasi_model->hapus_reservasi($id);
        $this->session->set_flashdata('pesan', 'Reservasi berhasil dihapus!');
        redirect('reservasi/lihat_reservasi');
    }
    public function simpan_reservasi(){
		$this->db->from('reservasi');
		$this->db->where('nama', $this->input->post('nama'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert', '
			<div class="alert alert-danger alert-dismissible mb-0" role="alert">
				Allahhu Akbar kategori konten sudah di gunakan!!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
			</div>
			');
			redirect('reservasi');
		}
}
}
