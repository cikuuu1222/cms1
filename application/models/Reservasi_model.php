<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi_model extends CI_Model {

    public function tambah_reservasi($data)
    {
        $data = array(
			'nama'       	 => $this->input->post('nama'),
			'email'       => $this->input->post('email'),
			'no_hp'       	 => $this->input->post('no_hp'),
            'tanggal'       	 => $this->input->post('tanggal'),
            'waktu'       	 => $this->input->post('waktu'),
            'jumlah_orang'       	 => $this->input->post('jumlah_orang'),
		);
        $this->db->insert('reservasi', $data);
    }

    public function lihat_reservasi()
    {
        return $this->db->get('reservasi')->result();
    }

    public function hapus_reservasi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('reservasi');
    }
}