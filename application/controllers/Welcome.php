<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('insert_model');

    }

    public function index()
    {
        $this->session->unset_userdata('username');
        $this->load->view('index');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $converted = md5($password);

            $data["fetch_data"] = $this->insert_model->fetch_udata($username, $converted);
            $var = $data['fetch_data'][0]->name;


            if (count($data["fetch_data"]) > 0) {
//                $this->load->view('Customer/insertview()');
                $session_data = array(
                    'username' => $var

                );
                $this->session->set_userdata($session_data);
//                print_r($this->session->userdata->username);exit;

                redirect(base_url() . 'Welcome/pinsert');
                /*$this->insertview();*/
            } else
                $this->session->set_flashdata('error', 'Invalid Username or Password');
            $this->index();
        }
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
                'mqty' => $this->input->post('mqty'),
                'price' => $this->input->post('price'),
                'cost' => $this->input->post('cost'),
                'date' => date('Y/m/d'),
                'rnum' => $this->input->post('rnum'),
                'Image' => $this->input->post('Image'),
                'itype' => 'p',
            );


            $this->insert_model->form_insert($data2);
            $this->session->set_flashdata('msg', 'Product Inserted Successfully');
            $this->session->flashdata('msg');
            redirect("Welcome/pinsert");


        }

    }

    function upload_pro_image()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 100000;
        $config['file_name'] = date('Ymdhms');

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];

            echo '<input   type="hidden" name="Image"   value="' . $file_name . '">';
            echo '<image src="' . base_url() . 'upload/' . $file_name . '" height="150" width="150" class ="img-thumbnail" />';
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
            'mqty' => $this->input->post('mqty'),
            'price' => $this->input->post('price'),
            'cost' => $this->input->post('cost'),
            'rnum' => $this->input->post('rnum'),
            'Image' => $this->input->post('Image'),
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
        if ($this->input->post()) {

            $i = 0;
            $data = array();
            $subtotal = 0;
            $bill_id = 0;
            $final_array_collection = array();

            foreach ($this->input->post('pname') as $d) {


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

                    $value2 = $this->insert_model->get_qty($pid);

                    foreach ($value2->result() as $row) {
                        $l = $row->qty;
                    }

                    if ($l < $qty) {
                        $this->session->set_flashdata('emsg', 'Reqvested <strong>' . $proname . '</strong> Quantity is Higher than Stock');
                        $this->session->flashdata('emsg');

                    }
                }


                $value = $this->insert_model->get_price($pid); ///pasing the product id to get the the price from database

                foreach ($value->result() as $row) {
                    $price = $row->price;
                }

                $b = $this->insert_model->sid();

                $bill_id = $b[0]->last + 1;

                $total = $price * $qty; ////Total calculation

                $subtotal = $subtotal + $total;/////Sub Total Calculation
                $final_array_collection[] = array("proname" => $proname, "price" => $price, "qty" => $qty, "total" => $total, "pid" => $pid);//creating array to pass to view
                $i++;
            }


            $result['result'] = compact("final_array_collection", "i", "subtotal", "bill_id");

            $this->load->view("bill", $result);
        }


    }


    public function bill_data()
    {
        $des = array();
        $data['data2'] = array(
            'pid' => $this->input->post('pid[]'),
            'proname' => $this->input->post('proname[]'),
            'uprice' => $this->input->post('uprice[]'),
            'qty' => $this->input->post('qty[]'),
            'total' => $this->input->post('total[]'),
            'discount' => $this->input->post('discount'),
            'subtotal' => $this->input->post('subtotal'),
            'bill_id' => $this->input->post('bill_id'),
        );

        foreach ($data as $entry) {
            $discount = $entry['discount'];
            $subtotal = $entry['subtotal'];
            $pid = $entry['pid'];
            $proname = $entry['proname'];
            $uprice = $entry['uprice'];
            $qty = $entry['qty'];
            $total = $entry['total'];
            $bill_id = $entry['bill_id'];

            foreach ($pid as $row) { //fetching the pid

                $value = $this->insert_model->qty_sub($row); ////getting the current qty level
                $des[] = $row;
                foreach ($value->result() as $row3) {
                    $cqty = $row3->qty;
                }
                foreach ($qty as $row2) { /////fetching the qty
                    $cqty = $cqty - $row2; ///substacting the current qty from the inserted qty
                    $r = $this->insert_model->qty_update($cqty, $row);///update the table after deduct the qty from current qty
                }
            }
        }
        foreach ($des as $dids) { ////fetching datas that received to the varibale (product ids from abaove method ) fetcing them to get the details
            $details = $this->insert_model->prodetails($dids);/// getting the produtct description to show
            foreach ($details->result() as $row4)/// fetching the details
            {
                $prodescription[] = $row4->description;
            }
        }

        $subtotal = $subtotal - $discount;
        $sales_type = 'product';
        $bid = 'IAT-' . $bill_id;
        $date = date('Y-m-j');

        $this->insert_model->update_sales($subtotal, $sales_type, $bid, $date); ////inserting data to sales table


        $sales_data = array();
        for ($i = 0; $i < count($data['data2']['pid']); $i++) {
            $sales_data[] = [
                /*'pid'     => $data['data2']['pid'][$i],*/
                'pname' => $data['data2']['proname'][$i],
                'qty' => $data['data2']['qty'][$i],
                'uprice' => $data['data2']['uprice'][$i],
                'total' => $data['data2']['total'][$i],
                'sid' => $bill_id
            ];
        }

        $this->db->insert_batch('sdetails', $sales_data);

        $a = count($pid);//getting the array count to loop through the array

        $d['final_result'] = compact("pid", "proname", "uprice", "qty", "total", "discount", "subtotal", "a", "prodescription", "des", "bill_id"); //creating new array to pass to view

        $this->load->view("invoice", $d);

    }

    public function service()
    {

        $this->load->view("addservice");
    }

    public function service_cal()
    {

        $this->load->view("addservice");
    }

    ///report related codes

    public function dreport()
    {
        //////////total investment calculation///////////////////////////////////////
        $total_invested = 0;

        $data["qty_cost"] = $this->insert_model->total_invest();

        foreach ($data['qty_cost'] as $k => $row) {

            $qty = $row->qty;

            $cost = $row->cost;

            $data["qty_cost"][$k] = $total_invested + ($qty * $cost);
        }


        /// end of calculation//////////////////////////////////

        $data["rdata"] = $this->insert_model->dreport();


        $this->load->view("reports/daily", $data);
    }

    public function bid_details($sid)
    {

        $data["pdata"] = $this->insert_model->bid_details($sid);
        $this->load->view("reports/bid_details", $data);
    }

    public function total_sales()
    {

        $start = $this->input->post('start');
        $end = $this->input->post('end');

        $data['total'] = $this->insert_model->sales_report($start, $end);

        if ($data['total'][0]->total != null) {
            $b = $data['total'][0]->total;
            $data['data2'] = array(
                'total' => $b,
                'sdate' => $start,
                'edate' => $end
            );


            $this->load->view("reports/day_sales", $data);
        } else {
            $b = "0";
            $data['data2'] = array(
                'total' => $b,
                'sdate' => $start,
                'edate' => $end);
            $this->load->view("reports/day_sales", $data);

        }

    }

    public function inventory()
    {

        $data["pdata"] = $this->insert_model->inventory_data();
        $this->load->view("reports/inventry", $data);

    }
}