<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('show_model');

    }



    public function sinsert()
    {


        $this->form_validation->set_rules('pname', 'pname', 'required');
        $this->form_validation->set_rules('Image', 'Image', 'required');


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('sinsert');

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
                'itype' => 's',
            );


           $this->show_model->form_insert($data2);
            $this->session->set_flashdata('msg', 'Show Item Inserted Successfully');
            $this->session->flashdata('msg');
            redirect("Show/sinsert");


        }

    }

    function upload_pro_image(){
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'jpeg|jpg|png';
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

        $data["pdata"] = $this->show_model->pdata();


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




}
