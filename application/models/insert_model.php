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

    function fetch_udata($user, $pass)
    {
        $query = $this->db->query("select username, password from user where username = '$user' AND password = '$pass'")->result();
        return $query;
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
        $data['msg'] = NULL;

        $result_id = $this->db->update('product', $data3, "pid=$id");

    }

    public function get_price($pid)
    {

        $value = $this->db->query("select price from product where pid ='$pid'");
        return $value;

    }

    public function sid()
    {
        $b = $this->db->query("SELECT MAX(sid) as last FROM sales")->result();
        return $b;
    }

    public function get_qty($pid)
    {

        $value = $this->db->query("select qty from product where pid ='$pid'");
        return $value;

    }

    public function qty_sub($pid)
    {

        $value = $this->db->query("select qty from product where pid ='$pid'");
        return $value;

    }

    public function qty_update($cqty, $row)
    {

        $r = $this->db->query("UPDATE product SET qty='$cqty' WHERE pid = '$row'");
        return $r;

    }

    public function prodetails($des)
    {

        $details = $this->db->query("SELECT description FROM product WHERE pid = '$des'");
        return $details;

    }

    public function update_sales($subtotal, $sales_type, $bid, $date) ////inserting datas to sales table
    {
//       $this->db->query("INSERT INTO sales 'total' VALUE '$subtotal'");
        $this->db->query("INSERT INTO sales (bid, total, type, date) VALUES ('$bid', '$subtotal', '$sales_type', '$date')");
    }

    public function update_sdetails($bill_id, $proname, $qty, $uprice, $total) ////inserting datas to sales details table
    {
//       $this->db->query("INSERT INTO sales 'total' VALUE '$subtotal'");
        $this->db->query("INSERT INTO sdetails (sid, pname, qty, price, total) VALUES ('$bill_id', '$proname', '$qty', '$uprice', '$total'");
    }


    /////////// report related codes

    public function  dreport()
    {
        $query = $this->db->query("SELECT * FROM sales");
        return $query;
    }

    public function  dtotal()
    {
        $query = $this->db->get("sales");
        return $query;
    }

    public function  sales_report($start, $end)
    {
        $data = $this->db->query("SELECT SUM(total) as total FROM sales WHERE date BETWEEN '$start' AND '$end'")->result();
        return $data;
    }

    public function  inventory_data()
    {
        $query = $this->db->query("select pname, qty, mqty, rnum, Image from product where qty <= mqty");
        return $query;
    }

}

?>