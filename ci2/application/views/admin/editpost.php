
   <div class="col-md-9">
    <?php echo form_open_multipart('admin/changedata');
    if(isset($error))
    {
        print_r($error);
    }
    ?>
    <?php foreach($data as $a)
       {
       ?>
       <input type="text" hidden name="id" value="<?php echo $a->id;?>">
    <label for="">post title</label>
    <input type="text" name="posttitle" value="<?php echo $a->posttitle;?>" class="form-control">
    <label for="">Description</label>
    <textarea name="Description" id="" cols="30" rows="10" class="form-control"><?php echo $a->Description;?></textarea>
    <label for="">Category</label>
    <input type="text" name="Category" value="<?php echo $a->Category;?>" class="form-control">
    <label for="">Author</label>
    <input type="text" name="Author" value="<?php echo $a->Author;?>" class="form-control">
    <label for="">Image</label>
    <input type="file" name="Image"  class="form-control">
    <input type="submit" class="btn-block btn btn-primary">
    <?php 
       }?>
    <?php echo form_close();?>
</div>
</div></div>