<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataProduk extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('template2');
    $this->load->model('Setting_website_model');
  }

  public function index()
  {
    $this->db->order_by('jenis', 'DESC');
    $produk = $this->db->get_where('produk_tbl')->result();
    $data = [
      'notif' => '',
      'produk' => $produk,
      'title' => 'Data Produk - Admin',
      'active' => 'DataProduk',
      'breadcumbs' => [
        'Data Produk' => ['title' => 'Data Produk', 'link' => 'admin/DataProduk'],
      ],
      'data' => $this->Setting_website_model->getDataWebsite(),
      'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
    ];
    $this->template2->views('admin/admin-biasa/DataProduk/index', $data);
  }

  public function jsonData()
  {
    $id = $this->input->post('id');

    $produk = $this->db->select("*")->from("produk_tbl")->where("id_pd", $id)->get()->row_array();
    echo json_encode($produk);
  }

  function get_kode_produk()
  {
    $id = $this->input->post('id', TRUE);

    $this->db->select('RIGHT(produk_tbl.kode_pd,3) as kode', FALSE);
    $this->db->where('jenis', $id);
    $this->db->order_by('kode', 'DESC');
    $this->db->limit(1);
    $data = $this->db->get('produk_tbl');
    $awal = '';

    if ($id == 1) {
      $awal = 'PKT-';
    } else {
      $awal = 'ITM-';
    }

    if ($data->num_rows() <> 0) {
      $get_kode = $data->row();
      $kode = intval($get_kode->kode) + 1;
    } else {
      $kode = 1;
    }

    $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
    $kodetampil = $awal . $batas;
    echo json_encode($kodetampil);
  }

  function get_kode_produk_edit()
  {
    $id = $this->input->post('id', TRUE);
    $id_awal = base64_decode($this->input->post('id_awal', TRUE));
    $get_jenis = $this->db->get_where('produk_tbl', array('id_pd' => $id_awal))->row();
    $kodetampil = '';
    if ($id == $get_jenis->jenis) {
      $kodetampil = $get_jenis->kode_pd;
    } else {
      $this->db->select('RIGHT(produk_tbl.kode_pd,3) as kode', FALSE);
      $this->db->where('jenis', $id);
      $this->db->order_by('kode', 'DESC');
      $this->db->limit(1);
      $data = $this->db->get('produk_tbl');
      $awal = '';

      if ($id == 1) {
        $awal = 'PKT-';
      } else {
        $awal = 'ITM-';
      }

      if ($data->num_rows() <> 0) {
        $get_kode = $data->row();
        $kode = intval($get_kode->kode) + 1;
      } else {
        $kode = 1;
      }

      $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
      $kodetampil = $awal . $batas;
    }
    echo json_encode($kodetampil);
  }

  public function tambah()
  {
    $data = [
      'notif' => '',
      'title' => 'Tambah Data Produk - Admin',
      'active' => 'DataProduk',
      'breadcumbs' => [
        'Data Produk' => ['title' => 'Data Produk', 'link' => 'admin/DataProduk'],
        'Tambah' => ['title' => 'Tambah', 'link' => 'admin/DataProduk/tambah'],
      ],
      'data' => $this->Setting_website_model->getDataWebsite(),
      'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
    ];
    $this->template2->views('admin/admin-biasa/DataProduk/tambah', $data);
  }

  public function tambah_produk()
  {
    $jenis = $this->input->post('jenis');
    $kode_pd = $this->input->post('kode');
    $nama_pd = $this->input->post('nama');
    $harga = $this->input->post('harga');
    $diskon = $this->input->post('diskon');
    $stok = $this->input->post('stok');
    $deskripsi = $this->input->post('deskripsi');

    $data_produk = array(
      'kode_pd' => $kode_pd,
      'nama_pd' => $nama_pd,
      'stok' => $stok,
      'harga' => $harga,
      'deskripsi' => $deskripsi,
      'jenis' => $jenis,
      'diskon' => $diskon,
      'status' => 1,
    );
    $cek = $this->db->insert('produk_tbl', $data_produk);
    if ($cek) {
      $notif = [
        'status' => 'success',
        'title' => 'Berhasil Tambah Data Produk'
      ];
    } else {
      $notif = [
        'status' => 'error',
        'title' => 'Gagal Tambah Data Produk'
      ];
    }
    $this->session->set_flashdata('notif', $notif);
    redirect(base_url() . "admin/DataProduk/tambah");
  }

  public function edit_produk()
  {
    $id = base64_decode($this->input->post('id'));
    $jenis = $this->input->post('jenis');
    $kode_pd = $this->input->post('kode');
    $nama_pd = $this->input->post('nama');
    $harga = $this->input->post('harga');
    $diskon = $this->input->post('diskon');
    $stok = $this->input->post('stok');
    $deskripsi = $this->input->post('deskripsi');

    $data_produk = array(
      'kode_pd' => $kode_pd,
      'nama_pd' => $nama_pd,
      'stok' => $stok,
      'harga' => $harga,
      'deskripsi' => $deskripsi,
      'jenis' => $jenis,
      'diskon' => $diskon,
    );

    $this->db->where('id_pd', $id);
    $cek = $this->db->update('produk_tbl', $data_produk);
    if ($cek) {
      $notif = [
        'status' => 'success',
        'title' => 'Berhasil Edit Data Produk'
      ];
    } else {
      $notif = [
        'status' => 'error',
        'title' => 'Gagal Edit Data Produk'
      ];
    }
    $this->session->set_flashdata('notif', $notif);
    redirect(base_url() . "admin/DataProduk");
  }

  public function edit($id)
  {
    $produk = $this->db->get_where('produk_tbl', array('id_pd' => $id))->row();
    $data = [
      'notif' => '',
      'produk' => $produk,
      'title' => 'Edit Data Produk - Admin',
      'active' => 'DataProduk',
      'breadcumbs' => [
        'Data Produk' => ['title' => 'Data Produk', 'link' => 'admin/DataProduk'],
        'Edit' => ['title' => 'Edit', 'link' => 'admin/DataProduk/edit'],
      ],
      'data' => $this->Setting_website_model->getDataWebsite(),
      'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
    ];
    $this->template2->views('admin/admin-biasa/DataProduk/edit', $data);
  }

  public function foto_produk()
  {
    $id = $this->uri->segment(3);
    // var_dump($id);
    // die;
    $produk = $this->db->get_where('produk_tbl', array('id_pd' => $id))->row();
    $foto_produk = $this->db->get_where('foto_produk_tbl', array('id_produk' => $id))->result();
    // var_dump($foto_produk);
    // die;
    $data = [
      'notif' => '',
      'produk' => $produk,
      'foto_produk' => $foto_produk,
      'id_produk' => $id,
      'title' => 'Tambah Foto Produk - Admin',
      'active' => 'DataProduk',
      'breadcumbs' => [
        'Data Produk' => ['title' => 'Data Produk', 'link' => 'admin/DataProduk'],
        'Tambah Foto' => ['title' => 'Tambah Foto', 'link' => 'admin/DataProduk/tambah_foto'],
      ],
      'data' => $this->Setting_website_model->getDataWebsite(),
      'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
    ];
    $this->template2->views('admin/admin-biasa/DataProduk/tambah_foto', $data);
  }

  public function tambah_foto_proses()
  {
    $id_produk = $this->input->post("id_produk");
    $nama_file = '';

    if (!empty($_FILES['foto_produkk']['name'])) {
      // File upload configuration
      $uploadPath = 'assets/vasilissa/admin/produk/';
      $config['upload_path'] = $uploadPath;
      $config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|JPEG|PNG|GIF';
      // $config['encrypt_name'] = TRUE;
      $config['file_name'] = 'Produk-' . time();

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ($this->upload->do_upload('foto_produkk')) {
        $fileData = $this->upload->data();
        $nama_file = $fileData['file_name'];
      } else {
        $notif = [
          'status' => 'error',
          'title' => 'Gagal upload bukti pembayaran, File tidak sesuai ketentuan'
        ];
        $this->session->set_flashdata('notif', $notif);
        redirect(base_url() . "admin/foto_produk/" . $id_produk);
      }
    }

    $data = array(
      'id_produk' => $id_produk,
      'foto' => $nama_file
    );

    $cek = $this->db->insert('foto_produk_tbl', $data);
    // var_dump($cek);
    // die;
    if ($cek) {
      $notif = [
        'status' => 'success',
        'title' => 'Berhasil Tambah Foto Produk'
      ];
    } else {
      $notif = [
        'status' => 'error',
        'title' => 'Gagal Tambah Foto Produk'
      ];
    }
    $this->session->set_flashdata('notif', $notif);
    redirect(base_url() . "admin/foto_produk/" . $id_produk);
  }

  public function hapus_foto_produk()
  {
    $id = $this->uri->segment(3);
    $id_produk = $this->uri->segment(4);
    // var_dump($id_produk);
    // die;
    $getfile = $this->db->get_where('foto_produk_tbl', array('id' => $id))->row();

    if (!empty($getfile->foto)) {
      $path = 'assets/vasilissa/admin/produk/' . $getfile->foto;
      unlink($path);
    }
    $this->db->where("id", $id);
    $cek = $this->db->delete("foto_produk_tbl");
    if ($cek) {
      $notif = [
        'status' => 'success',
        'title' => 'Berhasil Hapus Foto Produk'
      ];
    } else {
      $notif = [
        'status' => 'error',
        'title' => 'Gagal Hapus Foto Produk'
      ];
    }
    $this->session->set_flashdata('notif', $notif);
    redirect(base_url() . "admin/foto_produk/" . $id_produk);
  }

  public function hapus_produk($id)
  {
    $produk = $this->db->get_where('produk_tbl', array('id_pd' => $id))->row();
    if ($produk) {
      $this->db->where('id_pd', $id);
      $cek = $this->db->delete('produk_tbl');
      if ($cek) {
        $notif = [
          'status' => 'success',
          'title' => 'Berhasil Hapus Data Produk'
        ];
      } else {
        $notif = [
          'status' => 'error',
          'title' => 'Gagal Hapus Data Produk'
        ];
      }
      $this->session->set_flashdata('notif', $notif);
      redirect(base_url() . "admin/DataProduk");
    } else {
      $notif = [
        'status' => 'error',
        'title' => 'Gagal Hapus Data Produk'
      ];
      $this->session->set_flashdata('notif', $notif);
      redirect(base_url() . "admin/DataProduk");
    }
  }

  public function aktif_produk($id)
  {
    $produk = $this->db->get_where('produk_tbl', array('id_pd' => $id))->row();
    if ($produk) {
      $data = array('status' => 1);
      $this->db->where('id_pd', $id);
      $cek = $this->db->update('produk_tbl', $data);
      if ($cek) {
        $notif = [
          'status' => 'success',
          'title' => 'Berhasil Perbarui Data Produk'
        ];
      } else {
        $notif = [
          'status' => 'error',
          'title' => 'Gagal Perbarui Data Produk'
        ];
      }
      $this->session->set_flashdata('notif', $notif);
      redirect("admin/DataProduk");
    } else {
      $notif = [
        'status' => 'error',
        'title' => 'Gagal Perbarui Data Produk'
      ];
      $this->session->set_flashdata('notif', $notif);
      redirect("admin/DataProduk");
    }
  }

  public function nonaktif_produk($id)
  {
    $produk = $this->db->get_where('produk_tbl', array('id_pd' => $id))->row();
    if ($produk) {
      $data = array('status' => 0);
      $this->db->where('id_pd', $id);
      $cek = $this->db->update('produk_tbl', $data);
      // var_dump($cek);
      // die;
      if ($cek) {
        $notif = [
          'status' => 'success',
          'title' => 'Berhasil Perbarui Data Produk'
        ];
      } else {
        $notif = [
          'status' => 'error',
          'title' => 'Gagal Perbarui Data Produk'
        ];
      }
      $this->session->set_flashdata('notif', $notif);
      redirect(base_url() . "admin/DataProduk");
    } else {
      $notif = [
        'status' => 'error',
        'title' => 'Gagal Perbarui Data Produk'
      ];
      $this->session->set_flashdata('notif', $notif);
      redirect(base_url() . "admin/DataProduk");
    }
  }
}
