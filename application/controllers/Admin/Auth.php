<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  // public function __construct()
  // {
  //     parent::__construct();
  //     $this->load->library('template2');
  // }

  public function index()
  {
    if (!$this->session->userdata('id')) {
      $data['title'] = 'Login-Admin';
      $this->load->view('admin/auth/layout/header', $data);
      $this->load->view('admin/auth/login');
      $this->load->view('admin/auth/layout/footer', $data);
    } else {
      if ($this->session->userdata('hak_akses') == 1) {
        redirect('master-admin');
      } else {
        redirect('admin');
      }
    }
  }

  public function login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $hak_akses = $this->input->post('hak_akses');
    $cek_email = $this->db->get_where('admin_tbl', array('email' => $email));
    if ($cek_email->num_rows() == 0) {
      $this->session->set_flashdata("erorr", "Login Gagal ! Email Anda Tidak Terdaftar");
      redirect('login/pihak');
    } else {
      $admin = $cek_email->row_array();
      if ($admin['hak_akses'] != $hak_akses) {
        $this->session->set_flashdata("erorr", "Login Gagal ! Akses Ditolak");
        redirect('login/pihak');
      } else {
        if (password_verify($password, $admin['admin_pw'])) {

          if ($admin['status'] == 1) {

            $admin['nama_admin']  = $admin['nama'];
            $admin['id']          = $admin['id'];
            $admin['hak_akses']   = $admin['hak_akses'];
            $this->session->set_userdata($admin);

            if ($hak_akses == 1) {
              redirect('master-admin');
            } else {
              redirect('admin');
            }
          } else {
            $this->session->set_flashdata("erorr", "Login Gagal ! Akun Anda Belum Aktif");
            redirect('login/pihak');
          }
        } else {
          $this->session->set_flashdata("erorr", "Login Gagal ! Password Anda Salah");
          redirect('login/pihak');
        }
      }
    }
  }

  public function logout_admin()
  {
    $this->session->sess_destroy();
    redirect(base_url() . "login/pihak");
  }

  public function forgot_password()
  {
    $data['title'] = 'login admin';
    $this->load->view('admin/auth/layout/header', $data);
    $this->load->view('admin/auth/forgot_password');
    $this->load->view('admin/auth/layout/footer', $data);
  }
}
