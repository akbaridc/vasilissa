<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TransaksiWithdrawReward extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template2');
        $this->load->model('Setting_website_model');
    }

    public function index()
    {
        $data = [
            'notif' => '',
            'title' => 'Transaksi Withdraw Reward - Master Admin',
            'active' => 'TransaksiWithdrawReward',
            'breadcumbs' => [
                'Transaksi WIthdraw Reward' => ['title' => 'Transaksi WIthdraw Reward', 'link' => 'admin-master/TransaksiWithdrawReward'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/TransaksiWithdrawReward/index', $data);
    }
}
