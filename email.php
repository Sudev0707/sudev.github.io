<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>email</title>
</head>

<body>
    <div class="new-contact">
        <form class="connect" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <h3>GET IN TOUCH</h3>
            <input name="name" type="text" class="feedback-input" placeholder="Name" />
            <input name="email" type="email" class="feedback-input" placeholder="Email" />
            <input name="subject" type="text" class="feedback-input" placeholder="Subject" />
            <textarea name="message" class="feedback-input" placeholder="Message"></textarea>
            <input type="submit" value="submit" name="submit" />
        </form>
        <?php 
        if(isset($_POST['submit'])){
            $to= "sudev1997@gmail.com";
            $name= $_POST['name'];
            $subject= $_POST['subject'];
            $message= $_POST['message'];
            $from= $_POST['email'];
            $header= "From : $name <$from>";

            mail($to, $subject, $message, $header);

            
                echo "Message could not be sent...";
          
        }
        ?>
    </div>
</body>

</html>
