<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataReward extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template2');
        $this->load->model('Setting_website_model');
    }

    public function index()
    {
        $reward = $this->db->get_where("reward_tbl")->result();
        $data = [
            'notif' => '',
            'title' => 'Data Reward - Admin',
            'active' => 'DataReward',
            'breadcumbs' => [
                'Data Reward' => ['title' => 'Data Reward', 'link' => 'admin/DataReward'],
            ],
            'reward' => $reward,
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataReward/index', $data);
    }

    public function tambah()
    {
        $data = [
            'notif' => '',
            'title' => 'Tambah Data Reward - Admin',
            'active' => 'DataReward',
            'breadcumbs' => [
                'Data Reward' => ['title' => 'Data Reward', 'link' => 'admin/DataReward'],
                'Tambah' => ['title' => 'Tambah', 'link' => 'admin/DataReward/tambah'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataReward/tambah', $data);
    }

    public function tambah_reward()
    {
        $level = $this->input->post("level");
        $reward = $this->input->post("reward");
        $point = $this->input->post("point");

        $data = [
            'level' => $level,
            'reward' => $reward,
            'point' => $point,
            'status' => 1
        ];

        $cek = $this->db->insert("reward_tbl", $data);
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Tambah Data Reward'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Tambah Data Reward'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect("admin/DataReward");
    }

    public function edit($id)
    {
        $reward = $this->db->get_where('reward_tbl', array('id' => $id))->row();
        $data = [
            'notif' => '',
            'title' => 'Edit Data Reward - Admin',
            'active' => 'DataReward',
            'breadcumbs' => [
                'Data Reward' => ['title' => 'Data Reward', 'link' => 'admin/DataReward'],
                'Edit' => ['title' => 'Edit', 'link' => 'admin/DataReward/edit'],
            ],
            'reward' => $reward,
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataReward/edit', $data);
    }


    public function edit_reward()
    {
        $id = base64_decode($this->input->post('id'));
        $level = $this->input->post("level");
        $reward = $this->input->post("reward");
        $point = $this->input->post("point");

        $data = [
            'level' => $level,
            'reward' => $reward,
            'point' => $point,
        ];

        $this->db->where('id', $id);
        $cek = $this->db->update('reward_tbl', $data);
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Edit Data Reward'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Edit Data Reward'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect(base_url() . "admin/DataReward");
    }

    public function json_reward()
    {
        $id = $this->input->post('id');

        $reward = $this->db->get_where('reward_tbl', ['id' => $id])->row_array();
        echo json_encode($reward);
    }

    public function hapus_reward($id)
    {
        $reward = $this->db->get_where('reward_tbl', array('id' => $id))->row();
        if ($reward) {
            $this->db->where('id', $id);
            $cek = $this->db->delete('reward_tbl');
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Berhasil Hapus Data Reward'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Hapus Data Reward'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "admin/DataReward");
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Hapus Data Reward'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "admin/DataReward");
        }
    }

    public function aktif_reward($id)
    {
        $reward = $this->db->get_where('reward_tbl', array('id' => $id))->row();
        if ($reward) {
            $data = array('status' => 1);
            $this->db->where('id', $id);
            $cek = $this->db->update('reward_tbl', $data);
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Berhasil Perbarui Data Reward'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Perbarui Data Reward'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect("admin/DataReward");
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Perbarui Data Reward'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect("admin/DataReward");
        }
    }

    public function nonaktif_reward($id)
    {
        $reward = $this->db->get_where('reward_tbl', array('id' => $id))->row();
        if ($reward) {
            $data = array('status' => 0);
            $this->db->where('id', $id);
            $cek = $this->db->update('reward_tbl', $data);
            // var_dump($cek);
            // die;
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Berhasil Perbarui Data Reward'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Perbarui Data Reward'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "admin/DataReward");
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Perbarui Data Reward'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "admin/DataReward");
        }
    }
}
