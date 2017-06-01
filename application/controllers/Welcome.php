<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->model('insert_model');

    }

    public function index()
    {
        $this->load->view('index');
    }

    public function pinsert()
    {


        $this->form_validation->set_rules('pname', 'pname', 'required');
        $this->form_validation->set_rules('Image', 'Image', 'required');


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('pinsert');

        } else {


            $data2 = array(
                'pname' => $this->input->post('pname'),
                'description' => $this->input->post('description'),
                'qty' => $this->input->post('qty'),
                'price' => $this->input->post('price'),
                'date' => date('Y/m/d'),
                'rnum' => $this->input->post('rnum'),
                'Image' => $this->input->post('Image'),
            );


           $this->insert_model->form_insert($data2);
            $this->session->set_flashdata('msg', 'Product Inserted Successfully');
            $this->session->flashdata('msg');
            redirect("Welcome/pinsert");


        }

    }

    function upload_pro_image(){
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000;
        $config['file_name']             = date('Ymdhms');

        $this->load->library('upload', $config);

        if (  $this->upload->do_upload('file'))
        {
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];

            echo '<input   type="hidden" name="Image"   value="'.$file_name.'">';
            echo'<image src="'.base_url().'upload/'.$file_name.'" height="150" width="150" class ="img-thumbnail" />';
        }

    }

    public function view()
    {

        $data["pdata"] = $this->insert_model->pdata();
        $this->load->view("pview", $data);
    }

    public function pedit($id)
    {
        if ($id > 0) {
            $data["fetch_data"] = $this->insert_model->fetch_pdata($id);
            $this->load->view("pdedit", ['data' => $data]);
        } else {

            $this->load->view('pinsert');
        }

    }

    public function update()
    {
        $id = $this->input->post('pid');
        $data3 = array(

            'pname' => $this->input->post('pname'),
            'description' => $this->input->post('description'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'rnum' => $this->input->post('rnum'),
        );

        $this->insert_model->form_update($data3, $id);
        $this->session->set_flashdata('msg', 'Data Updated Successfully');
        $this->session->flashdata('msg');
        redirect("Welcome/view");


    }

    public function addsale()
    {
        $this->load->view('addsales');

    }



    public function salecal()
    {
        if ($this->input->post())
        {

            $i = 0;
            $data = array();
            $subtotal = 0;



            foreach($this->input->post('pname') as $d){


                $data[] = array(
                    'pid' => $this->input->post('pid[]')[$i],
                    'pname' => $this->input->post('pname[]')[$i],
                    'quantity' => $this->input->post('qty[]')[$i],
                );
////////////////////////////////////////////////////////////////// getting datas from array to variables///////////////
                foreach ($data as $entry) {

                        $qty = $entry['quantity'];
                        $pid = $entry['pid'];
                        $proname = $entry ['pname'];

                }


                $value = $this->insert_model->get_price($pid); ///pasing the product id to get the the price from database

                foreach ($value->result() as $row)
                {
                    $price = $row->price;
                }

               // echo"Product Name is = ".$proname."<br>";
               // echo "Quantity = ".$qty."<br>";

                $total = $price * $qty; ////Total calculation

               // echo"The total value is = Rs. ".$total."<br><br><br>";

                $result = compact("proname","price","qty","total");


                $subtotal = $subtotal + $total;/////Sub Total Calculation

                $i++;

            }
           // echo $i;
            $a = compact ("i");
            $this->load->view("bill", $a);
            ///echo "<br><br><br><br> Subtotal is = Rs. ".$subtotal."<br>";

            /*exit;*/


        }


    }


    public function image()
    {
        $this->load->view('invoice');
    }






    }
