<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template3');
        $this->load->model('Setting_website_model');
    }

    public function index()
    {
        if ($this->session->userdata('id')) {
            $data = [
                'title' => 'Dashboard - Member',
                'active' => 'member',
                'data' => $this->Setting_website_model->getDataWebsite(),
                'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
            ];
            $this->template3->views('member/dashboard', $data);
        } else {
            redirect('login/member');
        }
    }
}
