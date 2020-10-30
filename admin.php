<?php  

	session_start();
	if ($_SESSION['username']) {
		echo "<div id=text> Welcome, "; echo $_SESSION['username'] ; echo ", Click here to <a href='logout.php'>Logout</a></div>";

	}else{
		header("Location:main.php");
	}


		$uname="";

		$DSN='mysql:host=localhost;dbname=base';
		$conn=new PDO($DSN,'root','');


		$sql = "select * from donneurs ; " ;
		$prDataBase=$conn->query($sql);


echo "<nav class=' navbar navbar-expand-lg navbar-light bg-light'>
<div class='container'>
  <a class='navbar-brand' >Dashboard</a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav mr-auto'>
      <li class='nav-item active'>
         <a class='nav-link' href='index.html'>Home<span class='sr-only'>(current)</span></a>
      </li>
       <li class='nav-item active'>
        <a class='nav-link' href='admin.php'>admin panel<span class='sr-only'>(current)</span></a>
      </li>
    </ul>
    <div class='row'>
	    <div class='col'>
	    </div>
	    <div class='col-auto form-inline'>
	      	<form action='admin2-.php' method='post'>
		    	<button class='btn btn-dark btn-sm' type='submit' name='modifier' >Edit donors</button>
			</form>
			&nbsp;
			<form action='admin2.php' method='post'>
			    <button  class='btn btn-success btn-sm' type='submit' name='ajouter' >Add donors</button>
			</form>
	    </div>
	  </div>
	  </div>
  </div>
</nav>";




echo "<br><br>
  <table id='pr' class='container' class='table table-bordered'>
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
        <th>State</th>
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
      echo "<td> " ;  echo $dataRows["nwilaya"];   ; echo "</td>";
      echo "<td>  <img style='max-width:100%;' src='"; 

      echo $dataRows["img"];   

      echo "'></td>";

     echo "</tr>";

}
  echo " </tbody>
  </table> </div>";









 $wilayass = array("");
for ($i=1; $i<=58 ; $i++) { 
      $cpt = 0 ;

      $sql = " select iddonneur FROM donneurs WHERE nwilaya='$i' ; " ;
      $prDataBase=$conn->query($sql);
      while($dataRows=$prDataBase->fetch() ){
          $cpt++ ;
      }
      array_push($wilayass, $cpt);
}

echo "<br>";
echo "<br>";
echo "<br>";

echo "<div class='container'>";

echo " <h5>Total numbers of donors : </h5> ";
$mysqli = new mysqli("localhost", "root", "", "base");
$result = $mysqli->query("SELECT COUNT(*) FROM donneurs ")->fetch_array();
echo "<h3>"; 
echo $result[0] ;
echo "</h3>";
echo "<br>";
echo "<br>";




echo "<div class='row'>
    <div class='col'>
        <h5>Total number of Donors in each state : </h5>
        <div id='piechart' style='width: 500px; height: 400px;'></div> 

    </div>
    <div class='col'>
        <h5>Total number of Donors in each Bloud group : </h5>
        <div id='piechart_3d' style='width: 500px; height: 400px;'></div>
    </div>
  </div>";

echo "<br><br><br><br>";

 echo "</div>";

$grp= array("");
$mysqli = new mysqli("localhost", "root", "", "base");
$result = $mysqli->query("SELECT COUNT(*) FROM donneurs WHERE groupage='O+'")->fetch_array();
array_push($grp, $result[0]);

$result = $mysqli->query("SELECT COUNT(*) FROM donneurs WHERE groupage='O-'")->fetch_array();
array_push($grp, $result[0]);

$result = $mysqli->query("SELECT COUNT(*) FROM donneurs WHERE groupage='A+'")->fetch_array();
array_push($grp, $result[0]);

$result = $mysqli->query("SELECT COUNT(*) FROM donneurs WHERE groupage='A-'")->fetch_array();
array_push($grp, $result[0]);

$result = $mysqli->query("SELECT COUNT(*) FROM donneurs WHERE groupage='B+'")->fetch_array();
array_push($grp, $result[0]);

$result = $mysqli->query("SELECT COUNT(*) FROM donneurs WHERE groupage='B-'")->fetch_array();
array_push($grp, $result[0]);

$result = $mysqli->query("SELECT COUNT(*) FROM donneurs WHERE groupage='AB+'")->fetch_array();
array_push($grp, $result[0]);

$result = $mysqli->query("SELECT COUNT(*) FROM donneurs WHERE groupage='AB-'")->fetch_array();
array_push($grp, $result[0]);




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
  opacity: 1;
}   
#text{
	font-size: 15px ;
}

	</style>




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Wilayas', 'Nombre de donneurs'],
          ['adrar',     <?php echo $wilayass[1] ?>],
          ['chlef',      <?php echo $wilayass[2] ?>],
          ['laghouat',  <?php echo $wilayass[3] ?>],
          ['oum el bouaghi',     <?php echo $wilayass[4] ?>],
          ['batna',      <?php echo $wilayass[5] ?>],
          ['bejaia',  <?php echo $wilayass[6] ?>],
          ['biskra',     <?php echo $wilayass[7] ?>],
          ['bechar',      <?php echo $wilayass[8] ?>],
          ['blida',  <?php echo $wilayass[9] ?>],
          ['bouira',     <?php echo $wilayass[10] ?>],
          ['tamanraset',      <?php echo $wilayass[11] ?>],
          ['tebessa',  <?php echo $wilayass[12] ?>],
          ['tlemcen',     <?php echo $wilayass[13] ?>],
          ['tiaret',      <?php echo $wilayass[14] ?>],
          ['tizi ouzou',  <?php echo $wilayass[15] ?>],
          ['alger',     <?php echo $wilayass[16] ?>],
          ['djelfa',      <?php echo $wilayass[17] ?>],
          ['jijel',  <?php echo $wilayass[18] ?>],
          ['setif',     <?php echo $wilayass[19] ?>],
          ['saida',      <?php echo $wilayass[20] ?>],
          ['skikda',  <?php echo $wilayass[21] ?>],
          ['sidi bel abbes',     <?php echo $wilayass[22] ?>],
          ['annaba',      <?php echo $wilayass[23] ?>],
          ['guelma',  <?php echo $wilayass[24] ?>],
          ['constantine',     <?php echo $wilayass[25] ?>],
          ['medea',      <?php echo $wilayass[26] ?>],
          ['mostaganem',  <?php echo $wilayass[27] ?>],
          ['msila',     <?php echo $wilayass[28] ?>],
          ['mascara',      <?php echo $wilayass[29] ?>],
          ['ouragla',  <?php echo $wilayass[30] ?>],
          ['oran',     <?php echo $wilayass[31] ?>],
          ['el bayadth',      <?php echo $wilayass[32] ?>],
          ['illizi',  <?php echo $wilayass[33] ?>],
          ['borj bou arreridj',     <?php echo $wilayass[34] ?>],
          ['boumerdes',      <?php echo $wilayass[35] ?>],
          ['el tarf',  <?php echo $wilayass[36] ?>],
                    ['tindouf',     <?php echo $wilayass[37] ?>],
          ['tissemsilet',      <?php echo $wilayass[38] ?>],
          ['el oued',  <?php echo $wilayass[39] ?>],
          ['khechnchela',     <?php echo $wilayass[40] ?>],
          ['souk ahras',      <?php echo $wilayass[41] ?>],
          ['tipaza',  <?php echo $wilayass[42] ?>],
          ['mila',     <?php echo $wilayass[43] ?>],
          ['ain defla',      <?php echo $wilayass[44] ?>],
          ['naama',  <?php echo $wilayass[45] ?>],
          ['ain temouchent',     <?php echo $wilayass[46] ?>],
          ['ghardaia',      <?php echo $wilayass[47] ?>],
          ['relizane',  <?php echo $wilayass[48] ?>],
          ['el mghair',     <?php echo $wilayass[49] ?>],
          ['el meniaa',      <?php echo $wilayass[50] ?>],
          ['ouled djellal',  <?php echo $wilayass[51] ?>],
          ['borj baji mokhtar',     <?php echo $wilayass[52] ?>],
          ['beni abbes',      <?php echo $wilayass[53] ?>],
          ['timimoun',  <?php echo $wilayass[54] ?>],
                  ['touggourt',  <?php echo $wilayass[55] ?>],
          ['djanet',     <?php echo $wilayass[56] ?>],
          ['in salah',      <?php echo $wilayass[57] ?>],
          ['in guezzam',  <?php echo $wilayass[58] ?>],
        ]);

        var options = {
          title: 'total number of donors in each state '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['blood group', 'blood group'],
          ['O+',     <?php echo $grp[1] ?>],
          ['O-',      <?php echo $grp[2] ?>],
          ['A+',  <?php echo $grp[3] ?>],
          ['A-',     <?php echo $grp[4] ?>],
          ['B+',      <?php echo $grp[5] ?>],
          ['B-',  <?php echo $grp[6] ?>],
          ['AB+',     <?php echo $grp[7] ?>],
          ['AB-',      <?php echo $wilayass[8] ?>]
          ]);

        var options = {
          title: 'total number of donors in each group blood : ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>


</head>
<body>
	
</body>
</html>