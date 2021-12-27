<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataMember extends CI_Controller
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
            'title' => 'Data Member - Admin',
            'active' => 'DataMember',
            'breadcumbs' => [
                'Data Member' => ['title' => 'Data Member', 'link' => 'admin/DataMember'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataMember/index', $data);
    }

    public function TrackingLevelMember()
    {
        $data = [
            'notif' => '',
            'title' => 'Tracking Level Member - Admin',
            'active' => 'TrackingLevelMember',
            'breadcumbs' => [
                'Data Member' => ['title' => 'Data Member', 'link' => 'admin/DataMember'],
                'Tracking Level Member' => ['title' => 'Tracking Level Member', 'link' => 'admin/DataMember/TrackingLevelMember']
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataMember/tracking_member', $data);
    }

    public function UserMember()
    {
        $data = [
            'notif' => '',
            'title' => 'User Member - Admin',
            'active' => 'UserMember',
            'breadcumbs' => [
                'Data Member' => ['title' => 'Data Member', 'link' => 'admin/DataMember'],
                'User Member' => ['title' => 'User Member', 'link' => 'admin/DataMember/UserMember'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataMember/user_member', $data);
    }

    public function tambah()
    {
        $data = [
            'notif' => '',
            'title' => 'Tambah Data Member - Admin',
            'active' => 'DataMember',
            'breadcumbs' => [
                'Data Member' => ['title' => 'Data Member', 'link' => 'admin/DataMember'],
                'Tambah Data Member' => ['title' => 'Tambah Data Member', 'link' => 'admin/DataMember/tambah'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataMember/tambah', $data);
    }

    public function edit()
    {
        $data = [
            'notif' => '',
            'title' => 'Edit Data Member - Admin',
            'active' => 'DataMember',
            'breadcumbs' => [
                'Data Member' => ['title' => 'Data Member', 'link' => 'admin/DataMember'],
                'Edit Data Member' => ['title' => 'Edit Data Member', 'link' => 'admin/DataMember/edit'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/admin-biasa/DataMember/edit', $data);
    }
}
