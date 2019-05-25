
<?php include('query.php') ?>

!DOCTYPE html>
<head>
	<title>Home | Bootcamp</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
<body style="background-color:grey;">
<section class="d-flex justify-content-center" >
	<div class="col-lg-6 " style="margin:40px 250px;background-color:white;">
		<div class="col-lg-12 d-flex justify-content-center" style="padding:25px 0px;">
			
			   <?php
					if(isset($_POST['submit']))
				{
					$sql = "INSERT INTO users (names) VALUES ('".$_POST["names"]."')";
					$result = mysqli_query($conn,$sql);
				}
				?>
			<form action ="body.php" method="post">
				<input type="text" name="names" class="form-group form-control" placeholder="Nama">
				<input type="submit" name="submit" value="Send" class="btn btn-success">
				
			</form>
			
		</div>
		<div class="col-lg-12" style="padding:25px 0px;">
			<table class="table table-bordered">
				<th>Skill</th>
				<th>Nama</th>
				<th></th>
				
				<tr>
					<td>
					<?php
					$sql = "SELECT users.id, skills.user_id FROM users names, skills user_id WHERE users.id = skills.user_id";
					if ($result = $conn->query($sql)) {
						/* fetch associative array */
						while ($row = $result->fetch_assoc()) {
							$id = $row["id"];
								 }						
						/* free result set */
						$result->free();
						}
					
					?>
					</td> 
					
					
					<td>
					<?php
						$sql = "SELECT users.id, skills.user_id FROM users names, skills user_id WHERE users.id = skills.user_id";
						if ($result = $conn->query($sql)) {
 
						/* fetch associative array */
						while ($row = $result->fetch_assoc()) {
							$names = $row["names"];
								 }
						
						/* free result set */
						$result->free();
						}
					
					?>
					</td>
						
					<td rowspan="2">
						<?php
						if(isset($_POST['masuk']))
						{
						$sql =  "INSERT INTO skills (namess) VALUES ('".$_POST["namess"]."')";
						$result = mysqli_query($conn,$sql);
						}
						?>
						<form class = "d-flex justify-content-center"	 action ="body.php" method="post">
							<input type="text" name="namess" placeholder="Skill" class="form-control">
							<input type="submit" class="btn btn-success " value="Send" name="masuk">
						</form>
						
					</td> 
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
	</div>
</section>

</body>
</html>