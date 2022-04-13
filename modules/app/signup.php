<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Signup</title>
</head>
<body>

    <?php require '../../header/header.php'; ?>
    
    <h2>SignUp</h2>
    <span>or <a href="login.php">LogIn</a></span>

    <form action="../save.php" method="post">
        <div class="form-floating mb-3 mx-auto w-25">
            <input type="email" name="email" class="form-control" placeholder="name@example.com" id="input-email">
             <label class="form-label" for="input-email">Enter your email</label>
        </div>

        <div class="form-floating mb-3 mx-auto w-25">
            <input type="password" name="password" class="form-control" placeholder="enter your password" id="input-password">
             <label class="form-label" for="input-password">Enter your password</label>
        </div>
        <div class="form-floating mb-3 mx-auto w-25">
            <input type="password" name="password" class="form-control" placeholder="confirm your password" id="input-password">
              <label class="form-label" for="input-password">Confirm your password</label>
        </div>

        <input type="submit" name="Register" class="btn btn-success w-25" >


    </form>


</body>
</html>



