<?php
function pg_connection_string_from_database_url(){
				extract(parse_url($_ENV["postgres://jitiarrkuzxgkz:33640b35808455ae6fba89cfee97cffb217b735b3d9c14d624cf3e7d4665d298@ec2-18-215-111-67.compute-1.amazonaws.com:5432/d567ufs33npl7d"]));
				return "user=jitiarrkuzxgkz password=33640b35808455ae6fba89cfee97cffb217b735b3d9c14d624cf3e7d4665d298 host=ec2-18-215-111-67.compute-1.amazonaws.com dbname=d567ufs33npl7d.substr($path,1);
			}
			$db = pg_connect(pg_connection_string_from_database_url());
			if(!$db){
				echo "Eror : Unable to open database\n";
			}else{
				echo "Opened database successfully\n";
			}
  $sql = "CREATE TABLE student (mssv CHAR(10) PRIMARY KEY NOT NULL, hoten CHAR(50))";
  $ret = pg_query($db,$sql);
  if(!$ret){
     echo pg_last_error($db);
  }else {
      echo "Table create student successfully\n";
  }
  pg_close($db);
?>