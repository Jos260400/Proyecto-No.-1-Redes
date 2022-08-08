<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> 
    <title>Chat App - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="w-400 p-5 shadow rounded">


        <form method="post" action="app/http/signup.php">
            <div class="d-flex justify-content-center align-items-center flex-column">

            <img src="img/logo.png" class="w-25">
            <h3 class="display-4 fs-1 text-center">
                Sign Up

            </h3>
            </div>



            <div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>



        <div class="mb-3">
        <label class="form-label">
            Name</label>
        <input type="text" name="name" class="form-control">

        </div>

        <div class="mb-3">
        <label class="form-label">
            User name</label>
        <input type="text" name="username" class="form-control" name="password">

        </div>


        <div class="mb-3">
        <label class="form-label">
            Password</label>
        <input type="password" class="form-control">

        </div>

        <div class="mb-3">
        <label class="form-label">
            Profile Picture</label>
        <input type="file" class="form-control" name="p_p">

        </div>

        <button type="submit" 
                class="btn btn-primary">
                Sign Up</button>
        <a href="index.php">Login</a>
        </form>

    </div>
</body>
</html>