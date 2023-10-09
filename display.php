<?php 
session_start();
include("connection.php");
$id=$_SESSION['id'];
$sql="SELECT * FROM form WHERE user_id='$id'";
$data=mysqli_query($conn,$sql);

?>

<table border="1" align="center">
	<tr>
		<th>Sr no.</th>
		<th>Name</th>
		<th>Address</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Gen</th>
		<th>Degree</th>
		<th>Language</th>
		<th>Password</th>
	</tr>
	<?php 
	$i=1;
while($result=mysqli_fetch_assoc($data))
{

	?>
	<tr>
		<td><?php echo $i;$i++ ?></td>
		<td><?php echo $result["Name"] ?></td>
		<td><?php echo $result["Address"] ?></td>
		<td><?php echo $result["Email"] ?></td>
		<td><?php echo $result["Phone"] ?></td>
		<td><?php echo $result["Gen"] ?></td>
		<td><?php echo $result["Degree"] ?></td>
		<td><?php echo $result["language"] ?></td>
		<td><?php echo $result["Password"] ?></td>
	</tr>
	

	<?php 
}
?>
</table>



