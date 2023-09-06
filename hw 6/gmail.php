<?php

// GMAIL LOG IN SYSTEM

    $gmail_chack = $_REQUEST ['gmail_chack'];
    $password_chack= $_REQUEST ['password_chack'];

    $gmail_name ="jahed@gmail.com";
    $password = "123456";

    if ( $gmail_chack == $gmail_name){    
        if( $password_chack == $password){
             echo "you are log in";
        }else{
            echo "password no";
        }
    }else{
        echo "gmail no";
    }
    



?>