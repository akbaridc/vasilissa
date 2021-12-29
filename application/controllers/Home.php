<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('Setting_website_model');
    }

    public function index()
    {
        $produk_paket = $this->db->select("*")
            ->from("produk_tbl p")
            ->join("foto_produk_tbl fp", "fp.id_produk =  p.id_pd")
            ->where("p.jenis", 1)
            ->get()->result();
        $produk_item = $this->db->select("*")
            ->from("produk_tbl p")
            ->join("foto_produk_tbl fp", "fp.id_produk =  p.id_pd")
            ->where("p.jenis", 2)
            ->limit(6)
            ->get()->result();
        $data = [
            'produk_paket' => $produk_paket,
            'produk_item' => $produk_item,
            'title' => 'Navilissa Beauty',
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template->views('user/home', $data);
    }

    public function SemuaProduk()
    {
        $data = [
            'title' => 'Semua Produk',
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template->views('user/all_produk', $data);
    }

    public function ProdukDetail($id)
    {
        $foto_produk = $this->db->select("*")
            ->from("produk_tbl p")
            ->join("foto_produk_tbl fp", "fp.id_produk =  p.id_pd")
            ->where("p.id_pd", $id)
            ->get()->result();

        $produk = $this->db->select("*")
            ->from("produk_tbl p")
            ->join("foto_produk_tbl fp", "fp.id_produk =  p.id_pd")
            ->where("p.id_pd", $id)
            ->get()->row();
        // var_dump($produk);
        // die;
        $data = [
            'produk' => $produk,
            'foto_produk' => $foto_produk,
            'title' => 'lacoco-bust-fit-concentrate-serum',
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template->views('user/product_detail', $data);
    }
}
