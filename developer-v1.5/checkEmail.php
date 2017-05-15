<?php
// Check for empty fields
if(empty($_POST['name'])        ||
    empty($_POST['email'])       ||
    empty($_POST['objet'])       ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "No arguments Provided!";
    return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$objet = $_POST['objet'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'dylanraimon@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Formulaire de contact:  $name";
$email_body = "Tu as reçu un nouveau message du formulaire de ton portfolio.\n\n"."Détails:\n\nNom: $name\n\nEmail: $email_address\n\nObjet: $objet\n\nMessage:\n$message";
mail($to,$email_subject,$email_body);
return true;
?>
/**
 * Created by PhpStorm.
 * User: Raimon
 * Date: 02/03/2017
 * Time: 22:09
 */