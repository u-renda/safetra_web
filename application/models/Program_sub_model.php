<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Program_sub_model extends CI_Model {

    var $table = 'program_sub';
    var $table_id = 'id_program_sub';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    function info($param)
    {
        $where = array();
        if (isset($param['slug']) == TRUE)
        {
            $where += array($this->table.'.slug' => $param['slug']);
        }
        
        $this->db->select('id_program_sub, '.$this->table.'.id_program, '.$this->table.'.name,
                          '.$this->table.'.slug, program_objective, training_purpose,
                          requirements_of_participant, training_material, others,
                          '.$this->table.'.created_date, '.$this->table.'.updated_date,
                          program.name AS program_name, percentage,
                          program.created_date AS program_created_date,
                          program.updated_date AS program_updated_date');
        $this->db->from($this->table);
        $this->db->join('program', $this->table.'.id_program = program.id_program');
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
    
    function lists($param)
    {
        $where = array();
        $order = 'created_date';
        $sort = 'desc';
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
        if (isset($param['id_program']) == TRUE)
        {
            $where += array('id_program' => $param['id_program']);
        }
        
        $this->db->select('id_program_sub, id_program, name, slug, program_objective, training_purpose, requirements_of_participant,
                          training_material, others, created_date, updated_date');
        $this->db->from($this->table);
        $this->db->where($where);
        $this->db->order_by($order, $sort);
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query;
    }
}