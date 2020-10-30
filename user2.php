<?php  
if (isset($_POST["submit"])) {
		$DSN='mysql:host=localhost;dbname=base';
		$conn=new PDO($DSN,'root','');
		$nwilaya = $_POST["nwilaya"];
		$grpage = $_POST["grpage"];

		$sql = "select * from donneurs where nwilaya='$nwilaya' and groupage='$grpage' ; " ;
		$prDataBase=$conn->query($sql);

echo "
  <div id='pr' class='jumbotron'>
  <h1 class='display-6'>Donors In The State Number "; echo $nwilaya ;  echo"</h1>
  <p class='lead'>we hope you find the right donor.</p>
  <hr class='my-4'>
    <p class='lead'>kindly choose the close donor to your location and contact him/her using email or phone number, make sure to give us your feedbacks. and please if you have any question <a href='about.html'>read more about us</a> and feel free to <a href='about.html'>contact us.</a></p>
  </div>
";


echo "
  <table id='pr' class='table table-bordered'>
    <thead>
      <tr>
        <th>Id</th>
        <th>First name</th>
        <th>Last name</th>
        <th>City</th>
        <th>Bloud group</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Phone2 fixe</th>
        <th>Email</th>
        <th>Current city</th>
        <th>Profession</th>
        <th>Picture</th>
      </tr>
    </thead>
    <tbody> ";

     		while($dataRows=$prDataBase->fetch() ){
     echo "<tr>";
      echo "<td> " ;  echo $dataRows["iddonneur"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["nom"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["prenom"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["ville"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["groupage"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["addr"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["tlph"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["tlphfixe"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["email"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["existance"];   ; echo "</td>";
      echo "<td> " ;  echo $dataRows["profession"];   ; echo "</td>";
      echo "<td>  <img style='max-width:100%;' src='"; 

      echo $dataRows["img"];   

      echo "'></td>";

     echo "</tr>";

}
  echo " </tbody>
  </table>


<form   action='user.php' > 
  <button  type='submit' class='btn btn-outline-danger' >Back</button> 
</form>


   </div>";


	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
body
{
 width:100%;
 margin:0 auto;
 padding:100px;
  background-image: url('background.png');
 background-repeat: no-repeat;
  background-size: cover;
font-family: "Arial";
font-size: 18px ;

}

#pr
{
  background-image: url('background.png');
 background-repeat: no-repeat;
  background-size: cover;
  opacity: 0.8;
}		
	</style>




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
</html>
