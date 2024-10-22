<?php
    include "../../../wp-load.php";
   //https://shamshoom.exoticaitsolutions.com/wp-content/themes/twentytwentyone-child/multistep.php?name=Exotica%20IT&phone=07018922603&city=Voluptas%20eos%20consectetur%20voluptatem%20Similique%20maiores%20eos%20sit%20voluptatem%20aut%20reiciendis%20duis%20natus&postalCode=3162&email=exoticaitsol@gmail.com&address=Sit%20tempora%20aliquid%20adipisicing%20minus%20minim%20vero%20minima%20culpa%20ipsam%20amet%20molestiae%20fugiat%20pariatur%20Beatae%20eos%20ullam%20voluptatum%20officiis&option1=Full%20Kitchen%20Renovation&option2=Condo

    $name =  $_GET['name'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $address = $_GET['address'];
    $city = $_GET['city'];
    $postal = $_GET['postalCode'];
    $option = $_GET['option1'];
    $option1 = $_GET['option2'];

    $to = 'webbdeveloper24@gmail.com';
    $subject = 'New Estimate Request';
    $message = "Name: $name\n<br>Phone: $phone\n<br>Email: $email\n\n<br>Address: $address\n<br>City: $city\n<br>Postal Code: $postal\n\n<br>I am Looking for: $option\n\n<br>I am renovating my $option1";
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: '.$name.' <'.$email.'>',
    );

    $check = wp_mail($to, $subject, $message, $headers);
    if($check){
        print_r('sent');
    }else{
        print_r('no');
    }
?>