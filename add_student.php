<!DOCTYPE HTML>
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>
		<h2>PHP Form Valication Example</h2>
		<form method="post">
			 <input type="text" name="mssv" value="MSSV"><br>
			 <input type="text" name="hoten" value="Ho Ten"><br>
			 <input type="submit" name="submit" value="Submit">
		</form>
		<?php
			$username=$_POST["mssv"];
			$password=$_POST["hoten"];
			function pg_connection_string_from_database_url(){
				extract(parse_url($_ENV["DATABASE_URL"]));
				return "user=$user password=$pass host=$host dbname=".substr($path,1);
			}
			$db = pg_connect(pg_connection_string_from_database_url());
			if(!$db){
				echo "Eror : Unable to open database\n";
			}else{
				echo "Opened database successfully\n";
			}
			$sql="INSERT INTO student (mssv, hoten) VALUES ('$masv','$hoten')";
			$ret = pg_query($db,$sql);
			if(!$ret){
				echo pg_last_error($db);
			}else{
				echo "Insert successfully\n";
				echo "$sql";
			
			}
			pg_close($db);?>
	</body>
</html>