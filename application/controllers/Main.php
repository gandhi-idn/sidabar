<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Main extends CI_Controller
{
     //functions  
     function login()
     {
          //http://localhost/tutorial/codeigniter/main/login  
          $data['title'] = 'CodeIgniter Simple Login Form With Sessions';
          $this->load->view("login", $data);
     }
     function login_validation()
     {
          $this->load->library('form_validation');
          $this->form_validation->set_rules('username', 'Username', 'required');
          $this->form_validation->set_rules('password', 'Password', 'required');
          if ($this->form_validation->run()) {
               //true  
               $username = $this->input->post('username');
               $password = $this->input->post('password');
               //model function  
               $this->load->model('main_model');
               if ($this->main_model->can_login($username, $password)) {
                    $session_data = array(
                         'username'     =>     $username
                    );
                    $this->session->set_userdata($session_data);
                    redirect(base_url() . 'index.php/main/enter');
               } else {
                    $this->session->set_flashdata('error', 'Invalid Username and Password');
                    redirect(base_url() . 'index.php/main/login');
               }
          } else {
               //false  
               $this->login();
          }
     }
     function enter()
     {
          if ($this->session->userdata('username') != '') {


               // select table progres
               $this->db->select('*');
               $this->db->from('progres');
               $this->db->join('barang', 'progres.id_barang = barang.id_barang', 'inner');
               $this->db->join('bo', 'progres.id_bo = bo.id_bo', 'inner');
               $this->db->join('detail_status', 'progres.id_status = detail_status.id_status', 'left');

               $query['table'] = $this->db->get();

               $this->load->view('dashboard', $query);
          } else {
               redirect(base_url() . 'index.php/main/login');
          }
     }

     function progres()
     {

          if ($this->session->userdata('username') != '') {

               // select table progres barang masuk IT
               $this->db->select('progres.id_prog, progres.tgl_masuk_barang, progres.keterangan_log, progres.keterangan_bo, barang.merk_barang, barang.nama_barang, bo.nama_bo, detail_status.status');
               $this->db->from('progres');
               $this->db->join('barang', 'progres.id_barang = barang.id_barang', 'inner');
               $this->db->join('bo', 'progres.id_bo = bo.id_bo', 'inner');
               $this->db->join('detail_status', 'progres.id_status = detail_status.id_status', 'left');
               $this->db->where('detail_status.id_status', 2);
               $query['prog'] = $this->db->get();

               // select table progres barang servie IT
               $this->db->select('*');
               $this->db->from('progres');
               $this->db->join('barang', 'progres.id_barang = barang.id_barang', 'inner');
               $this->db->join('bo', 'progres.id_bo = bo.id_bo', 'inner');
               $this->db->join('detail_status', 'progres.id_status = detail_status.id_status', 'left');
               $this->db->where(
                    'detail_status.id_status',
                    3
               );
               $query['service'] = $this->db->get();

               // select table progres barang selesai IT
               $this->db->select('*');
               $this->db->from('progres');
               $this->db->join('barang', 'progres.id_barang = barang.id_barang', 'inner');
               $this->db->join('bo', 'progres.id_bo = bo.id_bo', 'inner');
               $this->db->join('detail_status', 'progres.id_status = detail_status.id_status', 'left');
               $this->db->where('progres.id_status', 1);
               $this->db->or_where('progres.id_status', 4);
               $this->db->or_where('progres.id_status', 5);
               $query['selesai'] = $this->db->get();

               $query['barang'] = $this->db->query('SELECT * FROM BARANG WHERE ID_BARANG NOT IN(SELECT id_barang FROM PROGRES)');
               $query['bo'] = $this->db->get('bo');
               $query['status'] = $this->db->get('detail_status');

               $this->load->view('progres', $query);
          }
     }

     function edit_progres($id_prog)
     {
          // select table progres barang masuk IT
          $this->db->select('*');
          $this->db->from('progres');
          $this->db->join('barang', 'progres.id_barang = barang.id_barang', 'inner');
          $this->db->join('bo', 'progres.id_bo = bo.id_bo', 'inner');
          $this->db->join('detail_status', 'progres.id_status = detail_status.id_status', 'left');
          $this->db->where('progres.id_prog', $id_prog);
          $data = $this->db->get()->row();
          echo json_encode($data);
     }

     function input_barang()
     {
          $query['table'] = $this->db->query('SELECT * FROM BARANG WHERE ID_BARANG NOT IN(SELECT id_barang FROM PROGRES)');

          $this->load->view('input', $query);
     }

     function get_barang($id)
     {
     }

     function logout()
     {
          $this->session->unset_userdata('username');
          redirect(base_url() . 'index.php/main/login');
     }

     function edit_prog()
     {
          $this->load->view('edit_prog');
     }

     function filter_laporan()
     {
          $this->load->view('filter_laporan');
     }
     function laporan()
     {
          // select table progres barang masuk
          $this->db->select('*');
          $this->db->from('progres');
          $this->db->join('barang', 'progres.id_barang = barang.id_barang', 'inner');
          $this->db->join('bo', 'progres.id_bo = bo.id_bo', 'inner');
          $this->db->join('detail_status', 'progres.id_status = detail_status.id_status', 'left');
          $query['data'] = $this->db->get();

          $this->load->view('laporan', $query);
     }
}
