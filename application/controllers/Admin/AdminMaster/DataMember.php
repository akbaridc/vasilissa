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
            'title' => 'Data Member - Master Admin',
            'active' => 'DataMember',
            'breadcumbs' => [
                'Data Member' => ['title' => 'Data Member', 'link' => 'admin-master/DataMember'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/DataMember/index', $data);
    }

    public function TrackingLevelMember()
    {
        $data = [
            'notif' => '',
            'title' => 'Tracking Level Member - Master Admin',
            'active' => 'TrackingLevelMember',
            'breadcumbs' => [
                'Data Member' => ['title' => 'Data Member', 'link' => 'admin-master/DataMember'],
                'Tracking Level Member' => ['title' => 'Tracking Level Member', 'link' => 'admin-master/TrackingLevelMember'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/DataMember/tracking_member', $data);
    }

    public function UserMember()
    {
        $data = [
            'notif' => '',
            'title' => 'User Member - Master Admin',
            'active' => 'UserMember',
            'breadcumbs' => [
                'Data Member' => ['title' => 'Data Member', 'link' => 'admin-master/DataMember'],
                'User Member' => ['title' => 'User Member', 'link' => 'admin-master/UserMember'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template2->views('admin/master-admin/DataMember/user_member', $data);
    }
}
