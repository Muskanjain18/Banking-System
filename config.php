<?php
	// <--------------- CONNECTING TO DATABASE ------------------------>
	$server = "localhost";
	$user= "root";
	$password = "";
	$database = "bank";

	$conn = mysqli_connect($server,$user,$password,$database);

	if(!$conn){
		die("Could not connect to the database due to the following error - ".mysqli_connect_error());
	}


	// <-------------------CREATING TRANSCATION TABLE --------------------------->
	
$table1 = "CREATE TABLE `transaction` (
	`sno` INT(3) NOT NULL AUTO_INCREMENT,
	`sender` VARCHAR(20) NOT NULL,
	`receiver` VARCHAR(20) NOT NULL,
	`balance` INT(8) NOT NULL,
	`datetime` datetime NOT NULL DEFAULT current_timestamp(),
	PRIMARY KEY (`sno`))";

	$result = mysqli_query($conn,$table1);


	// <-------------------CREATING TABLE FOR USERS DETAILS --------------------------->
	  
  $table2 = "CREATE TABLE `users` (
	`id` INT(3) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(20) NOT NULL,
	`email` VARCHAR(30) NOT NULL,
	`balance` INT(8) NOT NULL,
	PRIMARY KEY (`id`))";

	$result1= mysqli_query($conn,$table2);

	// <------------------- INSERTING DATA INTO USER TABLE --------------------------->
  
  $insert = "INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
  (1, 'Shourya', 'shourya@gmail.com', 50000),
  (2, 'Shivi', 'shivi@gmail.com', 30000),
  (3, 'Ridhika', 'ridhika@gmail.com', 40000),
  (4, 'Sam', 'sam@gmail.com', 50000),
  (5, 'Mihir', 'mihir@gmail.com', 40000),
  (6, 'Tanya', 'tanya@gmail.com', 30000),
  (7, 'Naincy', 'naincy@gmail.com', 50000),
  (8, 'Ritik', 'ritik@gmail.com', 40000),
  (9, 'Anushka', 'anushka@gmail.com', 30000),
  (10, 'Swati', 'swati@gmail.com', 50000)";
  
  $result2 = mysqli_query($conn,$insert);

?>