<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    if (!$this->session->userdata('id_member')) {
      $data['title'] = 'Login-Member';
      $this->load->view('member/auth/layout/header', $data);
      $this->load->view('member/auth/login');
      $this->load->view('member/auth/layout/footer', $data);
    } else {
      redirect('member');
    }
  }

  public function login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $cek_email = $this->db->get_where('member_tbl', array('email' => $email));
    if ($cek_email->num_rows() == 0) {
      $this->session->set_flashdata("erorr", "Login Gagal ! Email Anda Tidak Terdaftar");
      redirect('login/member');
    } else {
      $member = $cek_email->row_array();
      if (password_verify($password, $member['pw_member'])) {

        if ($member['status'] == 1) {
          $member['nama_member'] = $member['nama'];
          $member['id']          = $member['id_member'];
          $this->session->set_userdata($member);

          redirect('member');
        } else {
          $this->session->set_flashdata("erorr", "Login Gagal ! Akun Anda Belum Aktif");
          redirect('login/member');
        }
      } else {
        $this->session->set_flashdata("erorr", "Login Gagal ! Password Anda Salah");
        redirect('login/member');
      }
    }
  }

  public function logout_member()
  {
    $this->session->sess_destroy();
    redirect(base_url() . "login/member");
  }

  public function lupa_password()
  {
    if (!$this->session->userdata('id_member')) {
      $data['title'] = 'Forgot-Password-Member';
      $this->load->view('member/auth/layout/header', $data);
      $this->load->view('member/auth/forgot_password');
      $this->load->view('member/auth/layout/footer', $data);
    } else {
      redirect('member');
    }
  }
}
