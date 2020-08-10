
    <h1 class="text-success"><em>Data viewpost:-</em></h1>
<table border="8px" class="bg-secondary">
<tr>
    <th>id</th>
    <th>posttitle</th>
    <th>Description</th>
    <th>Category</th>
    <th>Author</th>
    <th>Image</th>
    <th>Delete</th>
    <th>Edit</th>
</tr>   
<?php
foreach($data as $a)
{   ?>

<!--arrayform---------------------------------------------->
<!--        <tr class="text-white">
         <td><?php //echo $id=$a['id'];?></td>
        <td> <?php //echo $a['posttitle'];?></td>
          <td> <?php //echo $a['Description'];?></td>
          <td> <?php //echo $a['Category'];?></td>
          <td> <?php //echo $a['Author'];?></td>
          <td> <?php //echo $a['Image'];?></td>
          <td><?php //echo anchor("admin/delete/$id","delete");?></td>
</tr>--->
<!----------------------------------------------------------------------------->


       <tr class="text-white">
         <td><?php echo $id=$a->id;?></td>
        <td> <?php echo $a->posttitle;?></td>
          <td> <?php echo $a->Description;?></td>
          <td> <?php echo $a->Category;?></td>
           <td> <?php echo $a->Author;?></td>
    <td><img class="img-thumbnail" src="<?php echo base_url("assets/").$a->Image;?>"alt="" height="10%" width="100px"></td>
          
           <td><?php echo anchor("admin/delete/$id","delete");?></td>
          <td><?php echo anchor("admin/edit/$id","edit");?></td>
</tr>
<?php
} ?>
</table>






