<body>
     <h2 class="text-primary" align="center" >Registration Form</h2>
        <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"> 
           <?php
             echo form_open("Admin/form");?>
            
             
          <div class="form-group">
           <label for="exampleInputusername">username</label>
           <input type="username" class="form-control" name="uname" id="exampleInputusername" aria-describedby="usernameHelp" placeholder="username">
           
       </div>
       <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
           
       </div>
               <button type="submit" class="btn btn-success">Submit</button><br>
                <?php 
                echo form_close();
                ?>
                <div class="col-md-2"></div>