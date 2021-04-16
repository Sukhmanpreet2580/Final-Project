<!-- Step 1: (2 points) Include your header here -->
<?php include_once('_header.php') ?>

<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<ul class="main-nav">
  <li>
    <a href="index.php">Home</a>
  </li>
</ul>

<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>New SuperHero</title>
  </head>

  <body>
    
    
    <div class="container">
      <header class="jumbotron my-5">
        <h1 class="display-4">Create your own SuperHero</h1>
        <hr class="my-4">
      </header>

      <section class="mb-5">
        <form action="insert.php" method="post" novalidate>
          
            
              <div class="form-group">
                <label for="first_name">First Name:</label>
                <input class="form-control" type="text" name="first_name" required placeholder="Bruce" value="<?= $form_values['first_name'] ?? null ?>">
              </div>
            
            
              <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input class="form-control" type="text" name="last_name" required placeholder="Banner" value="<?= $form_values['last_name'] ?? null ?>">
              </div>
           
          
          
              <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input class="form-control" type="date" name="date_of_birth" placeholder="21/01/2001" required value="<?= $form_values['date_of_birth'] ?? null ?>">
              </div>
           

            
              <div class="form-group">
                <label for="alias">Alias:</label>
                <input class="form-control" type="text" name="alias" placeholder="Hulk" required value="<?= $form_values['alias'] ?? null ?>">
              </div>
            

            
              <div class="form-group">
                <label for="Active">Active:</label>
                <input class="form-control" type="text" name="active" placeholder="True" required value="<?= $form_values['active'] ?? null ?>">
              </div>
          

            
              <div class="form-group">
                <label for="hero">Hero:</label>
                <input class="form-control" type="text" name="hero" placeholder="True" required value="<?= $form_values['hero'] ?? null ?>">
              </div>
          


          <button class="btn btn-primary" type="submit">Add</button>
        </form>
      </section>
    </div>


  </body>
</html>


<!-- Step 5: (2 points) Include your footer here -->
<?php include_once('_footer.php') ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->