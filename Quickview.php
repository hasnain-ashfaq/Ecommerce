<?php 
include "header.php";

 $id = $_GET['id'];

               
                $query = "SELECT * FROM `products` WHERE `id` = '$id'";
                $detail = mysqli_query($DBConnect , $query);
                $data = mysqli_fetch_assoc($detail);

                
                


 ?>
 <br><br>

<div class="container-fluid">
		<div class="row">
			
<div class="col-md-5">
<img src="<?php echo $data['img']; ?>" width="100%" id="img1" height="600">
</div>
<div class="col-md-6">
	
	<h4><?php echo $data['title']; ?></h4>
	<p><?php echo $data['price']; ?></p><br>
	<p>Availablity: In stock</p>
	<hr>
	<input type="number" class="type">
	<button class="btn">+ADD TO BAG</button>
	<br><br>
	<hr><p><?php echo $data['description']; ?></p>




</div>
</div>
</div>

<?php 
include "footer.php";
 ?>