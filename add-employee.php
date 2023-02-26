<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@900&family=Teko&display=swap" rel="stylesheet">




    <style>
        body {
            height: 700px;
            background-image: linear-gradient(to bottom, white 0%, gray 50%, gray 100%);
            background-repeat: no-repeat;
       

            font-family: 'Teko', sans-serif;
        }

        #emailExist {
            display: none;
        }

        h1 {
            color: white;
            font-size: 3.5rem;
        }

        .btn-primaryreg {
            font-size: 1.5rem;
            padding: 10px 20px;
            display: block;
            margin: auto;
            allign-items: center;
            border-radius: 20px;
            color: white;
            background-color: black;
            border-color: transparent;
        }
    </style>
</head>


<body>
    <style>
        body {
            background-color: beige;
            font-family: 'Teko', sans-serif;
        }

        #emailExist {
            display: none;
        }
    </style>
    <div class="container" style="margin-top: 100px;">
        <h1 align="center">Add User</h1>
        <form action="employee-insert.php" method="POST" enctype="multipart/form-data">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input onchange="checkEmailExist(this)" type="email" class="form-control" id="email"
                    placeholder="Enter email" name="email">
                <label for="email">Email</label>
                <span id="emailExist" style="color:red;">Email already Exist</span>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                <label for="pass">Password</label>
            </div>
       
            <div class="mt-3 mb-3">
                <input type="file" class="form-control" id="files" name="files">
            </div>
            <button type="submit" name="submit" value="submit" id="submit_form_button"
                class="btn-primaryreg">ADD</button>
        </form>
    </div>
    <script src="jquery-3.6.3.min.js"></script>
    <script>
        function checkEmailExist(e) {
            console.log("is function called");
            var strval = $("#email").val();
            console.log(strval);
            $.ajax({
                url: "user-email.php",
                type: "post",
                dataType: "JSON",
                data: {
                    email: strval
                },
                success: function (data, textStatus, jqXHR) {
                    console.log(data);
                    if (data.found == 1) {
                        console.log('email exist');
                        $("#emailExist").show();
                        $("#submit_form_button").prop('disabled', true);
                    } else {
                        //alert('no record found');
                        console.log('email not exist');
                        $("#emailExist").hide();
                        $("#submit_form_button").prop('disabled', false);
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