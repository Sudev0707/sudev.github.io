
<?php 
        if(isset($_POST['submit'])){
            $to= "sudev1997@gmail.com";
            $name= $_POST['name'];
            $subject= $_POST['subject'];
            $message= $_POST['message'];
            $from= $_POST['email'];
            $header= "From : $name <$from>";

             mail($to, $subject, $message, $header);

           
                echo "Message sent successfully...";
             
        }
        ?>
?>