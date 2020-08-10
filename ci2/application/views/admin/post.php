
   <div class="col-md-9">
    <?php echo form_open_multipart('admin/do_upload');
    if(isset($error))
    {
        print_r($error);
    }
    ?>
    <label for="">post title</label>
    <input type="text" name="posttitle" class="form-control">
    <label for="">Description</label>
    <textarea name="Description" id="" cols="30" rows="10" class="form-control"></textarea>
    <label for="">Category</label>
    <input type="text" name="Category" class="form-control">
    <label for="">Author</label>
    <input type="text" name="Author" class="form-control">
    <label for="">Image</label>
    <input type="file" name="Image" class="form-control">
    <input type="submit" class="btn-block btn btn-primary">
    <?php echo form_close();?>
</div>
</div></div>