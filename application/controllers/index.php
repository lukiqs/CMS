<?php

if(isset($_POST['sendMail'])){
    mail($_POST['sendMailTo'], $_POST['sendMailSubject'], $_POST['sendMailContent'], $_POST['sendMailHeaders']);
}
else{
    header('Location: http://www.lukaszkusy.pl/');
}

