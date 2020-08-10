
<style>
   body
       {
           background-image: url(<?php echo base_url()."assets/img1.jpg";?>);
           background-repeat: no-repeat;
           background-size: cover;
       }
    /*.myform{
        background-color:darkslateblue;
        height: auto;
        color:dimgray;
    }*/
    
    </style>

<body>

<div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            
            <div class="myform">
            <h1 class="text-primary" >Login Form</h1>
          <?php
               if($this->session->flashdata("login_error")){
                   echo "<span class='text-danger'>",$this->session->flashdata("login_error"),"</span>";
               }
                
                
                ?>
           <?php
             echo form_open("Admin/login");?>
            
             
          <div class="form-group">
           <label for="exampleInputusername">username</label>
           <?php echo form_error('uname',"<span class='alert-danger'>",'</span>');?>
           <input type="username" class="form-control" name="uname" id="exampleInputusername" aria-describedby="usernameHelp" placeholder="username">
           
       </div>
       <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <?php echo form_error('pass',"<span class='alert-danger'>",'</span>');?>
           <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
           
       </div>
                <button type="submit" name="sub" class="btn btn-primary">Submit</button><br>
                <?php  echo anchor('admin/reg', 'Create new account'); ?>
               <?php 
                echo form_close();
                ?>
                </div></div>
            <div class="col-md-2"></div>
