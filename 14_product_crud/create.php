<?php 

//PDO to establish connection to database, add one more s and you will see an error 
$pdo = new PDO('mysql:host=localhost; port=3306; dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//var_dump($products);

$title = $_POST['title']; //test
$description = $_POST['description'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s'); 
$statement = $pdo->prepare("INSERT INTO products (title, image,description,price,create_date)

VALUES(:title, :image, :description, :price, :date)

");

echo $_SERVER['REQUEST_METHOD']; 
if($_SERVER['REQUEST_METHOD']==='POST'){


$statement ->bindValue(':title', $title);
$statement ->bindValue(':image', '');
$statement ->bindValue(':description', $description);
$statement ->bindValue(':price', $price);
$statement ->bindValue(':date', $date);
$statement ->execute();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel = "app.css">
    <title>Products CRUD</title>
  </head>
  <body>
    <h1>Create new Product</h1>
    <form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Product Image</label><br>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label>Product title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $title ?>"/>
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea class="form-control" name="description"><?php echo $description ?></textarea>
    </div>
    <div class="form-group">
        <label>Product price</label>
        <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>"/>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
      </body>

</html>

