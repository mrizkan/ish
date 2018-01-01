<?php

class show_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function form_insert($data)
    {

        $this->db->insert('product', $data);

    }



    function  pdata()
    {
        /*$this->db->order_by('pid', 'desc');*/
       ;
        $query =$this->db->query("select * from product WHERE itype = 's'");


        /*$query = $this->db->get('product','itype', $t);*/
        return $query;
    }

    function fetch_pdata($id)
    {
        $query = $this->db->query("select * from product where pid = $id");
        return $query;
    }

    function form_update($data3, $id)
    {
        $data['msg'] = NULL;

        $result_id = $this->db->update('product', $data3, "pid=$id");

    }


}

?>