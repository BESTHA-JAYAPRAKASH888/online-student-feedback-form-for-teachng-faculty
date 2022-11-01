<?php 
$q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_feedback.php?id='+id;
     }
}
</script>
<style>
.five {
	color:#FFFFFF;
	background:green;
}
.four {
	color:#FFFFFF;
	background:brown;
}	
.three {
	color:#FFFFFF;
	background:blue;
}	
.two {
	color:#FFFFFF;
	background:black;
}	
.one {
	color:#FFFFFF;
	background:red;
}		
</style>

<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Feedback</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		<!--<th>Student</th>-->
		<!--<th>Teacher</th>-->
		<th>Quest1</th>
		<th>Quest2</th>
		<th>Quest3</th>
		<th>Quest4</th>
		<th>Quest5</th>
		<th>Quest6</th>
		<th>Quest7</th>
		<th>Quest8</th>
		<th>Quest9</th>
		<th>Quest10</th>
		<th>Quest11</th>
		<th>Quest12</th>
		<th>Quest13</th>
		<th>Quest14</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
		$first_ques = 0;
		$second_ques = 0;
		$third_ques = 0;
		$four_ques = 0;
		$five_ques = 0;
		$six_ques = 0;
		$seven_ques = 0;
		$eight_ques = 0;
		$nine_ques = 0;
		$ten_ques = 0;
		$eleven_ques = 0;
		$twelve_ques = 0;
		while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			//echo "<td>".$row[1]."</td>";
			//echo "<td>".$row[2]."</td>";
			
				if($row[3]==5) {
					$first_ques += $row[3];
					echo "<td class='five'>".$row[3]."</td>";
				}
				else if($row[3]==4) {
					$first_ques += $row[3];
					echo "<td class='four'>".$row[3]."</td>";
				}
				else if($row[3]==3) {
					$first_ques += $row[3];
					echo "<td class='three'>".$row[3]."</td>";
				}
				else if($row[3]==2) {
					$first_ques += $row[3];
					echo "<td class='two'>".$row[3]."</td>";
				}
				else if($row[3]==1) {
					$first_ques += $row[3];
					echo "<td class='one'>".$row[3]."</td>";
				}
				else {

				}
				if($row[4]==5) {
					$second_ques += $row[4];
					echo "<td class='five'>".$row[4]."</td>";
				}
				else if($row[4]==4) {
					$second_ques += $row[4];
					echo "<td class='four'>".$row[4]."</td>";
				}
				else if($row[4]==3) {
					$second_ques += $row[4];
					echo "<td class='three'>".$row[4]."</td>";
				}
				else if($row[4]==2) {
					$second_ques += $row[4];
					echo "<td class='two'>".$row[4]."</td>";
				}
				else if($row[4]==1) {
					$second_ques += $row[4];
					echo "<td class='one'>".$row[4]."</td>";
				}
				else {

				}
				if($row[5]==5) {
					$third_ques += $row[5];
					echo "<td class='five'>".$row[5]."</td>";
				}
				else if($row[5]==4) {
					$third_ques += $row[5];
					echo "<td class='four'>".$row[5]."</td>";
				}
				else if($row[5]==3) {
					$third_ques += $row[5];
					echo "<td class='three'>".$row[5]."</td>";
				}
				else if($row[5]==2) {
					$third_ques += $row[5];
					echo "<td class='two'>".$row[5]."</td>";
				}
				else if($row[5]==1) {
					$third_ques += $row[5];
					echo "<td class='one'>".$row[5]."</td>";
				} 
				else {

				}
				if($row[6]==5) {
					$four_ques += $row[6];
					echo "<td class='five'>".$row[6]."</td>";
				}
				else if($row[6]==4) {
					$four_ques += $row[6];
					echo "<td class='four'>".$row[6]."</td>";
				}
				else if($row[6]==3) {
					$four_ques += $row[6];
					echo "<td class='three'>".$row[6]."</td>";
				}
				else if($row[6]==2) {
					$four_ques += $row[6];
					echo "<td class='two'>".$row[6]."</td>";
				}
				else if($row[6]==1) {
					$four_ques += $row[6];
					echo "<td class='one'>".$row[6]."</td>";
				}
				else {

				}
				if($row[7]==5) {
					$five_ques += $row[7];
					echo "<td class='five'>".$row[7]."</td>";
				}
				else if($row[7]==4) {
					$five_ques += $row[7];
					echo "<td class='four'>".$row[7]."</td>";
				}
				else if($row[7]==3) {
					$five_ques += $row[7];
					echo "<td class='three'>".$row[7]."</td>";
				}
				else if($row[7]==2) {
					$five_ques += $row[7];
					echo "<td class='two'>".$row[7]."</td>";
				}
				else if($row[7]==1) {
					$five_ques += $row[7];
					echo "<td class='one'>".$row[7]."</td>";
				}
				else {

				}
				if($row[8]==5) {
					$six_ques += $row[8];
					echo "<td class='five'>".$row[8]."</td>";
				}
				else if($row[8]==4) {
					$six_ques += $row[8];
					echo "<td class='four'>".$row[8]."</td>";
				}
				else if($row[8]==3) {
					$six_ques += $row[8];
					echo "<td class='three'>".$row[8]."</td>";
				}
				else if($row[8]==2) {
					$six_ques += $row[8];
					echo "<td class='two'>".$row[8]."</td>";
				}
				else if($row[8]==1) {
					$six_ques += $row[8];
					echo "<td class='one'>".$row[8]."</td>";
				}
				else {
					
				}
				if($row[9]==5) {
					$seven_ques += $row[9];
					echo "<td class='five'>".$row[9]."</td>";
				}
				else if($row[9]==4) {
					$seven_ques += $row[9];
					echo "<td class='four'>".$row[9]."</td>";
				}
				else if($row[9]==3) {
					$seven_ques += $row[9];
					echo "<td class='three'>".$row[9]."</td>";
				}
				else if($row[9]==2) {
					$seven_ques += $row[9];
					echo "<td class='two'>".$row[9]."</td>";
				}
				else if($row[9]==1) {
					$seven_ques += $row[9];
					echo "<td class='one'>".$row[9]."</td>";
				}
				else {
					
				}
				if($row[10]==5) {
					$eight_ques += $row[10];
					echo "<td class='five'>".$row[10]."</td>";
				}
				else if($row[10]==4) {
					$eight_ques += $row[10];
					echo "<td class='four'>".$row[10]."</td>";
				}
				else if($row[10]==3) {
					$eight_ques += $row[10];
					echo "<td class='three'>".$row[10]."</td>";
				}
				else if($row[10]==2) {
					$eight_ques += $row[10];
					echo "<td class='two'>".$row[10]."</td>";
				}
				else if($row[10]==1) {
					$eight_ques += $row[10];
					echo "<td class='one'>".$row[10]."</td>";
				}
				else {
					
				}
				if($row[11]==5) {
					$nine_ques += $row[11];
					echo "<td class='five'>".$row[11]."</td>";
				}
				else if($row[11]==4) {
					$nine_ques += $row[11];
					echo "<td class='four'>".$row[11]."</td>";
				}
				else if($row[11]==3) {
					$nine_ques += $row[11];
					echo "<td class='three'>".$row[11]."</td>";
				}
				else if($row[11]==2) {
					$nine_ques += $row[11];
					echo "<td class='two'>".$row[11]."</td>";
				}
				else if($row[11]==1) {
					$nine_ques += $row[11];
					echo "<td class='one'>".$row[11]."</td>";
				}
				else {

				}
				if($row[12]==5) {
					$ten_ques += $row[12];
					echo "<td class='five'>".$row[12]."</td>";
				}
				else if($row[12]==4) {
					$ten_ques += $row[12];
					echo "<td class='four'>".$row[12]."</td>";
				}
				else if($row[12]==3) {
					$ten_ques += $row[12];
					echo "<td class='three'>".$row[12]."</td>";
				}
				else if($row[12]==2) {
					$ten_ques += $row[12];
					echo "<td class='two'>".$row[12]."</td>";
				}
				else if($row[12]==1) {
					$ten_ques += $row[12];
					echo "<td class='one'>".$row[12]."</td>";
				}
				else {
					
				}
				if($row[13]==5) {
					$eleven_ques += $row[13];
					echo "<td class='five'>".$row[13]."</td>";
				}
				else if($row[13]==4) {
					$eleven_ques += $row[13];
					echo "<td class='four'>".$row[13]."</td>";
				}
				else if($row[13]==3) {
					$eleven_ques += $row[13];
					echo "<td class='three'>".$row[13]."</td>";
				}
				else if($row[13]==2) {
					$eleven_ques += $row[13];
					echo "<td class='two'>".$row[13]."</td>";
				}
				else if($row[13]==1) {
					$eleven_ques += $row[13];
					echo "<td class='one'>".$row[13]."</td>";
				}
				else {
					
				}
				if($row[14]==5) {
					$twelve_ques += $row[14];
					echo "<td class='five'>".$row[14]."</td>";
				}
				else if($row[14]==4) {
					$twelve_ques += $row[14];
					echo "<td class='four'>".$row[14]."</td>";
				}
				else if($row[14]==3) {
					$twelve_ques += $row[14];
					echo "<td class='three'>".$row[14]."</td>";
				}
				else if($row[14]==2) {
					$twelve_ques += $row[14];
					echo "<td class='two'>".$row[14]."</td>";
				}
				else if($row[14]==1) {
					$twelve_ques += $row[14];
					echo "<td class='one'>".$row[14]."</td>";
				}
				else {
					
				}
				
				

			//echo "<td>".$row[13]."</td>";
			//echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
	
		
</table>
</div>
</div>

<?php 
}
?>



