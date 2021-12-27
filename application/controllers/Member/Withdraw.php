<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Withdraw extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template3');
        $this->load->model('Setting_website_model');
    }

    public function history()
    {
        $data = [
            'title' => 'Withdraw',
            'active' => 'Withdraw',
            'breadcumbs' => [
                'Withdraw' => ['title' => 'Withdraw', 'link' => ''],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/Withdraw/index', $data);
    }

    public function input()
    {
        $data = [
            'title' => 'Withdraw reward',
            'active' => 'Withdraw',
            'breadcumbs' => [
                'Withdraw' => array('title' => 'Withdraw', 'target' => 'Withdraw', 'link' => ''),
                'Withdraw reward' => ['title' => 'Withdraw reward', 'link' => ''],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/Withdraw/input', $data);
    }
}
