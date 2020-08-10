<?php
class adminmodel extends CI_Model
{
    function match($uname,$pass)
{
    $d=$this->db->query("select*from admin where uname='$uname' and pass='$pass'");
    if($d->num_rows())
    {
        $this->session->set_userdata('user',$uname);
        return redirect("admin/dashboard");
    }
    else{
        echo $this->session->set_flashdata('login_error', 'wrong id & password');
       return redirect("admin/index");
           
           
    }
}

function insert($data)
    {
        $this->load->database();
        $this->db->insert("admin",$data);
    
    }
    function postdata($x)
    {
        $this->db->insert('post',$x);
    }
    function allpost()
    {
//        $this->load->database();
         $d=$this->db->get('post');
//         return $d->result_array(); 
        return $d->result();
    }
    function deletemodel($id)
    {
        $this->db->query("delete from post where id='$id'");
        return redirect("admin/dashboard");
    }
    function updatepost($id)
    {
    $d=$this->db->query("select * from post where id='$id'");
        return $d->result();
    }
    function changedata($data)
    {
        print_r($data);
        extract($data);
        $this->db->where('id',$id);
        $this->db->update('post',$data);
        redirect("admin/dashboard");
    }
}
?>