<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Media_model extends CI_Model {

    var $table = 'media';
    var $table_id = 'id_media';
    
    public function __construct()
    {
        parent::__construct();
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
        if (isset($param['slider']) == TRUE)
        {
            $where += array('slider' => $param['slider']);
        }
        
        $this->db->select('id_media, '.$this->table.'.id_media_album, media_url, 
                          '.$this->table.'.created_date, '.$this->table.'.updated_date, name');
        $this->db->from($this->table);
        $this->db->join('media_album', $this->table.'.id_media_album = media_album.id_media_album');
        $this->db->where($where);
        $this->db->order_by($order, $sort);
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query;
    }
}