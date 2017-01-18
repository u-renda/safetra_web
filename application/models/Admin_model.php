<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    var $table = 'admin';
    var $table_id = 'id_admin';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    function lists($param)
    {
        $where = array();
        $order = 'created_date';
        $sort = 'asc';
        $offset = 0;
        $limit = 20;
        
        if (isset($param['order']) == TRUE)
        {
            $order = $param['order'];
        }
        if (isset($param['sort']) == TRUE)
        {
            $sort = $param['sort'];
        }
        if (isset($param['limit']) == TRUE)
        {
            $limit = $param['limit'];
        }
        if (isset($param['offset']) == TRUE)
        {
            $offset = $param['offset'];
        }
        if (isset($param['role']) == TRUE)
        {
            $where += array('role' => $param['role']);
        }
        
        $this->db->select('id_admin, name, username, email, photo, status, role, job_title,
                          created_date, updated_date');
        $this->db->from($this->table);
        $this->db->where($where);
        $this->db->order_by($order, $sort);
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query;
    }
}