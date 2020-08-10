<?php
class Project extends CI_Controller
{
    function index()
    {
        $this->load->model("adminmodel");
        $data=$this->adminmodel->allpost();
        $this->load->view("project/index",compact("data"));
         
    }}
    ?>