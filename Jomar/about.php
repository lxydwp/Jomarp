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

<html>
<?php include('1head.php'); ?>
<style type="text/css">
	body {
  margin:0;
  padding:0;
}
.noo-row:after {
  content: "";
  display: table;
  clear: both;
}
.noo-column-thrid {
  float: left;
  width: 33%;
  padding-left: 0.15%;
}
.noo-column-fourth {
  float: left;
  width: 24.65%;
  padding-left: 0.15%;
}
.noo-column-half {
  float: left;
  width: 49.6%;
 padding-left: 0.15%;
}
.noo-border-black{
	border: solid 1px black;
}
.noo-border-green{
	border: solid 1px green;
}
.noo-border-red{
	border: solid 1px red;
}
.noo-border-blue{
	border: solid 1px blue;
}
.noo-border-yellow{
	border: solid 1px yellow;
}
.noo-padding-top5px{
	padding-top: 5px;
}
.noo-padding-top10px{
	padding-top: 10px;
}
.noo-padding-top20px{
	padding-top: 20px;
}
.noo-padding-top50px{
	padding-top: 50px;
}
.noo-padding-top80px{
	padding-top: 80px;
}
.noo-padding-top100px{
	padding-top: 100px;
}
.noo-padding-top200px{
	padding-top: 200px;
}
@media screen and (max-width:600px) {
  .noo-column-thrid, .noo-column-half, .noo-column-fourth {
    width: 100%;
  }
}
.noo-pic{

	width:150px;
	height:150px;
	font-size:100px;
	background:#ebeff3;
	color:#1b00ff;
	line-height:52px;
	text-align:center;
	display:inline-block;
	vertical-align:middle;
	border-radius:100%;
	-webkit-box-shadow:0 0 10px rgba(0,0,0,.18);
	box-shadow:0 0 10px rgba(0,0,0,.18)
}
.noo-name{
	display:inline-block;
	color:black;
	vertical-align:middle;
	margin-left:5px;
	font-family:'Inter',sans-seri
}
</style>
<body>
	

<!-- Navbar -->

<?php include('1nav.php'); ?>
<div class="noo-padding-top50px"></div>
<section class="home " id="home">
<div class="header" style="padding-bottom: 100px;">
	<div class="container" >
	<div class="noo-row  "  >
	<div class="noo-column-half  " >
		<td rowspan="2"></td>
		<img src="img/tshirts.jpg" style="width: 100%; border-radius: 10%; "><br><br>
		<p>Super comfortable to wear. Nice fabric and worth the money on this shirt.
		 They can easily choose the design, color and size.</p>
	</div>

	
</div>
	</div>	
		</div>

</section>

	

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
