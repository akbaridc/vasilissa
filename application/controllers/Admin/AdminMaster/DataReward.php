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
        $data = [
            'notif' => '',
            'title' => 'Data Reward - Master Admin',
            'active' => 'DataReward',
            'breadcumbs' => [
                'Data Reward' => ['title' => 'Data Reward', 'link' => 'admin-master/DataReward'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/DataReward/index', $data);
    }
}
