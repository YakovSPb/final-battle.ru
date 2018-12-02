<?php

if(isset($_POST['submit'])){
    $to = "prospektpro673@gmail.com";; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "Форма отправки сообщений с сайта";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " оставил сообщение:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "<img src='img/logo.jpg'><br/>";
    echo "<h2>Сообщение отправлено. Спасибо Вам,  Я скоро свяжусь с Вами.</h2>";
    echo "<br /><br /><a href='http://mj.prospekt.pro/'>Вернуться на сайт.</a>";

}

?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
    function changeurl(){eval(self.location="http://mj.prospekt.pro/");}
    window.setTimeout("changeurl();",3000);
</script>