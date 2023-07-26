<?php
//PDO to establish connection to database, add one more s and you will see an error 
$pdo = new PDO('mysql:host=localhost; port=3306; dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT*FROM products ORDER BY create_date DESC'); 
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($products);

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
    <h1>Products CRUD</h1>

    <p>
      <a href="create.php" class= "btn btn-success">Create Product</a>
    </p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $i=> $product):?>
      <tr>
      <th scope="row"><?php echo $i +1?></th>
      <td></td>
      <td><?php echo $product['title'] ?></td>
      <td><?php echo $product['price'] ?></td>
      <td><?php echo $product['create_date'] ?></td>
      <td><button type="button" class="btn btn-outline-primary btn-sm">Edit</button></td>
      <td><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  
   <!--removing curly braces to put endforeach-->
   <?php endforeach; ?>
  </tbody>
</table>

  </body>

</html>
