<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TrackingLevel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template3');
        $this->load->model('Setting_website_model');
    }

    public function index()
    {
        $data = [
            'title' => 'Tracking Level',
            'active' => 'TrackingLevel',
            'breadcumbs' => [
                'Tracking Level' => ['title' => 'Tracking Level', 'link' => ''],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/TrackingLevel/index', $data);
    }

    public function UserMember()
    {
        $data = [
            'title' => 'Detail User Member',
            'active' => 'TrackingLevel',
            'breadcumbs' => [
                'Tracking Level' => array('title' => 'Tracking Level', 'link' => ''),
                'Detail User Member' => ['title' => 'Detail user member', 'link' => ''],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/TrackingLevel/user_member', $data);
    }
}
