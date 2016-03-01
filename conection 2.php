
<?php
$connect=mysqli_connect('127.0.0.1','root','root','logsec');
$rows=("select * from zapimoveis  LIMIT 10");
if(mysqli_connect_errno($connect))
{
 echo 'Failed to connect';
}
else {
	echo "Sucesso";
}

echo "<table border='1'>";
echo "<tr><th>Username</th></tr>";
while(list($username)=$rows->fetch_row()){
  echo "<tr><td>$username</td></tr>";
}
echo "</table>";
 
?>



