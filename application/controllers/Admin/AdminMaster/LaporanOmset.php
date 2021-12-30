<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanOmset extends CI_Controller
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
            'title' => 'Laporan Omset - Master Admin',
            'active' => 'LaporanOmset',
            'breadcumbs' => [
                'Laporan Omset' => ['title' => 'Laporan Omset', 'link' => 'admin-master/LaporanOmset'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/LaporanOmset/index', $data);
    }
}
