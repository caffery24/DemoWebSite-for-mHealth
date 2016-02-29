<?php

  mysql_connect('localhost','mhealth','mhealth');

  mysql_select_db('mhealthplay');

  $sql="SELECT * FROM SpeedOfEating_test1";

  $records=mysql_query($sql);

?>


<html>
<head>
<meta http-equiv="refresh" content="2,url=showdata.php" />
  <title>data</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="whole">
<h1>Welcome to Hand-To-Month Gestrue Detection</h1>
<hr>
<div id="leftpic">
<img src="burger.jpg" class="im">
<img src="noodle.jpg" class="im">
<img src="soup.jpeg" class="im">
<img src="steak.jpg" class="im">
<a href="result.html"><h3>show result</h3></a>
</div>
<div id="databox">
<h3 align="center">The data is collecting:...refresh 2s</h3>
<table width="800" border="1" cellspacing="1">
<thead>
<tr>
<th>id</th>
<th>AcceX </th>
<th>AcceY</th>
<th>AcceZ</th>
<th>GyroX</th>
<th>GyroY</th>
<th>GyroZ</th>
</tr>
</thead>
<tbody>
<?php
  while($acce=mysql_fetch_assoc($records)){
       echo "<tr>";
       echo "<td>".$acce['id']." </td>";
       echo "<td>".$acce['AccX']." </td>";
       echo "<td>".$acce['AccY']." </td>";
       echo "<td>".$acce['AccZ']." </td>";
       echo "<td>".$acce['GyroX']." </td>";
       echo "<td>".$acce['GyroY']." </td>";
       echo "<td>".$acce['GyroZ']." </td>";
       echo "</tr>";
  }
?>
</tbody>
</table>
</div>
</div>
</body>
</html>

