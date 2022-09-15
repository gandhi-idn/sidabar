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

    public function update_progres($id)
    {
        $data = array(
            'tgl_service' => date("Y-m-d H:i:s"),
            'id_status' => 3,

        );

        $this->db->where('id_prog', $id);
        $this->db->update('progres', $data);
        redirect('index.php/main/progres');
    }

    public function update_progres_2($id, $id_status)
    {

        // select table progres
        $this->db->select('*');
        $this->db->from('progres');
        $this->db->where('id_prog', $id);
        $query['progres'] = $this->db->get();

        // select table status
        $this->db->select('*');
        $this->db->from('detail_status');
        $this->db->where('id_status', $id_status);
        $query['status'] = $this->db->get();
        $this->load->view('edit_prog', $query);
    }

    public function update_progres_3($id)
    {
        $data = array(
            'id_prog' => $id,
            'id_status' => $this->input->post('id_status'),
            'tgl_selesai' => $this->input->post('tgl_selesai'),
            'keterangan_final' => $this->input->post('keterangan_final'),
        );

        $this->db->where('id_prog', $id);
        $this->db->update('progres', $data);
        redirect('index.php/main/progres');
    }

    public function data_laporan()
    {

        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $jenis = $this->input->post('jenis');
        if ($jenis == 2) {
            $tgl = 'tgl_masuk_barang >=';
            $tgl_a = 'tgl_masuk_barang <=';
        } elseif ($jenis == 3) {
            $tgl = 'tgl_service >=';
            $tgl_a = 'tgl_service <=';
        } else {
            $tgl = 'tgl_selesai >=';
            $tgl_a = 'tgl_selesai <=';
        }
        // var_dump($tgl);

        // select table progres barang masuk
        $this->db->select('*');
        $this->db->from('progres');
        $this->db->join('barang', 'progres.id_barang = barang.id_barang', 'inner');
        $this->db->join('bo', 'progres.id_bo = bo.id_bo', 'inner');
        $this->db->join('detail_status', 'progres.id_status = detail_status.id_status', 'left');
        $this->db->where($tgl, $tgl_awal);
        $this->db->where($tgl_a, $tgl_akhir);

        $query['data'] = $this->db->get();
        // var_dump($query);
        $this->load->view('laporan', $query);
    }
}
