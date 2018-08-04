<?php
/**
 * Created by PhpStorm.
 * User: Rizkan
 * Date: 2/11/2018
 * Time: 4:48 PM
 */


class shopping_cart_model extends CI_Model
{

    function fetch_all()
    {
        $query= $this->db->get("product");
        return $query->result();
    }

}