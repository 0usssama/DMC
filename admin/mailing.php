<?php 



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

    
    
    $mail = new PHPMailer(true);
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    
    /** Authenfication  email + mot de passe **/
    $mail->Username = 'dmc.eurl@gmail.com';                 // SMTP username
    $mail->Password = 'zaki-Rito2019';                           // SMTP password
    /************************ */
    
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    /** email envoyé de puis ==> */
    $mail->From = 'dmc.eurl@gmail.com';
    $mail->FromName = 'Dmc from zaki';

    /************************ */

    /** email récépteur ==> */

    $mail->addAddress('farizaki2015@gmail.com','belhas zakaria');    

    /******** */
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    
    //$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->CharSet = 'UTF-8';

    /**************Contenu********* */

    $mail->Subject = 'Commande N°' ;//sujet
    $mail->Body    = " veuillez confirmer notre email.";// le corp de de l'email
    $mail->AltBody = 'Cordiallement';//mini corp
    /************************ */
    
    if(!$mail->send()) {
        echo 'email non envoyé';
        echo 'Mailer erreur: ' . $mail->ErrorInfo;
    } else {
        echo 'Email envoyé avec succés';
        //hna update ta3 commande => validé
        //dirouha 
    }
    
    

?>
