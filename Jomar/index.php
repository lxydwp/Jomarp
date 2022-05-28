<?php include('connection.php'); ?>

<?php  

if(!isset($_SESSION['account'])){
 
}else
{
$accountID = $_SESSION['account'];
      $account=mysqli_query($con,"SELECT users.* from users where id = '$accountID'")or die(mysqli_error($con));
      $row=mysqli_fetch_object($account);
  }
?>
<!DOCTYPE html>
<link rel="shortcut icon" href="img/cart.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<html>
<?php include('1head.php'); ?>
<style>
	#p_img{
		max-width: 200px;
	}
</style>
<body>
	

<!-- Navbar -->

<?php include('1nav.php'); ?>

<section class="home" id="home">
	<div class="header">
	<div class="container">
		<div class="navbar">
		


		
		</div>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<center>
				<h1> When Quality <br> Truly Matters! </h1>
				<p> A shirt's not just a shirt. <br> It's the experience of what goes into that shirt.</p>
				<a href="product.php" class="btn" style="border: 1px brown solid; width: 200px;"> Shop Now &#8594;</a></center>
		
			</div>
			</div>
			<center>
			<div class="col-md-12">
				<img id="p_img" src="img/tshirts.jpg" style="float: width: 200px; height: auto;">
			</div>
		</div> 
		</center>
		</div>
	</div>
</section>



</div>


<!---- products ---->
<section class="products"id="products">
<div class="products">
	<div class="small-container">
		<h2 class="title"> Products </h2>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 my-2">
				<img id="p_img" src="img/1.jpg">
			</div>
			<br>
			<div class="col-lg-4 col-md-4 col-sm-12 my-2">
				<img id="p_img" src="img/2.jpg">
			</div>
			<br>
			<div class="col-lg-4 col-md-4 col-sm-12 my-2">
				<img id="p_img" src="img/3.jpg">
			</div>
		</div>
	</div>
</div>
</body>
</html>