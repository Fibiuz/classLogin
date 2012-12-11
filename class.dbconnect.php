<?php
 class dbConnect  
 {
   private $db_host = DB_HOST;
	 private $db_user = DB_USERNAME;
	 private $db_password = DB_PASSWORD;
	 private $db_name = DB_DATABASE;
	 private $connessione; 
	 
	 function __construct()
	 {
		 $this->connection = mysql_connect($this->db_host, $this->db_user, $this->db_password) or die("unable to connect to database");

		 $db_select=mysql_select_db($this->db_name,$this->connection);

		 if($db_select===FALSE)
		 {
			 die("Selezione : ".mysql_error());
		 }
	 } 
 }
?>