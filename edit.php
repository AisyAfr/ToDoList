<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo App</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- end bootstrap -->

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <!-- end font awesome -->
  </head>

  <?php
  include('config.php');
  $ID = $_GET['ID'];
  $getdata = mysqli_query($connect, "SELECT * FROM list WHERE Id='$ID'");
  $row = mysqli_fetch_array($getdata);
  ?>

  <body class= "bg-dark">
    <div class="container">
        <h1 class ="my-4 text-warning"><i class="fa-solid fa-list-ul"></i><span class= "text-primary"> Edit</span> ToDoList</h1>
        <div class="card my-5 shadow-sm bg-warning">
  <div class="card-body">
  <form class="d-flex" action="editdata.php" method="post">
      <input class="form-control  me-2" name="Data" value="<?php echo $row['Data'] ?>" type="text" placeholder="Apa yang mau kamu lakukan hari inii?">
      <button class="btn btn-dark" type="submit"><i class="fa-solid fa-plus"></i></button>
      <input type="hidden" name="Id" value = "<?php echo $row['Id'] ?>">
    </form>
  </div>
</div>
</div>
</body>