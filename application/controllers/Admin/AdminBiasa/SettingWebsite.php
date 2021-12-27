<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SettingWebsite extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(['template2', 'form_validation']);
        $this->load->model('Setting_website_model');
    }

    public function index()
    {
        $data = [
            'notif' => '',
            'title' => 'Setting Website - Admin',
            'active' => 'SettingWebsite',
            'breadcumbs' => [
                'Setting Website' => ['title' => 'Setting Website', 'link' => 'admin/SettingWebsite'],
            ],
            'data' => $this->Setting_website_model->getDataWebsite(),
            'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),

        ];
        // var_dump($data['data']);
        // die;
        $this->template2->views('admin/admin-biasa/SettingWebsite/index', $data);
    }
    public function json()
    {
        echo json_encode($this->Setting_website_model->getDataWebsite());
    }

    /** Menu Nama Website */
    public function nama_website()
    {
        $this->form_validation->set_rules('nama_website', 'Nama Website', 'required', [
            'required' => 'Nama Website Wajib Diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'notif' => '',
                'title' => 'Setting Website - Admin',
                'active' => 'SettingWebsite',
                'breadcumbs' => [
                    'Setting Website' => ['title' => 'Setting Website', 'link' => 'admin/SettingWebsite'],
                ],
                'data' => $this->Setting_website_model->getDataWebsite(),
                'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
            ];
            $notif = [
                'status' => 'error',
                'title' => 'Tambah nama website gagal'
            ];
            $this->session->set_flashdata('notif', $notif);
            $this->template2->views('admin/admin-biasa/SettingWebsite/index', $data);
        } else {
            $cekData = $this->Setting_website_model->getDataWebsite();
            if ($cekData > 1) {
                $notif = [
                    'status' => 'error',
                    'title' => 'Data hanya boleh diisi satu kali'
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect('admin/SettingWebsite');
            } else {
                $data = ['nama_website' => $this->input->post('nama_website')];

                $cek = $this->db->insert('setting_website', $data);
                if ($cek) {
                    $notif = [
                        'status' => 'success',
                        'title' => 'Tambah logo website berhasil'
                    ];
                } else {
                    $notif = [
                        'status' => 'error',
                        'title' => 'Tambah logo website gagal'
                    ];
                }
                $this->session->set_flashdata('notif', $notif);
                redirect('admin/SettingWebsite');
            }
        }
    }

    public function edit_nama_website()
    {
        $this->form_validation->set_rules('nama_website', 'Nama Website', 'required', [
            'required' => 'Nama Website Wajib Diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'notif' => '',
                'title' => 'Setting Website - Admin',
                'active' => 'SettingWebsite',
                'breadcumbs' => [
                    'Setting Website' => ['title' => 'Setting Website', 'link' => 'admin/SettingWebsite'],
                ],
                'data' => $this->Setting_website_model->getDataWebsite(),
                'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
            ];
            $notif = [
                'status' => 'error',
                'title' => 'Edit nama website gagal'
            ];
            $this->session->set_flashdata('notif', $notif);
            $this->template2->views('admin/admin-biasa/SettingWebsite/index', $data);
        } else {
            $data = ['nama_website' => $this->input->post('nama_website')];

            $cek = $this->Setting_website_model->update($data);
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Edit nama website berhasil'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Edit nama website gagal'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect('admin/SettingWebsite');
        }
    }
    /** End Menu Nama Website */

    /** Menu Logo Website */
    public function logo()
    {
        $error = 0;
        $data_edit = $this->Setting_website_model->getDataWebsite();
        $paths =  'assets/vasilissa/website/';
        unlink($paths . $data_edit['logo_website']);

        if (!empty($_FILES['logo']['name'])) {

            $config['upload_path']    = 'assets/vasilissa/website/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['max_size'] = 50000;
            $config['file_name'] = 'Logo-' . time();

            $this->upload->initialize($config);

            if ($_FILES['logo']['name'] == '' || !$this->upload->do_upload('logo')) {
                $data = [
                    'notif' => '',
                    'title' => 'Setting Website - Admin',
                    'active' => 'SettingWebsite',
                    'breadcumbs' => [
                        'Setting Website' => ['title' => 'Setting Website', 'link' => 'admin/SettingWebsite'],
                    ],
                    'data' => $this->Setting_website_model->getDataWebsite(),
                    'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
                ];
                $notif = [
                    'status' => 'error',
                    'title' => $this->upload->display_errors('', '')
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect('admin/SettingWebsite', $data);
            } else {
                $data1 = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/vasilissa/website/' . $data1['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['new_image'] = 'assets/vasilissa/website/' . $data1['file_name'];

                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $data['logo_website'] = $data1['file_name'];
                if ($error == 0) {
                    $cek = $this->Setting_website_model->update($data);

                    if ($cek) {
                        $notif = [
                            'status' => 'success',
                            'title' => 'Logo Website Berhasil Diubah'
                        ];
                    } else {
                        $notif = [
                            'status' => 'error',
                            'title' => 'Logo Website Gagal Diubah'
                        ];
                    }
                    $this->session->set_flashdata('notif', $notif);
                    redirect('admin/SettingWebsite');
                }
            }
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Logo Website Gagal Diubah'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect('admin/SettingWebsite');
        }
    }

    public function logoIcon()
    {
        $error = 0;
        $data_edit = $this->Setting_website_model->getDataWebsite();
        $paths =  'assets/vasilissa/website/';
        unlink($paths . $data_edit['logo_icon']);

        if (!empty($_FILES['logo-icon']['name'])) {

            $config['upload_path']    = 'assets/vasilissa/website/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['max_size'] = 50000;
            $config['file_name'] = 'Logo-icon' . time();

            $this->upload->initialize($config);

            if ($_FILES['logo-icon']['name'] == '' || !$this->upload->do_upload('logo-icon')) {
                $data = [
                    'notif' => '',
                    'title' => 'Setting Website - Admin',
                    'active' => 'SettingWebsite',
                    'breadcumbs' => [
                        'Setting Website' => ['title' => 'Setting Website', 'link' => 'admin/SettingWebsite'],
                    ],
                    'data' => $this->Setting_website_model->getDataWebsite(),
                    'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
                ];
                $notif = [
                    'status' => 'error',
                    'title' => $this->upload->display_errors('', '')
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect('admin/SettingWebsite', $data);
            } else {
                $data1 = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'assets/vasilissa/website/' . $data1['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['new_image'] = 'assets/vasilissa/website/' . $data1['file_name'];

                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $data['logo_icon'] = $data1['file_name'];
                if ($error == 0) {
                    $cek = $this->Setting_website_model->update($data);

                    if ($cek) {
                        $notif = [
                            'status' => 'success',
                            'title' => 'Logo Icon Berhasil Diubah'
                        ];
                    } else {
                        $notif = [
                            'status' => 'error',
                            'title' => 'Logo Icon Gagal Diubah'
                        ];
                    }
                    $this->session->set_flashdata('notif', $notif);
                    redirect('admin/SettingWebsite');
                }
            }
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Logo Icon Gagal Diubah'
            ];
            $this->session->set_flashdata('notif', $notif);
            redirect('admin/SettingWebsite');
        }
    }
    /** End Menu Logo Website */

    /** Menu Kontak Website */
    public function kontak_website()
    {
        $this->form_validation->set_rules('email_kontak', 'Email Kontak Website', 'required|valid_email', [
            'required' => 'Nama Email Website Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('telp_kontak', 'Telepon Kontak Website', 'required', [
            'required' => 'Telepon Website Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('alamat_kontak', 'Email Kontak Website', 'required', [
            'required' => 'Alamat Website Wajib Diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'notif' => '',
                'title' => 'Setting Website - Admin',
                'active' => 'SettingWebsite',
                'breadcumbs' => [
                    'Setting Website' => ['title' => 'Setting Website', 'link' => 'admin/SettingWebsite'],
                ],
                'data' => $this->Setting_website_model->getDataWebsite(),
                'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
            ];
            $notif = [
                'status' => 'error',
                'title' => 'Edit kontak website gagal'
            ];
            $this->session->set_flashdata('notif', $notif);
            // redirect('admin/SettingWebsite', $data);
            $this->template2->views('admin/admin-biasa/SettingWebsite/index', $data);
        } else {
            $data = [
                'email' => $this->input->post('email_kontak'),
                'telepon' => $this->input->post('telp_kontak'),
                'alamat' => $this->input->post('alamat_kontak'),
            ];

            $cek = $this->Setting_website_model->update($data);
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Edit kontak website berhasil'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Edit kontak website gagal'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect('admin/SettingWebsite');
        }
    }
    /** End Menu Kontak Website */

    /** Menu Tentang Website */
    public function tentang()
    {

        if (!empty($_FILES['foto']['name'])) {

            $data_edit = $this->Setting_website_model->getDataWebsite();
            $paths =  'assets/vasilissa/website/';
            unlink($paths . $data_edit['foto_perusahaan']);

            $foto_lama = $_FILES['foto']['name'];

            $config['upload_path']    = 'assets/vasilissa/website/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['overwrite']      = true;
            $config['file_name']      = round(microtime(true) * 1000);

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $notif = [
                    'status' => 'error',
                    'title' => $this->upload->display_errors('', '')
                ];
                $this->session->set_flashdata('notif', $notif);
                redirect('admin/SettingWebsite');
            }
            $data1 = $this->upload->data();
            $foto_lama = $data1['file_name'];

            $data_foto = [
                'foto_perusahaan' => $foto_lama,
                'deskripsi' => $this->input->post('deskripsi'),
                'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
            ];

            $cek = $this->Setting_website_model->update($data_foto);

            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Tambah / Edit Berhasil'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Tambah / Edit Gagal'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect('admin/SettingWebsite');
        } else {
            $data = array(
                'deskripsi' => $this->input->post('deskripsi'),
                'deskripsi_singkat' => $this->input->post('deskripsi_singkat'),
            );
        }

        $cek = $this->Setting_website_model->update($data);

        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Tambah / Edit Berhasil'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Tambah / Edit Gagal'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect('admin/SettingWebsite');
    }
    /** End Menu Tentang Website */

    /** Menu Icon Sosmed Website */
    public function sosmed()
    {
        $this->form_validation->set_rules('icon_sosial', 'Icon', 'required|is_unique[website_sosmed.icon]', [
            'required' => 'icon Wajib Diisi!',
            'is_unique' => 'icon telah ada, gunakan icon lain'
        ]);
        $this->form_validation->set_rules('link_sosial', 'Link', 'required|is_unique[website_sosmed.link]', [
            'required' => 'Link Wajib Diisi!',
            'is_unique' => 'Link telah ada, gunakan link lain'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'notif' => '',
                'title' => 'Setting Website - Admin',
                'active' => 'SettingWebsite',
                'breadcumbs' => [
                    'Setting Website' => ['title' => 'Setting Website', 'link' => 'admin/SettingWebsite'],
                ],
                'data' => $this->Setting_website_model->getDataWebsite(),
                'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
            ];
            $notif = [
                'status' => 'error',
                'title' => 'Tambah icon sosial gagal'
            ];
            $this->session->set_flashdata('notif', $notif);
            $this->template2->views('admin/admin-biasa/SettingWebsite/index', $data);
        } else {
            $data = [
                'icon' => $this->input->post('icon_sosial'),
                'link' => $this->input->post('link_sosial')
            ];

            $cek = $this->db->insert('website_sosmed', $data);
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Tambah icon sosial berhasil'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Tambah icon sosial gagal'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect('admin/SettingWebsite');
        }
    }

    public function edit()
    {
        $id = $this->input->post('id_edit');

        $this->form_validation->set_rules('edit_icon_sosial', 'Icon', 'required', [
            'required' => 'icon Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('edit_link_sosial', 'Link', 'required', [
            'required' => 'Link Wajib Diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'notif' => '',
                'title' => 'Setting Website - Admin',
                'active' => 'SettingWebsite',
                'breadcumbs' => [
                    'Setting Website' => ['title' => 'Setting Website', 'link' => 'admin/SettingWebsite'],
                ],
                'data' => $this->Setting_website_model->getDataWebsite(),
                'icon' => $this->Setting_website_model->getDataSosmed()->result_array(),
            ];
            $notif = [
                'status' => 'error',
                'title' => 'Edit icon sosial gagal'
            ];
            $this->session->set_flashdata('notif', $notif);
            $this->template2->views('admin/admin-biasa/SettingWebsite/index', $data);
        } else {
            $data = [
                'icon' => $this->input->post('edit_icon_sosial'),
                'link' => $this->input->post('edit_link_sosial')
            ];

            $cek = $this->db->where('id', $id)
                ->update('website_sosmed', $data);
            if ($cek) {
                $notif = [
                    'status' => 'success',
                    'title' => 'Edit icon sosial berhasil'
                ];
            } else {
                $notif = [
                    'status' => 'error',
                    'title' => 'Edit icon sosial gagal'
                ];
            }
            $this->session->set_flashdata('notif', $notif);
            redirect('admin/SettingWebsite');
        }
    }

    public function hapus($id)
    {
        $cek = $this->Setting_website_model->delete('website_sosmed', ['id' => $id]);
        if ($cek) {
            $notif = [
                'status' => 'success',
                'title' => 'Hapus Data Berhasil'
            ];
        } else {
            $notif = [
                'status' => 'error',
                'title' => 'Hapus Data Gagal'
            ];
        }
        $this->session->set_flashdata('notif', $notif);
        redirect('admin/SettingWebsite');
    }
    /** End Menu Icon Sosmed Website */
}
