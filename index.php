<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE

  $conn = mysqli_connect('localhost', 'root', null,
    'project01');

  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "SELECT * FROM supers");
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include_once('_header.php') ?>

<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<ul class="main-nav">
  <li>
    <a href="index.php">Home</a>
  </li>
  <li>
    <a href="new.php">Add user</a>
  </li>
</ul>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <header class = "rounded-3 my-5 bg-dark p-5">
      <div class="text-lg-center">
        <h1 class= "text-white">THE MIGHTIEST OF THE UNIVERSE</h1>
      </div>
      </header>
      
    </div>
  </body>
</html>

<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->


<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->
<table class="table table-sm table-dark">

    <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date of Birth</td>
            <td>Alias</td>
            <td>Active</td>
            <td>Hero</td>
            <td>Actions</td>
        </tr>
    </thead>

    <tbody>
    <?php foreach($rows as $row): ?>
      <tr>
        <td><?= $row["first_name"] ?></td>
        <td><?= $row["last_name"] ?></td>
        <td><?= $row["date_of_birth"] ?></td>
        <td><?= $row["alias"] ?></td>
        <td><?= $row["active"] ?></td>
        <td><?= $row["hero"] ?></td>
        <td>
            <a href="edit.php?id=<?= $row["id"] ?>">edit</a>
            |
            <a href="delete.php?id=<?= $row["id"] ?>" onClick="return confirm('Are you sure?')">delete</a>
        </td>
      </tr>
    <?php endforeach ?>
    </tbody>

</table>


<!-- Step 7: (2 points) Include your footer here -->
<?php include_once('_footer.php') ?>


<!-- TOTAL POINTS POSSIBLE: 34 -->