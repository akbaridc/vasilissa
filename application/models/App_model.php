
<?php

class App_model extends CI_Model
{
    public function get_table($table)
    {
        return $this->db->get_where($table)->result();
    }
}
