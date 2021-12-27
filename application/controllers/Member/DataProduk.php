<?php
date_default_timezone_set('Asia/Jakarta');
?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataProduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('template3');
        $this->load->model('Setting_website_model');
    }

    /************************ Produk Paket ***************************/
    public function paket()
    {
        $paket = $this->db->select("m.nama as nama_member, m.email as email_member, p.kode_pd as kode_produk, p.jenis as jenis_produk , p.nama_pd as nama_produk, p.deskripsi as deskripsi_produk, mp.tanggal_beli as tanggal_beli, mp.tanggal_konfirmasi as tanggal konfirmasi, mp.qty as qty, mp.harga as harga, mp.foto_tf as foto_tf, mp.status as status, mp.id as id")
            ->from('member_produk_tbl mp')
            ->join('member_tbl m', 'm.id_member = mp.id_member')
            ->join('produk_tbl p', 'p.id_pd = mp.id_produk')
            ->where('m.id_member', $this->session->userdata('id'))
            ->where('p.jenis', 1)
            ->order_by('mp.tanggal_beli', 'ASC')
            ->get()->result();
        $data = [
            'title' => 'Data Produk Paket',
            'active' => 'Paket',
            'breadcumbs' => [
                // 'Data User' => array('title' => 'Data User', 'target' => 'Data User'),
                'Data Produk Paket' => ['title' => 'Data Produk Paket', 'link' => 'member/produk-paket'],
            ],
            'paket' => $paket,
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/DataProduk/paket/index', $data);
    }

    public function paket_tambah()
    {
        $produk = $this->db->get_where('produk_tbl', ['jenis' => 1])->result();
        $data = [
            'title' => 'Produk Paket - Beli',
            'active' => 'Paket',
            'breadcumbs' => [
                'Produk Paket' => array('title' => 'Data Produk Paket', 'link' => 'member/produk-paket'),
                'Beli' => array('title' => 'Beli', 'link' => 'member/produk-paket/beli'),
            ],
            'produk' => $produk,
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/DataProduk/paket/tambah', $data);
    }

    public function json_paket()
    {
        $id = $this->input->post('id');
        $paket = $this->db->select("m.nama as nama_member, m.email as email_member, p.kode_pd as kode_produk, p.nama_pd as nama_produk, p.deskripsi as deskripsi_produk, mp.tanggal_beli as tanggal_beli, mp.tanggal_konfirmasi as tanggal konfirmasi, mp.qty as qty, mp.harga as harga, mp.foto_tf as foto_tf, mp.status as status, mp.id as id")
            ->from('member_produk_tbl mp')
            ->join('member_tbl m', 'm.id_member = mp.id_member')
            ->join('produk_tbl p', 'p.id_pd = mp.id_produk')
            ->where('m.id_member', $this->session->userdata('id'))
            ->where('mp.id', $id)
            ->order_by('mp.tanggal_beli', 'ASC')
            ->get()->row_array();

        echo json_encode($paket);
    }

    public function FormPaket_tambah()
    {
        $id_member = $this->session->userdata('id');
        $id_produk = $this->input->post("paket");
        $harga = $this->input->post("total");
        $qty = $this->input->post("qty");

        $data = [
            'id_member' => $id_member,
            'id_produk' => $id_produk,
            'qty' => $qty,
            'harga' => $harga,
            // 'tanggal_beli' => date("Y-m-d H:i:s"),
            'status' => 0,
        ];

        $cek = $this->db->insert('member_produk_tbl', $data);
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Membeli Produk Paket! Silahkan upload bukti pembayaran'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Membeli Produk Paket'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect(base_url() . "member/produk-paket");
    }

    public function get_produk_paket()
    {
        $id = $this->input->post('id', TRUE);

        $data = $this->db->select("stok, harga, deskripsi, diskon")
            ->from("produk_tbl")
            ->where("jenis", 1)
            ->where("id_pd", $id)
            ->get()->row_array();
        echo json_encode($data);
    }

    public function paket_edit($id)
    {
        $paket = $this->db->select("p.id_pd as id_pd,p.kode_pd as kode_produk, p.nama_pd as nama_produk, p.diskon as diskon_produk, p.harga as harga_produk, p.deskripsi as deskripsi_produk, mp.tanggal_beli as tanggal_beli, mp.tanggal_konfirmasi as tanggal konfirmasi, mp.qty as qty, mp.harga as harga, mp.foto_tf as foto_tf, mp.status as status, mp.id as id")
            ->from('member_produk_tbl mp')
            ->join('member_tbl m', 'm.id_member = mp.id_member')
            ->join('produk_tbl p', 'p.id_pd = mp.id_produk')
            ->where('m.id_member', $this->session->userdata('id'))
            ->where('mp.id', $id)
            ->order_by('mp.tanggal_beli', 'ASC')
            ->get()->row();
        $produk = $this->db->get_where('produk_tbl', ['jenis' => 1])->result();
        $data = [
            'title' => 'Edit Produk Paket',
            'active' => 'Paket',
            'breadcumbs' => [
                'Produk Paket' => array('title' => 'Data Produk Paket', 'link' => 'member/produk-paket'),
                'Edit' => array('title' => 'Edit', 'link' => 'member/produk-paket/beli'),
            ],
            'paket' => $paket,
            'produk' => $produk,
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/DataProduk/paket/edit', $data);
    }

    public function FormPaket_edit()
    {
        $id = $this->input->post('id');
        $id_produk = $this->input->post("paket");
        $harga = $this->input->post("total");
        $qty = $this->input->post("qty");

        $data = [
            'id_produk' => $id_produk,
            'qty' => $qty,
            'harga' => $harga,
            'tanggal_beli' => date("Y-m-d H:i:s")
        ];

        $this->db->where('id', $id);
        $cek = $this->db->update('member_produk_tbl', $data);
        // var_dump($data);
        // die;
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Edit Data Produk pembelian anda'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Edit Data Produk pembelian anda'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect(base_url() . "member/produk-paket");
    }

    public function uploadPembayaran_paket()
    {
        $id = $this->input->post('id');
        $nama_file = '';

        if (!empty($_FILES['bukti_tf']['name'])) {
            // File upload configuration
            $uploadPath = 'assets/vasilissa/member/bukti-tf/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|JPEG|PNG|GIF';
            // $config['encrypt_name'] = TRUE;
            $config['file_name'] = 'BuktiTf-Paket-' . time();

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('bukti_tf')) {
                $fileData = $this->upload->data();
                $nama_file = $fileData['file_name'];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal upload bukti pembayaran, File tidak sesuai ketentuan'
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect(base_url() . "member/produk-paket");
            }
        }

        $data = array(
            'foto_tf' => $nama_file
        );
        $this->db->where("id", $id);
        $cek = $this->db->update("member_produk_tbl", $data);
        // var_dump($cek);
        // die;
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Upload bukti pembayaran! Admin lagi proses pesanan anda'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Upload bukti pembayaran'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect(base_url() . "member/produk-paket");
    }

    public function hapus_produk_paket($id)
    {
        $produk = $this->db->get_where('member_produk_tbl', array('id' => $id))->row();
        if ($produk) {
            $this->db->where('id', $id);
            $cek = $this->db->delete('member_produk_tbl');
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Berhasil Hapus Data Produk Paket Pembelian Anda'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Hapus Data Produk Paket Pembelian Anda'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "member/produk-paket");
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Hapus Data Produk Paket Pembelian Anda'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "member/produk-paket");
        }
    }
    /************************ End Produk Paket ***********************/

    /*********************** Produk Item **************************/
    public function item()
    {
        $item = $this->db->select("m.nama as nama_member, m.email as email_member, p.kode_pd as kode_produk, p.jenis as jenis_produk , p.nama_pd as nama_produk, p.deskripsi as deskripsi_produk, mp.tanggal_beli as tanggal_beli, mp.tanggal_konfirmasi as tanggal konfirmasi, mp.qty as qty, mp.harga as harga, mp.foto_tf as foto_tf, mp.status as status, mp.id as id")
            ->from('member_produk_tbl mp')
            ->join('member_tbl m', 'm.id_member = mp.id_member')
            ->join('produk_tbl p', 'p.id_pd = mp.id_produk')
            ->where('m.id_member', $this->session->userdata('id'))
            ->where('p.jenis', 2)
            ->order_by('mp.tanggal_beli', 'ASC')
            ->get()->result();
        $data = [
            'title' => 'Data Produk Item',
            'active' => 'Item',
            'breadcumbs' => [
                // 'Data User' => array('title' => 'Data User', 'target' => 'Data User'),
                'Data Produk Item' => ['title' => 'Data Produk Item', 'link' => 'member/produk-item'],
            ],
            'item' => $item,
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/DataProduk/item/index', $data);
    }

    public function item_tambah()
    {
        $produk = $this->db->get_where('produk_tbl', ['jenis' => 2])->result();
        $data = [
            'title' => 'Produk Item - Beli',
            'active' => 'Item',
            'breadcumbs' => [
                'Produk Item' => array('title' => 'Data Produk Item', 'link' => 'member/produk-item'),
                'Beli' => array('title' => 'Beli', 'link' => 'member/produk-item/beli'),
            ],
            'produk' => $produk,
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/DataProduk/item/tambah', $data);
    }

    public function json_item()
    {
        $id = $this->input->post('id');
        $item = $this->db->select("m.nama as nama_member, m.email as email_member, p.kode_pd as kode_produk, p.nama_pd as nama_produk, p.deskripsi as deskripsi_produk, mp.tanggal_beli as tanggal_beli, mp.tanggal_konfirmasi as tanggal konfirmasi, mp.qty as qty, mp.harga as harga, mp.foto_tf as foto_tf, mp.status as status, mp.id as id")
            ->from('member_produk_tbl mp')
            ->join('member_tbl m', 'm.id_member = mp.id_member')
            ->join('produk_tbl p', 'p.id_pd = mp.id_produk')
            ->where('m.id_member', $this->session->userdata('id'))
            ->where('mp.id', $id)
            ->order_by('mp.tanggal_beli', 'ASC')
            ->get()->row_array();

        echo json_encode($item);
    }

    public function FormItem_tambah()
    {
        $id_member = $this->session->userdata('id');
        $id_produk = $this->input->post("item");
        $harga = $this->input->post("total");
        $qty = $this->input->post("qty");

        $data = [
            'id_member' => $id_member,
            'id_produk' => $id_produk,
            'qty' => $qty,
            'harga' => $harga,
            // 'tanggal_beli' => date("Y-m-d H:i:s"),
            'status' => 0,
        ];

        $cek = $this->db->insert('member_produk_tbl', $data);
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Membeli Produk Item! Silahkan upload bukti pembayaran'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Membeli Produk Item'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect(base_url() . "member/produk-item");
    }

    public function get_produk_item()
    {
        $id = $this->input->post('id', TRUE);

        $data = $this->db->select("stok, harga, deskripsi, diskon")
            ->from("produk_tbl")
            ->where("jenis", 2)
            ->where("id_pd", $id)
            ->get()->row_array();
        echo json_encode($data);
    }

    public function item_edit($id)
    {
        $item = $this->db->select("p.id_pd as id_pd,p.kode_pd as kode_produk, p.nama_pd as nama_produk, p.diskon as diskon_produk, p.harga as harga_produk, p.deskripsi as deskripsi_produk, mp.tanggal_beli as tanggal_beli, mp.tanggal_konfirmasi as tanggal konfirmasi, mp.qty as qty, mp.harga as harga, mp.foto_tf as foto_tf, mp.status as status, mp.id as id")
            ->from('member_produk_tbl mp')
            ->join('member_tbl m', 'm.id_member = mp.id_member')
            ->join('produk_tbl p', 'p.id_pd = mp.id_produk')
            ->where('m.id_member', $this->session->userdata('id'))
            ->where('mp.id', $id)
            ->order_by('mp.tanggal_beli', 'ASC')
            ->get()->row();
        $produk = $this->db->get_where('produk_tbl', ['jenis' => 2])->result();
        $data = [
            'title' => 'Edit Produk Item',
            'active' => 'Item',
            'breadcumbs' => [
                'Produk Item' => array('title' => 'Data Produk Item', 'link' => 'member/produk-item'),
                'Edit' => array('title' => 'Edit', 'link' => 'member/produk-item/beli'),
            ],
            'item' => $item,
            'produk' => $produk,
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
        ];
        $this->template3->views('member/DataProduk/item/edit', $data);
    }

    public function FormItem_edit()
    {
        $id = $this->input->post('id');
        $id_produk = $this->input->post("item");
        $harga = $this->input->post("total");
        $qty = $this->input->post("qty");

        $data = [
            'id_produk' => $id_produk,
            'qty' => $qty,
            'harga' => $harga,
            'tanggal_beli' => date("Y-m-d H:i:s")
        ];

        $this->db->where('id', $id);
        $cek = $this->db->update('member_produk_tbl', $data);
        // var_dump($data);
        // die;
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Edit Data Produk pembelian anda'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Edit Data Produk pembelian anda'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect(base_url() . "member/produk-item");
    }

    public function uploadPembayaran_item()
    {
        $id = $this->input->post('id');
        $nama_file = '';

        if (!empty($_FILES['bukti_tf']['name'])) {
            // File upload configuration
            $uploadPath = 'assets/vasilissa/member/bukti-tf/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|jpeg|png|JPG|JPEG|PNG|GIF';
            // $config['encrypt_name'] = TRUE;
            $config['file_name'] = 'BuktiTf-Item-' . time();

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('bukti_tf')) {
                $fileData = $this->upload->data();
                $nama_file = $fileData['file_name'];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal upload bukti pembayaran, File tidak sesuai ketentuan'
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect(base_url() . "member/produk-item");
            }
        }

        $data = array(
            'foto_tf' => $nama_file
        );
        $this->db->where("id", $id);
        $cek = $this->db->update("member_produk_tbl", $data);
        // var_dump($cek);
        // die;
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Berhasil Upload bukti pembayaran! Admin lagi proses pesanan anda'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Upload bukti pembayaran'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect(base_url() . "member/produk-item");
    }

    public function hapus_produk_item($id)
    {
        $produk = $this->db->get_where('member_produk_tbl', array('id' => $id))->row();
        if ($produk) {
            $this->db->where('id', $id);
            $cek = $this->db->delete('member_produk_tbl');
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Berhasil Hapus Data Produk Item Pembelian Anda'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Gagal Hapus Data Produk Item Pembelian Anda'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "member/produk-item");
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Gagal Hapus Data Produk Item Pembelian Anda'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect(base_url() . "member/produk-item");
        }
    }
    /*********************** End Produk Item **********************/
}
