<?php
if ( ! defined('BASEPATH') )
    exit( 'No direct script access allowed' );

class CI_SystemEmail{
    public function sendRegisterMail($To,$Key,$Pass){
        $Option = "From: VIRTUAL CACHING <contact@virtualcaching.pl>".PHP_EOL;
        //$Option .= "MIME-Version: 1.0".PHP_EOL;
        $Option .= "Content-type: text/html; charset=utf8".PHP_EOL;
        $adres = $To;
        $tytul = "Rejestracja";
        $wiadomosc = "<html>
        <head>
        </head>
        <div style='background-color: #666666;color:white;font-size:250%;padding:0.5%;padding-left:1%;font-family: Calibri;'>
        <strong><strong>VIRTUAL CACHING</strong></strong>
        </div><br>
        <body style='color:#666666;font-family: Calibri;font-size:150%;padding-left:1%;'>
        
        <div style='border-left:3px solid #D5D5D5;padding-left:1%;'>
        <strong>Rejestracja konta</strong><br>
        <p>Potwierdź email klikająć w ten link : http://virtualcaching.pl/index.php/mainpage/register/$Key </p>
        <br>
        <p>Twoje dane do logowania:<br>
        Login: $To<br>
        Hasło: $Pass</p>
        <p>Jeśli nie spodziewałeś się tej wiadomości, zignoruj ją.</p>
        <br><br><br>
        Copyright &copy; 2016 VIRTUALCACHING.PL
        </div>
        
        </body>
        </html>";   

        mail($adres, $tytul, $wiadomosc, $Option);
    }
}