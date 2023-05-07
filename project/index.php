<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM books ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Homepage</title>

	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



</head>

<body>
<div class="container mt-4">
	<div class="row bg-success p-3 text-white">
            <h1>Books App</h1>
            <h2></h2>
        </div>

        <br>
	<table class="row mt-5 table table-hover" width='80%' border=0 >

	<tr bgcolor='#383c44'>
		<td><b style="color: white">Book Name</b></td>
		<td><b style="color: white">ISBN No</b></td>
		<td><b style="color: white">Category ID</b></td>
		<td><b style="color: white">Author ID</b></td>
		<td><b style="color: white">Publication ID</b></td>
		<td><b style="color: white">Publication Date</b></td>
		<td><b style="color: white">Publication Language</b></td>
		<td><b style="color: white">Book Pages</b></td>
		<td><b style="color: white">Book Price</b></td>
		<td><b style="color: white">Operations</b></td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['book_name']."</td>";
		echo "<td>".$res['isbn_no']."</td>";
		echo "<td>".$res['category_id']."</td>";	
		echo "<td>".$res['author_id']."</td>";
		echo "<td>".$res['publication_id']."</td>";
		echo "<td>".$res['publication_date']."</td>";	
		echo "<td>".$res['publication_language']."</td>";
		echo "<td>".$res['book_pages']."</td>";
		echo "<td>".$res['book_price']."</td>";	
		echo "<td> <a class=\"btn btn-success\" href=\"edit.php?id=$res[id]\">Edit</a> <a class=\"btn btn-delete btn-danger\" href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	<br>
	<a href="add.html" class="btn btn-success mt-3">Add Book</button>
		<div>
</body>
</html>

<style type="text/css">
	table tr td
	{
		padding: 15px;
	}
</style>
