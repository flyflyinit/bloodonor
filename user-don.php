
<?php

	if(isset($_POST["submit"])) {

		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);



$servername = "localhost";
$username = "root";
$password = "";
$database = "base" ;

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";

		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$profession=$_POST['profession'];
		$daten = $_POST['daten'] ;
		$lieun = $_POST['lieun'];
		$tlphfixe=$_POST['tlphfixe'];
		$tlph=$_POST['tlph'];
		$email=$_POST['email'];
		$nwilaya = $_POST['nwilaya'] ;
		$addr = $_POST['addr'];
		$ville=$_POST['ville'];
		$groupage=$_POST['groupage'];
		$existance = $_POST['existance'];





		$sql="insert into donneurs (nom,prenom,profession,daten,lieun,tlphfixe,tlph,email,nwilaya,ville,addr,groupage,existance,img) values('$nom','$prenom','$profession','$daten','$lieun','$tlphfixe','$tlph','$email','$nwilaya','$ville','$addr','$groupage','$existance','$target_file');";
	 	 //define object to apply methods

	  	// $prDataBase=$conn->query($sql);

		if (mysqli_query($conn, $sql)) {
			echo "<div class='alert alert-success' role='alert'>You have been registered succesffully!</div>";
		} else {
			echo "<div class='alert alert-danger' role='alert'>Error occured during registering</div>";
		    #echo "Error database: " . mysqli_error($conn);
		}

		mysqli_close($conn);


	}
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<style type="text/css">

	<style>

type="text/css">
				form {
		  border: 3px solid #f1f1f1;
		}


		#output_image
		{
		 max-width:300px;
		}



body
{
 width:60%;
 margin:0 auto;
 background-image: url('background.png');
 background-repeat: no-repeat;
  background-size: cover;
  font-family: "Arial";
font-size: 18px ;

}
</style>

</head>
<body >



<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>




  <div class="container">
<form id="wrapper" action="user-don.php"  method="post" enctype="multipart/form-data">
<br>
<br>
	<div class="jumbotron">
  <h1 class="display-6">Hello, Donor!</h1>
  <p class="lead">you did an excellent choice, we are pleasured with your donation.</p>
  <hr class="my-4">
    <p class="lead">kindly fill the forum with your correct information, we will you in touch. please if you have any question <a href="about.html">read more about us</a> and feel free to <a href="about.html">contact us.</a></p>

	</div>
	<br>
	<div class="row">
	<div class="col">
	<label><b>First name</b></label>
	<input class="form-control" placeholder="Enter your first name " type="text" name="nom">
	</div>
	<div class="col">
	<label><b>Last name</b></label>
	<input class="form-control" type="text" placeholder="Enter your last name" name="prenom">
	</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
			<label><b>Profession </b></label>
			<input class="form-control" type="text" placeholder="Enter your profession" name="profession">
		</div>
		<div class="col">
			<label><b>Date of birthday </b></label>
			<input class="form-control" type="date" name="daten" value="<?php echo date('Y-m-d'); ?>" />
		</div>
	</div>

	<br>
		<div class="row">
		<div class="col">
				<label><b>Phone number</b></label>
				<input class="form-control" type="text" placeholder="Enter your phone number" name="tlphfixe">
		</div>
		<div class="col">
				<label><b>Phone number2</b></label>
				<input class="form-control" type="text" placeholder="Enter second phone number (optional)" name="tlph">
		</div>
		</div>

	<br>
	<label><b>Location of birthday</b></label>
	<input class="form-control" type="text" placeholder="Enter your location birthday" name="lieun">

	<br>
	<label><b>Email </b></label>
	<input class="form-control" type="mail" placeholder="Enter your email" name="email">

	<br>
	<label><b>Address </b></label>
	<input class="form-control" type="text" placeholder="Enter your address" name="addr">
	

	<br>
		<div class="row">
		<div class="col">
			<label><b>State </b></label>
			<select class="form-control" name="nwilaya">
				<option value ="01">Adrar</option>
				<option value ="02">chlef</option>
				<option value ="03">laghouat</option>
				<option value ="04">oum el bouaghi</option>
				<option value ="05">batna</option>
				<option value ="06">bejaia</option>
				<option value ="07">biskra</option>
				<option value ="08">bechar</option>
				<option value ="09">blida</option>
				<option value ="10">bouira</option>
				<option value ="11">tamanraset</option>
				<option value ="12">tebessa</option>
				<option value ="13">tlemcen</option>
				<option value ="14">tiaret</option>
				<option value ="15">tizi ouzou</option>
				<option value ="16">alger</option>
				<option value ="17">djelfa</option>
				<option value ="18">jijel</option>
				<option value ="19">setif</option>
				<option value ="20">saida</option>
				<option value ="21">skikda</option>
				<option value ="22">sidi bel abbes</option>
				<option value ="23">annaba</option>
				<option value ="24">guelma</option>
				<option value ="25">constantine</option>
				<option value ="26">medea</option>
				<option value ="27">mostaganem</option>
				<option value ="28">msila</option>
				<option value ="29">mascara</option>
				<option value ="30">ouargla</option>
				<option value ="31">oran</option>
				<option value ="32">el bayadth</option>
				<option value ="33">illizi</option>
				<option value ="34">borj bou arreridj</option>
				<option value ="35">boumerdes</option>
				<option value ="36">el taraf</option>
				<option value ="37">tindouf</option>
				<option value ="38">tissemsilt</option>
				<option value ="39">el oued</option>
				<option value ="40">khenchela</option>
				<option value ="41">souk ahras</option>
				<option value ="42">tipaza</option>
				<option value ="43">mila</option>
				<option value ="44">ain defla</option>
				<option value ="45">naama</option>
				<option value ="46">ain temouchent</option>
				<option value ="47">ghardaia</option>
				<option value ="48">relizane</option>
				<option value ="49">el mghair</option>
				<option value ="50">el meniaa</option>
				<option value ="51">ouled djellal</option>
				<option value ="52">bordj baji mokhtar</option>
				<option value ="53">beni abbes</option>
				<option value ="54">timimoun</option>
				<option value ="55">touggourt</option>
				<option value ="56">djanet</option>
				<option value ="57">in salah</option>
				<option value ="58">in geuzzam</option>
			</select>
		</div>
		<div class="col">
				<label><b>City </b></label>
				<input class="form-control" type="text" placeholder="Enter your city" name="ville">
		</div>
		<div class="col">
				<label><b>Your current city </b></label>
				<input class="form-control" type="text" placeholder="Enter your current city" name="existance">
		</div>
		</div>

	

	<br>
	<div class="form-check form-check-inline">
	<label ><b>Bloud group &nbsp; &nbsp; &nbsp; </b></label>
	  <input class="form-check-input" type="radio" name="groupage" value="O+">O+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input class="form-check-input" type="radio" name="groupage" value="O-">O-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input class="form-check-input" type="radio" name="groupage" value="A+">A+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input class="form-check-input" type="radio" name="groupage" value="A-">A-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input class="form-check-input" type="radio" name="groupage" value="B+">B+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input class="form-check-input" type="radio" name="groupage" value="B-">B-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input class="form-check-input" type="radio" name="groupage" value="AB+">AB+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input class="form-check-input" type="radio" name="groupage" value="AB-">AB-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
	  <br>
	 <br>

	<label><b>Picture </b></label>
    <input class="form-control-file" type="file" name="fileToUpload" id="fileToUpload" onchange="preview_image(event)">
    <br>
     <img  id="output_image"/>

	<br>
	<br>
	<button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
</form>
<br>
<form   action='index.html' > 
	<button  type="submit" class="btn btn-outline-danger" >Back</button> 
</form>
<br>
<br>
<br>
  </div>

</body>
</html>
