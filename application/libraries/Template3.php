<?php
class Template3
{
    protected $_ci;

    function __construct()
    {
        $this->_ci = &get_instance();
    }

    function views($content, $data = NULL)
    {
        /*
     * $data['headernya'] , $data['contentnya'] , $data['footernya']
     * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
     * */
        $data['headernya'] = $this->_ci->load->view('member/layout/header', $data, TRUE);
        $data['navbarnya'] = $this->_ci->load->view('member/layout/navbar', $data, TRUE);
        $data['sidebarnya'] = $this->_ci->load->view('member/layout/sidebar', $data, TRUE);
        $data['breadcumbnya'] = $this->_ci->load->view('member/layout/breadcumb', $data, TRUE);
        $data['contentnya'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footernya'] = $this->_ci->load->view('member/layout/footer', $data, TRUE);
        $data['jsnya'] = $this->_ci->load->view('member/layout/js', $data, TRUE);

        $this->_ci->load->view('member/layout/app', $data);
    }
}
