<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
  </head>
<body>
    <?php include 'country.php'?>

  <main>
  <div class="contact">
          <h1>Contact US</h1>
      </div>
    <form action="#" method="POST">

      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control  transparent-input" id="name">
      </div>
      <div class="form-group">
        <label for="lastname">lastName:</label>
        <input type="text" class="form-control  transparent-input" id="lastname">
      </div>
      <div class="form-group">
        <label for="email">email :</label>
        <input type="email" class="form-control  transparent-input" id="lastname">
      </div>
      <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control  transparent-input" placeholder="Enter email" id="email">
      </div>
      <div class="form-group">
        <select class="form-control form-control-sm" name="country" id="ctry">
        <?php
            foreach($country as $key => $value)
          {
              echo '<option value="'.$key.'">'.$value.'</option>';
            }
        ?>
        </select>
      </div>
      <div class="form-group shadow-textarea  transparent-input">
        <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..."></textarea>
      </div>
    </form>  
</main>
</body>
</html>