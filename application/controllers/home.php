<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct(){
        parent:: __construct();
    }
	public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();
        $data = array(
            'judul'   => "Beranda | Chiquila",
            'konfig'  => $konfig,
            'kategori'  => $kategori,
            'caraousel'  => $caraousel,
            'konten'  => $konten,
        );
		$this->load->view('beranda', $data);
	}

    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('a.id_kategori',$id);

        $konten = $this->db->get()->result_array();

        $this->db->from('kategori');
        $this->db->where('id_kategori',$id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        $data = array(
            'judul'   => $nama_kategori." | Chiquila",
            'nama_kategori' => $nama_kategori,
            'konfig'  => $konfig,
            'kategori'  => $kategori,
            'konten'  => $konten,
        );
		$this->load->view('kategori', $data);
    }

    public function artikel($id = null) {
        // Cek apakah $id diberikan
        if ($id === null) {
            // Jika tidak ada $id, redirect ke halaman utama atau halaman lain yang sesuai
            redirect('home'); // Ganti 'home' dengan controller yang sesuai jika perlu
            return; // Pastikan untuk menghentikan eksekusi lebih lanjut
        }
    
        // Ambil konfigurasi
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
    
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
    
        // Ambil kategori
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
    
        // Ambil konten berdasarkan slug
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();
    
        // Cek apakah konten ditemukan
        if (!$konten) {
            // Jika konten tidak ditemukan, redirect atau tampilkan pesan error
            show_404(); // Menampilkan halaman 404
            return; // Pastikan untuk menghentikan eksekusi lebih lanjut
        }
    
        // Siapkan data untuk view
        $data = array(
            'judul'    => $konten->judul . " | Chiquila",
            'konfig'   => $konfig,
            'kategori' => $kategori,
            'konten'   => $konten,
        );
    
        // Muat view dengan data
        $this->load->view('detail', $data);
    }

    
    public function menu() {
        
    
        // Ambil konfigurasi
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
    
        // Ambil kategori
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
    
        // Ambil konten berdasarkan slug
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $konten = $this->db->get()->result_array();
    
        // Siapkan data untuk view
        $data = array(
            'judul'    =>   " | Chiquila",
            'konfig'   => $konfig,
            'kategori' => $kategori,
            'konten'   => $konten,
            
        );
    
        // Muat view dengan data
        $this->load->view('menu', $data);
    }
}