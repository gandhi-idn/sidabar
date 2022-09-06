<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function input_barang()
    {
        $input = array(
            'no_inv' => $this->input->post('no_inv'),
            'nama_barang' => $this->input->post('nama_barang'),
            'merk_barang' => $this->input->post('merk_barang'),
            'harga' => $this->input->post('harga'),
            'spec' => $this->input->post('spec'),
        );
        $this->db->insert('barang', $input);
        redirect('index.php/main/dashboard');
    }
    public function input_progres()
    {
        $id_status = 2;
        $input = array(
            'id_barang' => $this->input->post('id_barang'),
            'id_bo' => $this->input->post('id_bo'),
            'keterangan_log' => $this->input->post('keterangan_log'),
            'keterangan_bo' => $this->input->post('keterangan_bo'),
            'tgl_masuk_barang' => $this->input->post('tgl_masuk'),
            'id_status' => $id_status,
        );
        $this->db->insert('progres', $input);
        redirect('index.php/main/progres');
    }
}
