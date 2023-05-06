<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$book_name = mysqli_real_escape_string($mysqli, $_POST['book_name']);
	$isbn_no = mysqli_real_escape_string($mysqli, $_POST['isbn_no']);
	$category_id = mysqli_real_escape_string($mysqli, $_POST['category_id']);
	$author_id = mysqli_real_escape_string($mysqli, $_POST['author_id']);
	$publication_id = mysqli_real_escape_string($mysqli, $_POST['publication_id']);
	$publication_date = mysqli_real_escape_string($mysqli, $_POST['publication_date']);
	$publication_language = mysqli_real_escape_string($mysqli, $_POST['publication_language']);
	$book_pages = mysqli_real_escape_string($mysqli, $_POST['book_pages']);
	$book_price = mysqli_real_escape_string($mysqli, $_POST['book_price']);
			
	$result = mysqli_query($mysqli, "INSERT INTO books(book_name,isbn_no,category_id,author_id,publication_id,publication_date,publication_language,book_pages,book_price) 
	VALUES('$book_name','$isbn_no','$category_id','$author_id','$publication_id','$publication_date','$publication_language','$book_pages','$book_price')");

	if($result) {
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	} else {
		echo "<font color='red'>Data not added.";
	}
}
?>
