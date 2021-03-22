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
    <?php include 'form.php'?>

<main>
    <form action="#" method="POST">
      <div class="contactForm">
        <div>
          <label for="name">Name : </label>
          <input type="text" name="name">
        </div>
        <div>
          <label for="lastName">lastName :</label>
          <input type="text" name="lastname">
        </div>
        <div class="genders">
          <label for="gender">Gender : </label>
          <div class="choices">
          Male<input type="radio" name="gender">
          Femal<input type="radio" name="gender">
          </div>
         
        </div>
        <div class="subjects">
          <label for="subject">Subject :</label>
          <div class="choices">
          Eating <input type="radio" name="subject">
         
          School<input type="radio" name="subject">
         
          other<input type="text" name="other">
          </div>

        </div>
        <div>
          <label for="email">Email address</label>
          <input type="email" id="email" placeholder="name@example.com">
        </div>
        <div>
          <label for="country-select"> Country </label>
          <select name="country" id="country-select">
          <option value="">Choose a country</option>
          <?php
            foreach($country as $key => $value)
          {
              echo '<option value="'.$key.'">'.$value.'</option>';
            }
          ?>
          </select>
        </div>
        <label>Your comments</label>
        <textarea name="message" id="message" cols="35" rows="6"></textarea>
      </div>  
  </form>  
</main>
   
</body>
</html>