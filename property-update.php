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
        <h1 align="center">Update Property</h1>
        <?php
        include'database.php';
        $id = $_GET['id'];
        $sql = "select * from property where id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <form action="update-property.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-floating mb-3 mt-3">
                        <input onchange="checkPropertyExist(this)" type="text" class="form-control" id="nameexists"
                            value="<?php echo $row['name']; ?>" placeholder="Enter Property Name" name="name">
                        <label for="name">Name</label>
                    </div>

                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="password" value="<?php echo $row['bedroom']; ?>"
                            placeholder="Enter bedrooms" name="bedroom">
                        <label for="bedroom">Bedroom</label>
                    </div>

                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="password" value="<?php echo $row['bathroom']; ?>"
                            placeholder="Enter bathrooms" name="bathroom">
                        <label for="bathroom">Bathroom</label>
                    </div>
                    
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="password" value="<?php echo $row['price']; ?>"
                            placeholder="Enter Price" name="price">
                        <label for="price">Price</label>
                    </div>
                    
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="password" placeholder="Enter Area"
                            value="<?php echo $row['area']; ?>" name="area">
                        <label for="area">Area</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                        <input type="text" class="form-control" id="password" placeholder="Enter Address"
                            value="<?php echo $row['address']; ?>" name="address">
                        <label for="address">Address</label>
                    </div>

                    <select class="form-select mb-3 mt-3" aria-label="" name="city" value="<?php echo $row['city']; ?>"
                        id="city">
                        <option selected>City</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Faisalabad">Faisalabad</option>
                    </select>

                    <div class="mt-3 mb-3">
                        <input type="file" class="form-control" id="files" name="files">
                    </div>
                    <button type="submit" name="submit" value="submit" id="submit_form_button"
                        class="btn-primaryreg">Update</button>
                </form>
            <?php }
        }
        ?>
    </div>
    <script src="jquery-3.6.3.min.js"></script>
    <script>
        function checkPropertyExist(e) {
            console.log("is function called");
            var strval = $("#nameexists").val();
            console.log(strval);
            $.ajax({
                url: "propertycheck.php",
                type: "post",
                dataType: "JSON",
                data: {
                    strval : nameexists,
                },
                success: function (data, textStatus, jqXHR) {
                    console.log("success function");
                    if (data.found == 1) {
                        console.log('name exists');
                        $("#nameexists").show();
                        $("#submit_form_button").prop('disabled', true);
                    } else {
                        //alert('no record found');
                        console.log('name does not exist');
                        $("#nameexists").hide();
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