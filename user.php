
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<style type="text/css">
		body
{
 width:40%;
 margin:0 auto;
 padding:50px;
 background-image: url('background.png');
 background-repeat: no-repeat;
  background-size: cover;
font-family: "Arial";
font-size: 18px ;
;

}

}
</style>

</head>
<body >



  <div class="container">
<form  action="user2.php"  method="post" enctype="multipart/form-data">
  <div class="form-group">

	<br>
	<br>

	<label><b>Select The State </b></label>
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
	<select class="form-control" name="grpage">
		<option value ="O+">O+</option>
		<option value ="O-">O-</option>
		<option value ="A+">A+</option>
		<option value ="A-">A-</option>
		<option value ="B+">B+</option>
		<option value ="B-">B-</option>
		<option value ="AB+">AB+</option>
		<option value ="AB-">AB-</option>

	</select>
	<br>

	<button type="submit" class="btn btn-success btn-block" name="submit">Search</button>

</div>

</form>


<form   action='index.html' > 
	<button  type="submit" class="btn btn-outline-danger" >Back</button> 
</form>
  </div>

</body>
</html>
