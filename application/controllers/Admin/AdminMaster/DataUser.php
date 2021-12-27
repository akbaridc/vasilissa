<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataUser extends CI_Controller
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
            'title' => 'Data User - Master Admin',
            'active' => 'DataUser',
            'breadcumbs' => [
                'Data User' => ['title' => 'Data User', 'link' => 'admin-master/DataUser'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/DataUser/index', $data);
    }
}
