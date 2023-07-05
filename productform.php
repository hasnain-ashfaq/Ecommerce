<?php 
include "header.php";
if(isset($_POST['sub'])){
              $doc = $_FILES['img1']['name'];
              $src = $_FILES['img1']['tmp_name'];
              $des = "images/$doc";
              move_uploaded_file($src, $des);

              $title = $_POST['title'];
              $pri = $_POST['pri'];
              $descrip = $_POST['descrip'];

              $query = "INSERT INTO `products`(`id`, `title`, `price`, `img`, `description`) VALUES ('', '$title', '$pri', '$des', '$descrip')";
              
              mysqli_query($DBConnect , $query);
              echo "<script>window.open('index.php', '_self')</script>";



            }










 ?>




<form method="POST" enctype="multipart/form-data">
<div class="container">
<h2>Product Seller Form</h2>
<label>Upload Product Picture</label>
<input type="file" name="img1" class="form-control">
<label>Product Title</label>
<input type="text" name="title" class="form-control">
<label>Price</label>
<input type="text" name="pri" class="form-control">
<label>Description</label>
<input type="text" name="descrip" class="form-control message"><br>
<div class="text-center"><input type="Submit" name="sub" class="btn btn-lg" value="Submit"></div>
</div>
</form>

























 <?php 
include "footer.php";
 ?>