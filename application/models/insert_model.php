<?php

class insert_model extends CI_Model
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
        $query = $this->db->get("product");
        return $query;
    }

    function fetch_pdata($id)
    {
        $query = $this->db->query("select * from product where pid = $id");
        return $query;
    }

    function form_update($data3, $id)
    {
        $data['msg']=NULL;

        $result_id=$this->db->update('product', $data3, "pid=$id");

    }

    public function get_price($pid)
    {

       $value = $this->db->query("select price from product where pid ='$pid'");
        return $value;

    }

}
?>