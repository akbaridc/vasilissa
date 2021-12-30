<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template2');
        $this->load->model('Setting_website_model');
    }

    public function index()
    {
        if ($this->session->userdata('id')) {
            $omset = $this->db->select("SUM(harga) as omset_produk")
                ->from("member_produk_tbl")
                ->where("status", 2)
                ->get()->row();
            $data = [
                'title' => 'Dashboard - Master Admin',
                'active' => 'master-admin',
                'data' => $this->Setting_website_model->getDataWebsite(),
                'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
                'user' => $this->db->get_where('user_tbl')->num_rows(),
                'member' => $this->db->get_where('member_tbl')->num_rows(),
                'produk' => $this->db->get_where('produk_tbl')->num_rows(),
                'reward' => $this->db->get_where('reward_tbl')->num_rows(),
                'produk_terjual' => $this->db->get_where('member_produk_tbl', ['status' => 2])->num_rows(),
                'omset' => $omset,
            ];
            // var_dump($data['omset']);
            // die;
            $this->template2->views('admin/master-admin/dashboard', $data);
        } else {
            redirect('login/pihak');
        }
    }
}
