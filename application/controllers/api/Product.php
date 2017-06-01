<?php
/**
 * Created by PhpStorm.
 * User: ITMARTX-06
 * Date: 5/13/17
 * Time: 11:14 AM
 */



class Product extends CI_Controller {

    function getProduct(){
        $result = $this->db->from('product')->select('pid as data,pname as value ', false)->get()->result();
        echo json_encode($result);
    }

} 