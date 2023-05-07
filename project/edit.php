<?php

include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$book_name = mysqli_real_escape_string($mysqli, $_POST['book_name']);
	$isbn_no = mysqli_real_escape_string($mysqli, $_POST['isbn_no']);
	$category_id = mysqli_real_escape_string($mysqli, $_POST['category_id']);
	$author_id = mysqli_real_escape_string($mysqli, $_POST['author_id']);
	$publication_id = mysqli_real_escape_string($mysqli, $_POST['publication_id']);
	$publication_date = mysqli_real_escape_string($mysqli, $_POST['publication_date']);
	$publication_language = mysqli_real_escape_string($mysqli, $_POST['publication_language']);
	$book_pages = mysqli_real_escape_string($mysqli, $_POST['book_pages']);
	$book_price = mysqli_real_escape_string($mysqli, $_POST['book_price']);

	$result = mysqli_query($mysqli, "UPDATE books SET book_name='$book_name',isbn_no='$isbn_no',category_id='$category_id', author_id='$author_id',publication_id='$publication_id',publication_date='$publication_date',publication_language='$publication_language',book_pages='$book_pages',book_price='$book_price' WHERE id=$id");

	header("Location: index.php");

}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>

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

	<div id="form" class="p-3 border shadow mt-3 offset-3 col-6">
                <h2 class="text-success ">Book Details</h2>
                <form name="form1" method="post" action="edit.php">
                    <div class="form-group">
                        <label>Book Name</label>
                        <input type="text" class="form-control" name="book_name" required placeholder="Enter Book Name">
                    </div>
                    <div class="form-group">
                        <label>Book ISBN No</label>
                        <input type="text" class="form-control" name="isbn_no" required placeholder="Enter Book ISBN No">
                    </div>
                    <div class="form-group">
                        <label>Book Catergory Id</label>
                        <input type="text" class="form-control" name="category_id" required placeholder="Enter Catergory Id">
                    </div>
                    <div class="form-group">
                        <label>Book Author Id</label>
                        <input type="text" class="form-control" name="author_id" required placeholder="Enter Book Author Id">
                    </div>
                    <div class="form-group">
                        <label>Book Publication Id</label>
                        <input type="text" class="form-control" name="publication_id" required placeholder="Enter Book Publication Id">
                    </div>
                    <div class="form-group">
                        <label>Book Publication Date</label>
                        <input type="date" class="form-control" name="publication_date" required >
                    </div>
                    <div class="form-group">
                        <label>Book Publication Language</label>
                        <input type="text" class="form-control" name="publication_language" required placeholder="Enter Book Publication Language">
                    </div>
                    <div class="form-group">
                        <label>Book No of Pages</label>
                        <input type="number" class="form-control" name="book_pages" required placeholder="Enter Book No of pages">
                    </div>
                    <div class="form-group">
                        <label>Book Price</label>
                        <input type="number" class="form-control" name="book_price" required placeholder="Enter Book Pricerequired">
                    </div>
  					
  					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <button type="submit" name="update" value="Update" class="btn btn-success">Update Book</button>
                </form>
            </div>




	<br>
	</div>

</body>
</html>
