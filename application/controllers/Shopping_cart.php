<?php
/**
 * Created by PhpStorm.
 * User: Rizkan
 * Date: 2/11/2018
 * Time: 4:44 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_cart extends CI_Controller
{


    public function shopping()
    {
        $this->load->view('shopping_cart');

    }

    function add()
    {
        $this->load->library("cart");
        $data = array(

          "id"      => $_POST["pid"],
          "name"    => $_POST["pname"],
          "qty"     => $_POST["qty"]

        );
        $this->cart->insert($data); //return row id
        echo $this->view();

      /*  echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";*/
    }

    function view()
    {
        $this->load->library("cart");
        $output = '';
        $output .='

<div class="col-lg-12">
        <div class="row" id="details">
            <div class="col-lg-3">

                <fieldset class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" id="pid" name="pid" >
                </fieldset>
            </div>

            
            <div class="col-lg-3">
                <fieldset class="form-group">
                <label>Quantity</label>
                <input type="text" class="form-control" id="qty" name="qty" >
                </fieldset>
            </div>
            <div class="col-lg-3">
                <fieldset class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" id="price" name="price" >
                </fieldset>
            </div>
        </div>
</div>
       ';


        $count =0;
        foreach ($this->cart->contents() as $items)
        {
            $count++;
            $output .='
            <div class="row" id="details">
                                            <div class="col-lg-3">
                                                <fieldset class="form-group">

                                                    <input type="text" name="pname" class="form-control"
                                                           value="'.$items["name"].'">
                                                    <input type="text" name="qty" class="form-control"
                                                           value="'.$items["qty"].'">
                                                    <input type="text" name="qty" class="form-control"
                                                           value="'.$items["price"].'">
                                                   

                                                </fieldset>
                                            </div>
            ';
        }
        $output .=' <input type="text" name="qty" class="form-control"
                                                           value="'.$this->cart->total().'">';

        return $output;


    }


}
