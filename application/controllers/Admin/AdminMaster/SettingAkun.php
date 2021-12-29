<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingAkun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template2');
        $this->load->model('Setting_website_model');
    }

    public function index()
    {
        $id = $this->session->userdata('id');
        $akun = $this->db->get_where('admin_tbl', array('id' => $id))->row_array();
        $data = [
            'notif' => '',
            'akun' => $akun,
            'title' => 'Setting Akun - Master Admin',
            'active' => 'akun',
            'breadcumbs' => [
                'Setting Akun' => ['title' => 'Setting Akun', 'link' => 'admin-master/SettingAkun'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/SettingAkun/index', $data);
    }

    public function edit_password()
    {
        $id = base64_decode($this->input->post('id'));
        $password1 = $this->input->post('password1');
        $password2 = $this->input->post('password2');

        if ($password1 == $password2) {
            $data_admin = array(
                'admin_pw' => password_hash($password1, PASSWORD_DEFAULT),
            );
            $this->db->where('id', $id);
            $cek = $this->db->update("admin_tbl", $data_admin);
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Berhasil Perbarui Password'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Perbarui Password'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "master-admin/akun");
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Perbarui Password, Password tidak sama'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "master-admin/akun");
        }
    }

    public function edit()
    {
        $id = base64_decode($this->input->post('id'));
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');

        $get = $this->db->get_where('admin_tbl', array('id' => $id))->row();
        $foto = $get->foto_user;

        $nama_file = '';

        if ($_FILES['foto_admin']['name'] != '') {

            $uploadPath = 'assets/vasilissa/admin/akun/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|JPEG|PNG|GIF';
            $config['encrypt_name'] = TRUE;
            $config['max_size'] = '500';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto_admin')) {
                $fileData = $this->upload->data();
                $nama_file = $fileData['file_name'];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Perbarui Data Profil, File tidak sesuai ketentuan'
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect(base_url() . "master-admin/akun");
            }
        } else {
            $nama_file = $get->foto_user;
        }

        $data_admin = array(
            'nama' => $nama,
            'email' => $email,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'foto_user' => $nama_file,
        );

        $this->db->where('id', $id);
        $cek = $this->db->update("admin_tbl", $data_admin);
        if ($cek) {
            if (!empty($foto)) {
                $paths = 'assets/vasilissa/admin/akun/' . $foto;
                unlink($paths);
            }
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Perbarui Data Profil'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "master-admin/akun");
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Perbarui Data Profil'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "master-admin/akun");
        }
    }
}
