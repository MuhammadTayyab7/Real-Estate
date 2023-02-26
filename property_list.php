<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@900&family=Teko&display=swap" rel="stylesheet">
    <title>Document</title>


    <style>
        body {
            font-family: 'Teko', sans-serif;
            height: 520px;
            background-image: linear-gradient(to bottom, #e2e2e4 0%, #e1dbd6 50%, #e2e2e4 100%);
        
        }

        td {
            border-top: 0px;
        }
        .btn-primaryadd{
            padding: 10px 15px;
            allign-items:center;
            border-radius: 20px;
            color:white;
            background-color: black;
            border-color: transparent;
        }
        .btn-primaryadd:hover{
           background-color: silver;
           color: black;
        }

       
    </style>
</head>

<body>
    <?php
    include 'database.php';
    $sql = "select * from property";
    $result = $conn->query($sql);
    ?>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center mb-5">
                    <h2 class="heading-section"><a href="add-property.php"><button class=" btn-primaryadd">Add Property</button></a></h2>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        
                        <th scope="col">Address</th>
                        <th scope="col">Property Pic</th>
                        <th scope="col">Area</th>
                        <th scope="col">Price</th>
                        <th scope="col">Bedroom</th>
                        <th scope="col">Bathroom</th>

                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    if ($result->num_rows > 0) {

                        # code...
                        $sr_num = 1;

                        while ($row = $result->fetch_assoc()) {
                            # code...
                    
                            ?>

                            <tr>
                                <th scope="row">
                                    <?php echo $sr_num++ ?>
                                </th>

                                <td margin-top:90px>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td margin-top:90px>
                                    <?php echo $row['city']; ?>
                                </td>
                             
                                <td margin-top:90px>
                                    <?php echo $row['address']; ?>
                                </td>
                                <td><img width="90px" src="<?php echo $row['property_pic'] ?>"></td>
                               
                                <td margin-top: 90px>
                                    <?php echo $row['area']; ?>
                                </td>
                                <td margin-top: 90px>
                                    <?php echo $row['price']; ?>
                                </td>

                                <td margin-top:90px>
                                    <?php echo $row['bedroom']; ?>
                                </td>
                                <td margin-top:90px>
                                    <?php echo $row['bathroom']; ?>
                                </td>
                                <td>
                                    <a href="property-delete.php? id=<?php echo $row['id'] ?>"><i class="fa fa-close"></i></a>
                                    <a href="property-update.php? id=<?php echo $row['id'] ?>"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>

                            <?php
                        }
                    }

                    ?>
                </tbody>

            </table>

</body>

</html>