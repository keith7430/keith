
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keith_Brown</title>
    <Link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<div class="container">
    <body>

    <nav>
        <ul>
            <img src="img/tyga.jpg" class="img-circle">
            <li><h1 id="hone">Keith Brown</h1></li>
            <li><p id="para"> Trainee Web Developer</p></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>

        </ul>
    </nav>


    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <h2 id="hello">SAY HELLO...</h2>


        <div class="one-half column">


            <div><p>
                <p>
                    <strong><span style="color: black ;">Phone: <span
                            style="color: black;"> <br>062 104 3166</span></span></strong>
                </p>
                <p>
                    <strong><span style="color: black ;">Email: <span
                            style="color: black;"> <br>mkpindura@gmail.com</span></span></strong>
                </p>


                <p>
                    <span style="color: black ;"><strong></strong></span>
                </p></div>
            <?php
            if (isset($_POST["name"]) ||isset( $_POST["message"]) ||isset( $_POST["email"])) {

                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];


                $to = "mkpindura@gmail.com";
                $subject = "message";
                $body = "this is an automated message, please dont reply to this email. \n\n $message";

                mail($to, $subject, $body);


            }
            ?>

            <form action="contact.php" method="POST">
                Name: <br><input type="text" name="name" value=""  style="width: 50%;" required><br>
                Email: <br><input type="email" name="email" value="" style="width: 50%;" required><br>
                Message: <br><textarea name="message"></textarea><p>
                    <input type="submit" name="submit" value="submit" class="btn btn-success">
            </form>
        </div>

    </div>
    </body>
</div>
</html>
