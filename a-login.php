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
          .err {
            display: none;
        }
        
        body {
            height: 480px;
            background-image: linear-gradient(to bottom, white 0%, gray 50%, gray 100%);
            background-repeat: no-repeat;
       

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
            background-color: red;
            color: white;
        }

        .btn-primarylog:hover{
            background-color: black;
            color:white;
          

        }
    </style>
</head>

<body>

    <div class="container" style="margin-top: 150px;">
        <h1 align="center">Login</h1>
        <form action="check-a.php" onsubmit="event.preventDefault();" method="POST">
            <div class="form-floating mb-3 mt-3">
                <input style="" type="email" class="form-control" id="email" placeholder="." name="email">
                <label for="email">Email</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="password" placeholder="." name="password">
                <label for="pass">Password</label>
                <span class="err" id="errorMsg" style="color:white;"> Enter Again: Wrong Email or Password</span>
            </div>
            <button type="submit" onclick="login(this)" class="btn-primarylog">Login</button>
        </form>
    </div>

    <script src="jquery-3.6.3.min.js"></script>


    <script>
        function login(e) {

            var email = $("#email").val();
            var pass = $("#password").val();

            console.log(email);
            console.log(pass);



            $.ajax({
                url: "check-a.php",
                type: "POST",
                dataType: "JSON",
                data: {
                    email: email,
                    password: pass
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    if (data.found == 1) {
                        console.log('login');
                        window.location.href = "option.php";
                    }

                    else {
                        $("#errorMsg").show();
                    }
                },
                error: function (jqXHR, texterrorStatus, errorThrown) {
                    alert('no record found');
                }

            });
        }


    </script>


</body>

</html>