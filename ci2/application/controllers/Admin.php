<?php
class Admin extends CI_Controller
{
    function index()
    {
        $this->load->view("layout/header");
        $this->load->view("admin/login");
        $this->load->view("layout/footer");
    }
    
    function login()
    {
        $this->form_validation->set_rules('uname',"username","required|alpha");
        $this->form_validation->set_rules('pass',"password","required");
        
        
        if($this->form_validation->run())
        {
        $uname=$this->input->post('uname');
        $pass=$this->input->post('pass');
        $this->load->model("adminmodel");
        $this->adminmodel->match($uname,$pass);
    }else{
            $this->load->view("admin/login");
        }}
    
    function reg()
    {
        $this->load->view("layout/header");
        $this->load->helper("html");
        $this->load->helper("form");
        $this->load->view("admin/reg");
        $this->load->view("layout/footer");
    }
        function form()
        {
      $data=$this->input->post();
        $this->load->model("adminmodel");
       $this->adminmodel->insert($data);
    }
    
    function dashboard()
    {
        if(isset($_SESSION['user']))
        {
        $this->load->view("layout/header");
        $this->load->view("admin/dashboard");
        $this->load->view("layout/footer");
    }
    else{
        return redirect("admin/index");
    }}
    
    function addingpost()
    {
        $this->load->view("layout/header");
       
        $this->load->view("admin/dashboard");
         $this->load->view("admin/post");
        $this->load->view("layout/footer");
    }
    public function do_upload()
    {
        $this->load->library("upload");
        $image=$_FILES['Image']['name'];
        $newname=uniqid().$image;
        
        $config['upload_path']='./assets';
        $config['allowed_types']='jpg|jpeg|gif|png';
        $config['file_name']=$newname;
        $this->upload->initialize($config);
        if($this->upload->do_upload('Image'))
        {
            $pdata=$this->input->post();
            $this->load->model("adminmodel");
            
            $pdata['Image']=$newname;
            
            $this->adminmodel->postdata($pdata);
        }
        else{
            $error=array('error'=>$this->display_error());
            $this->load->view('admin/post',$error);
        }
         }
    function logout()
    {
        $this->session->sess_destroy();
            redirect("admin/index");
    }
    function viewpost()
    { 
        $this->load->view("layout/header");
        $this->load->model("adminmodel");
        $data=$this->adminmodel->allpost();
        $this->load->view("admin/viewpost",compact("data"));
        $this->load->view("layout/footer");
    }
    function delete($id)
    {
        $this->load->view("layout/header");
        $this->load->view("admin/dashboard");
        $this->load->model("adminmodel");
        $this->adminmodel->deletemodel($id);
         $this->load->view("layout/footer");
        }
    
    function edit($id)
    {
        $this->load->model("adminmodel");
       $data= $this->adminmodel->updatepost($id);
        $this->load->view("layout/header");
        $this->load->view("admin/dashboard");
        $this->load->view("admin/editpost",compact("data"));
         $this->load->view("layout/footer");   
    }
    function update()
    {
        $this->load->view("layout/header");
        $this->load->model("adminmodel");
        $data=$this->adminmodel->changedata();
        $this->load->view("admin/editpost",compact("data"));
        $this->load->view("layout/footer");
    }
    function changedata()
    {
       $this->load->library("upload");
        $image=$_FILES['Image']['name'];
        $newname=uniqid().$image;
        
        $config['upload_path']='./assets';
        $config['allowed_types']='jpg|jpeg|gif|png';
        $config['file_name']=$newname;
        $this->upload->initialize($config);
        if($this->upload->do_upload('Image'))
        {
            $pdata=$this->input->post();
            $this->load->model("adminmodel");
            
            $pdata['Image']=$newname;
            
            $this->adminmodel->changedata($pdata);
        }
        else{
            $error=array('error'=>$this->upload->display_error());
            $this->load->view('admin/post',$error);
        }
         
    }
    
}
?>