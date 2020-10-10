<?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("library", $connection);
if(isset($_POST['submit']))
$book_name = $_POST['Book Name'];
$author_name = $_POST['author name'];
$description = $_POST['description'];
$picture = $_POST['picture'];
if($name !=''||$email !=''){
	
CREATE TABLE library(
book_name varchar(255) NOT NULL,
author_name varchar(255) NOT NULL,
description varchar(255) NOT NULL,
picture varchar(255) NOT NULL,
)

$query = mysql_query("insert into library(book_name, author_name, description, picture) values ('$name', '$name', '$text', '$image')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>