<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	<div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
				<div class="col-sm-3">
				<?php include 'includes/sidebar.php'; ?>
				</div>
	        	<div class="col-sm-9">
		       		<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$index = 3;	
						    $result = $conn->prepare("SELECT * FROM products");
						    $result->execute();
						    foreach ($result as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$index = ($index == 3) ? 1 : $index + 1;
	       						if($index == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b> Giá: ".number_format($row['price'])."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($index == 3) echo "</div>";
						    }
						    if($index == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($index == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>