<?php
date_default_timezone_set('Asia/Jakarta');
?>
<?php

class Setting_website_model extends CI_Model
{

    public function getDataSosmed()
    {
        return $this->db->select("*")
            ->from("website_sosmed")
            ->get();
    }

    public function getDataWebsite()
    {
        return $this->db->get_where('setting_website', ['id' => 2])->row_array();
    }

    public function update($data)
    {
        return $this->db->where('id', 2)
            ->update('setting_website', $data);
    }

    function delete($table, $where)
    {
        return $this->db->where($where)->delete($table);
    }
}
