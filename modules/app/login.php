<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>LogIn</title>
</head>
<body class="justify-content-center">

    <?php require '../header/header.php'; ?>

    <h1>LogIn</h1>
     <span>or <a href="signup.php">SignUp</a></span>
    <form action="home.php" method="post" onsubmit="validateForm()">

        <div class="form-floating mb-3 mt-3 mx-auto w-25">
            <input type="email" name="login_email" class="form-control" placeholder="name@example.com" id="input-email">
            <label class="form-label" for="input-email">Email Address</label>
        </div>
        <div class="form-floating mb-3 mt-3 mx-auto w-25">
            <input type="password" name="password" class="form-control" placeholder="password123" id="input-password">
            <label class="form-label" for="input-password">Password</label>
        </div>

        <input type="submit" name="Send" class="btn btn-primary w-25 mt-3" id="bt">
        
    </form>

    <script type="text/javascript" src="../js/main.js"></script>

</body>
</html>

