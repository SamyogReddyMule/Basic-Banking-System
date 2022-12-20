<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank-Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/usercreation.css">
    <style>

      body {
        background-image: url("img/home background.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
</head>
<body>
<?php
  include 'navigation.php';
  include 'connection.php';
?>





    <style>
        .formin {
            border-radius: 20px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            font-weight: bold;
            color: white;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>

    <center>
        <h2 class="text-center pt-2" style="color:green;">Contact Us</h2>

            <div class="container"
                style=" backdrop-filter: blur(5px);  border-radius:5px; padding: 20px 20px 20px 20px; margin-top:50px; width:60%;">
                <form action="contactus.php" method="post">
                    <input type="text" class="formin form-control" name="name" id="" placeholder="Name"><br><br>
                    <input type="email" class="formin form-control" name="email" id="" placeholder="Email"><br><br>
                    <textarea name="message" class="" style="border-radius:20px; padding: 5px 5px 5px 15px;"
                        placeholder="Enter your message" rows="5" cols="47" id=""></textarea>
                    <br><br><input class="btn" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </center>
    <?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
        
    $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script> alert('Thank you for Contacting Us');
                                     window.location='contactus.php';
                           </script>";
    }else{
        echo "<script> alert('Something went wrong!');
                                     window.location='contactus.php';
                           </script>";
    }
}
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>