<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Preferences_model extends CI_Model {

    var $table = 'preferences';
    var $table_id = 'id_preferences';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    function info($param)
    {
        $where = array();
        if (isset($param['name']) == TRUE)
        {
            $where += array('name' => $param['name']);
        }
        
        $this->db->select('id_preferences, name, slug, content, created_date, updated_date');
        $this->db->from($this->table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
}