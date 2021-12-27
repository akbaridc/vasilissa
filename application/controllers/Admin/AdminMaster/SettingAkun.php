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
        $data = [
            'notif' => '',
            'title' => 'Setting Akun - Master Admin',
            'active' => 'SettingAkun',
            'breadcumbs' => [
                'Setting Akun' => ['title' => 'Setting Akun', 'link' => 'admin-master/SettingAkun'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/SettingAkun/index', $data);
    }
}
