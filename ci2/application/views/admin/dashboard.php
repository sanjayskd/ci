<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 align="center"><em>Welcome Admin</em></h1>
            <h2 align="right"> <?php echo anchor("admin/logout","logout",['class'=>'btn btn-danger']) ?></h2>
        </div>
    </div>
    <div class="row">
    <div class="col-md-3">
      <h3 align="left"> <?php echo anchor("admin/addingpost","Form",['class'=>'btn btn-success btn-block mt-4']);
          ?></h3>
          <h3 align="left"> <?php echo anchor("admin/viewpost","Viewpost",['class'=>'btn btn-success btn-block mt-4']);
          ?></h3>
        </div>
        