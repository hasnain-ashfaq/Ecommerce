<?php 
include "header.php";
 ?>
 <br><br>

<!-- -----------Section---------- -->
<?php 
 

               
                $query = "SELECT * FROM `products`";
                $detail = mysqli_query($DBConnect , $query);

                
                


 ?>


<div class="container">
	<div class="row">

<?php while ($data = mysqli_fetch_assoc($detail)) {
                   ?>

		<div class="col-md-3 card">
			<div style="position: relative;">
		<img src="<?php echo $data['img']; ?>" width="100%" height="350">
			
				<div class="big-img-hover" >
			<div class="text-center mtt-5"><a href="Quickview.php?id=<?php echo $data['id'] ?>" class="btn rounded-pill">Quick View</a></div>
			</div>
		</div>
<p><?php echo $data['title']; ?></p> <p><?php echo $data['price']; ?></p>
</div><?php 
}
 ?>

</div>
</div>


		<!-- <div class="col-md-3 card">
			<div style="position: relative;">
		<img src="images/2card.jpg" width="100%" height="350">
			
				<div class="big-img-hover" >
			<div class="text-center mtt-5"><button class="btn rounded-pill">Quick View</button></div>
			</div>
		</div>
Esprit Ruffello Shirt <br>$16.64
</div>
		<div class="col-md-3 card">
			<div style="position: relative;">
		<img src="images/3card.jpg" width="100%" height="350">
			
				<div class="big-img-hover" >
			<div class="text-center mtt-5"><button class="btn rounded-pill">Quick View</button></div>
			</div>
		</div>
Esprit Ruffello Shirt <br>$16.64
</div>
		<div class="col-md-3 card">
			<div style="position: relative;">
		<img src="images/4card.jpg" width="100%" height="350">
			
				<div class="big-img-hover" >
			<div class="text-center mtt-5"><button class="btn rounded-pill" >Quick View</button></div>
			</div>
		</div>
Esprit Ruffello Shirt <br>$16.64
</div>
	</div>
</div> -->



<?php 
include "footer.php";
 ?>