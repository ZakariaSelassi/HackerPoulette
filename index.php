<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta name="description" content="formulaire " />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>
    <?php include 'country.php'?>
    <?php include 'verification.php'?>
    <main>
        <div class="contact" aria-labelledby="title">
            <h1 id="title">Contact US</h1>
            <img src="assets/img/logo.png" alt="pirate logo">
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control  transparent-input" name="name" id="name" aria-labelledby="name">
                <input type="text" name="honey" id="honeyPot">
                <p class="error">
                    <?php echo $nameError?>
                </p>
            </div>
            <div class="form-group">
                <label for="lastname">lastName:</label>
                <input type="text" class="form-control  transparent-input" name="lastName" id="lastname" aria-labelledby="lastname">
                <p class="error">
                    <?php echo $lastNameError?>
                </p>
            </div>
            <div>
            <div class="form-check-inline">
                <label for="gender">Gender :</label>
                        <input type="radio" class="form-check-input " name="gender" value="Male"> MALE
                        <input type="radio" class="form-check-input" name="gender" value="female"> FEMALE
                    </label>
                    <p class="error">
                        <?php echo $genderError?>
                    </p>
                </div>
            </div>
            <div class="form-group">
                <label for="email">email :</label>
                 <input type="email" class="form-control  transparent-input" name="email" id="email" aria-labelledby="email">
                    <p class="error">
                        <?php echo $emailError?>
                    </p>
            </div>
            <div class="form-group">
                <select class="form-control form-control-sm" name="country" id="ctry" aria-labelledby="ctry">
                <?php
                    foreach($country as $key => $value)
                {
                    echo '<option value="'.$key.'">'.$value.'</option>';
                    }
                ?>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control form-control-sm" name="subject" id="subject" aria-labelledby="subject">
                    <option>Question</option>
                    <option>complaint</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form-group shadow-textarea  ">
                <textarea class="form-control z-depth-1 transparent-input" id="textArea" rows="3" placeholder="Write something here..." name="comment" aria-labelledby="textArea"></textarea>
                <p class="error"></p>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" id="send" aria-labelledby="send">Submit</button>
        </form>
    </main>

</body>

</html>