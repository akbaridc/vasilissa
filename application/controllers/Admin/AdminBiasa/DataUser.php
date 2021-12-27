<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template2');
        $this->load->model(['Setting_website_model', 'App_model']);
    }

    public function index()
    {
        $data = [
            'notif' => '',
            'title' => 'Data User - Admin',
            'active' => 'DataUser',
            'breadcumbs' => [
                'Data User' => ['title' => 'Data User', 'link' => 'admin/DataUser'],
            ],
            'user' => $this->App_model->get_table('user_tbl'),
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataUser/index', $data);
    }

    public function jsonData()
    {
        $id = $this->input->post('id');

        $user = $this->db->get_where("user_tbl", ['id_user' => $id])->row_array();
        echo json_encode($user);
    }

    public function tambah()
    {
        $data = [
            'notif' => '',
            'title' => 'Tambah Data User - Admin',
            'active' => 'DataUser',
            'breadcumbs' => [
                'Data User' => ['title' => 'Data User', 'link' => 'admin/DataUser'],
                'Tambah' => ['title' => 'Tambah', 'link' => 'admin/DataUser/tambah'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataUser/tambah', $data);
    }

    public function tambah_user()
    {
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data_user = [
            'nama' => $nama,
            'email' => $email,
            'pw_user' => password_hash($password, PASSWORD_DEFAULT),
            'is_member' => 0,
            'foto' => 'avatar-1.png'
        ];

        $cek = $this->db->insert('user_tbl', $data_user);
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Tambah Data User'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Tambah Data User'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect(base_url() . "admin/DataUser");
    }

    public function edit($id)
    {
        $user = $this->db->get_where("user_tbl", ['id_user' => $id])->row();
        $data = [
            'notif' => '',
            'user' => $user,
            'title' => 'Edit Data User - Admin',
            'active' => 'DataUser',
            'breadcumbs' => [
                'Data User' => ['title' => 'Data User', 'link' => 'admin/DataUser'],
                'Edit' => ['title' => 'Edit', 'link' => 'admin/DataUser/edit'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataUser/edit', $data);
    }

    public function edit_user()
    {
        $id = base64_decode($this->input->post('id'));
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($password != '') {

            $data_user = [
                'nama' => $nama,
                'email' => $email,
                'pw_user' => password_hash($password, PASSWORD_DEFAULT)
            ];
            $this->db->where('id_user', $id);
            $cek = $this->db->update('user_tbl', $data_user);
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Berhasil Edit Data User'
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect(base_url("admin/DataUser"));
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Edit Data User'
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect(base_url("admin/DataUser/edit/" . $id));
            }
            $this->session->set_flashdata('notif', $notif);
        } else {
            $data_user = [
                'nama' => $nama,
                'email' => $email
            ];
            $this->db->where('id_user', $id);
            $cek = $this->db->update('user_tbl', $data_user);
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Berhasil Edit Data User'
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect(base_url() . "admin/DataUser");
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Edit Data User'
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect(base_url("admin/DataUser/edit/" . $id));
            }
        }
    }

    public function is_member($id)
    {
        $produk = $this->db->get_where('user_tbl', array('id_user' => $id))->row();
        if ($produk) {
            $data = array('is_member' => 1);
            $this->db->where('id_user', $id);
            $cek = $this->db->update('user_tbl', $data);
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => "Berhasil menjadikan $produk->nama sebagai member"
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => "Gagal menjadikan $produk->nama sebagai member"
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect("admin/DataUser");
        } else {
            $notif = [
                'status' => 'error',
                'title' => "Gagal menjadikan $produk->nama sebagai member"
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect("admin/DataUser");
        }
    }

    public function hapus_user($id)
    {
        $user = $this->db->get_where('user_tbl', array('id_user' => $id))->row();
        if ($user) {
            $this->db->where('id_user', $id);
            $cek = $this->db->delete('user_tbl');
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Berhasil Hapus Data User'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Hapus Data User'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "admin/DataUser");
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Hapus Data User'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "admin/DataUser");
        }
    }
}
