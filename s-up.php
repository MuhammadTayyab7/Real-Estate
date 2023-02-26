<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@900&family=Teko&display=swap" rel="stylesheet">
    <title>Document</title>



    <style>
        .err{
            display: none;
        }
         #emailExist {
            display: none;
        }
        body {
            height: 520px;
            background-image: linear-gradient(to bottom, #720983 0%, #ef0289 50%, #b20785 100%);

            font-family: 'Teko', sans-serif;
        }
        h1{
            font-size: 3.5rem;
            color:white;
        }

        .btn-primarylog {
            display: block;
            font-size: 1.5rem;
            padding: 8px 20px;
            margin: auto;
            border-radius: 25px;
            border-color: transparent;
            background-color: black;
            color: white;
        }

        .btn-primarylog:hover{
            background-color: gray;
            color:black;
            font-size:2rem;

        }
    </style>
</head>

<body>

    <div class="container" style="margin-top: 150px;">
        <h1 align="center">Sign Up</h1>
        <form action="signscript.php"  method="POST">
            <div class="form-floating mb-3 mt-3">
                <input style="" type="email" class="form-control" id="email" placeholder="." name="email">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="password" placeholder="." name="password">
                <label for="pass">Password</label>
             
            </div>
            <button type="submit"  class="btn-primarylog">Sign up</button>
        </form>
    </div>

    <script src="jquery-3.6.3.min.js"></script>


    <script>
       


    </script>


</body>

</html>
</body>
</html>



