
<?php include 'head.php'; 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 ?>
    <div id="content-wrapper">

      <div class="container-fluid">

     
        <!-- Page Content -->

        <?php 
      if(isset($_GET['idpointdevente'])){$idpointdevente = strip_tags($_GET['idpointdevente']); 


             $sql = "SELECT * FROM point_de_vente WHERE  id_point_vente LIKE '$idpointdevente'";

            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) {
              $titrepoint = $row['titre_point_vente'] ;
            }
            }
            }  
            ?>
        <h2>Commandes : point de vente <?php echo $titrepoint;?></h2>
        <hr>

      
        <table class="table table-striped custab">
            <thead>
            
                <tr>
                  

                    <th>N° Client</th>
                    <th>Client</th>
                    <th>date</th>
                    <th>etat</th>
                    <th>Produits</th>
                 
                  <th></th>
                  <th></th>
                 
                 
                </tr>
            </thead>
<?php /* 
$sql = "SELECT  client.id_client, client.nom_client, client.prenom_client, commander.date_comd, 
commander.etat_comd, commander.qte_p_comd, commander.id_prod, commander.id_client
FROM commander
JOIN client 
ON commander.id_client = client.id_client

";

{

"listeid":"/47/49/", 
liste des id des produit
on transforme la liste en tableau avec la fonction explode
on cré une boucle for, allant de 1 ver la taille du tableau  count() soit equivalent de length en pascal
aussi j ai les id des produits

 "titreProduit47":"imprimante ticket", "qteProduit47":"4", "prixProduit47":"1500", "totalProduit47":"6000", "titreProduit49":"tablette samsung", "qteProduit49":"6", "prixProduit49":"2150", "totalProduit49":"12900", "qteGeneral":"10", "totalGeneral":"18900", "idClient":"10", "nom":"hafsi", "prenom":"karim", "email":"", "adresse":"", "telephone":"" }

*/ ?>


<?php 
      if(isset($_GET['idpointdevente'])){$idpointdevente = strip_tags($_GET['idpointdevente']); 


             $sql = "SELECT * FROM point_de_vente WHERE  id_point_vente LIKE '$idpointdevente'";

            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) {
              $titrepoint = $row['titre_point_vente'] ;
              $email_point_de_vente = $row['mail_point_de_vente'] ;
            }
            }
            }  


      if(isset($_GET['idcommende'])){$idcommende = strip_tags($_GET['idcommende']);}

       $message = '';
      






 
if(isset($_GET['idcommende'])){

      $sql = "SELECT  * FROM commande WHERE id_comd LIKE '$idcommende' LIMIT 1";

?>


    <?php 
        if($pdo->query($sql)){
           
            

            foreach  ($pdo->query($sql) as $commande) { ?>
 
  <?php 
  $facture = json_decode($commande['elements_produit'], true);

  ?>  
  <?php   
  $message  = '<table class="table table-striped custab" border="1">';
  $message  = $message.'<tr>';
  $message  = $message.'<td> <h3>Facture  N°'.$commande["id_comd"].'</h3> </td>';
  $message  = $message.'<tr>';
  $message  = $message.'<td style="border-right: 2px solid #000">';
  $message  = $message.'<p> Informations entreprise </p>';
  $message  = $message.'<p> Point de vente </p>';
  $message  = $message.'<p> Delais de livraison 20 jours </p>';
  $message  = $message.'<p> Paiement à la livraison </p>';
  $message  = $message.'</td>';
  $message  = $message.'<td>';
  $message  = $message.'<p> A :'.$facture["nom"]." ". $facture["prenom"].'</p>';
  $message  = $message.'<p>'.$facture["adresse"].'</p>';
  $message  = $message.'<p>'.$facture["email"].'</p>';
  $message  = $message.'<p>'.$facture["telephone"].'</p>';
  $message  = $message.'</td>'; 
  $message  = $message.'</tr>';
  $message  = $message.'</table>';
  $message  = $message.'<table class="table table-striped custab">'; 
  $message  = $message.'<thead>';
  $message  = $message.'<tr>';
  $message  = $message.'<th>N°</th>';
  $message  = $message.'<th>Produit</th>';
  $message  = $message.'<th>Prix u</th>';
  $message  = $message.'<th>Qte</th>';
  $message  = $message.'<th>Total</th>';
  $message  = $message.'</tr>';
  $message  = $message.'</thead>';            
  
  
  


require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

    
 ?> 
                         <?php $liste = $facture['listeid']; //recuperation de la liste des id des commande ?>
                         <?php $listeProduitPannier = explode('/', $liste); 
                               $y = count($listeProduitPannier); 
                               for ($i=1; $i < $y-1; $i++)  
                               { ?>

                         <?php $idp = $listeProduitPannier[$i]; // recuperer le id du produit du tableau $listeProduitPannier = explode('/', $liste); 
                             $message  = $message.'<tr>';
                             $message  = $message.'<td>'.$i.'</td><tr>';
                             $message  = $message.'<td>'.$facture['titreProduit'.$idp].'</td>';
                             $message  = $message.'<td>'.$facture['prixProduit'.$idp].'</td>';
                             $message  = $message.'<td>'.$facture['qteProduit'.$idp].'</td>';
                             $message  = $message.'<td>'.$facture['totalProduit'.$idp].'</td>';
                             $message  = $message.'</tr>';
                           } ?>
                         <?php 
                             $message  = $message.'<tr>';
                             $message  = $message.'<td>Qte</td>';
                             $message  = $message.'<td>'.$facture['qteGeneral'].'</td>';
                             $message  = $message.'<td> </td>';
                             $message  = $message.'<td>Total ht</td>';
                             $message  = $message.'<td>'.$facture['totalGeneral'].'</td>';
                             $message  = $message.'</tr>';

                             $message  = $message.'<tr>';
                             $message  = $message.'<td></td>';
                             $message  = $message.'<td></td>';
                             $message  = $message.'<td> </td>';
                             $message  = $message.'<td>TVA 19%</td>';
                             $message  = $message.'<td>'.($facture['totalGeneral']*19/100).'</td>';
                             $message  = $message.'</tr>';

                             $message  = $message.'<tr>';
                             $message  = $message.'<td></td>';
                             $message  = $message.'<td></td>';
                             $message  = $message.'<td> </td>';
                             $message  = $message.'<td>TOTAL GENERAL</td>';
                             $message  = $message.'<td>'.($facture['totalGeneral']*1.19).'</td>';
                             $message  = $message.'</tr>';
                             $message  = $message.'</table>';
            }
          
             }     
                             $message  = $message.'</table>';
                             $message  = $message.'</p>'; 
                             
                             
                             
                             
                             
    
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
//echo $email_point_de_vente;
    $mail->addAddress( $email_point_de_vente ,'belhas zakaria');    

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

    $mail->Subject = 'Commande N°'. $_GET['idcommende'] ;//sujet

    /******************************************************************************************************* */
    /**
     
          ]z
           `@@_
            @@@L
      .d@L,]@@@@L,
-z__   ]@@@a@@@@@@_
 `@@@@zza@@@@@@@@@@L
  `]@@@@@@@@@@@@@@@@@_
    `@@@@@@@@@@@@@@@@@L
     `-@@@@@@@@@@@@@@@@'
       `@@@@@@@@@@@@@@[
        `@@@@@@@@@@@@@[
          ]@@@@@@@@@@@[
           "~~~~-@@@@@@,
                  "~-@@@_
                     ~@@@L
                      `@@@L_
                       `~@@@L
                         `@@@z,
                          `]@@@_
                            `@@@z
                             `]@@L_
                               ~@@@z
                                `@@@z,
                                 `]@@@L
                                   `@@@z
                                     ]@@L,
                                      ~@@@z
                                       "@@@z
                                        `-@@@_
                                          ~@@@_
                                           `@@@z
                                            `-@@@_
                                              ]@@@_
                                               "@@@z
                                                `]@@L,
                                                  `@@@L
                                                   `@@@z,
                                                    `-@@@_
                                                      `@@@L
                                                       `@@@L    ]e
                                                         ~@@b_  a@b
                                                          `@@@e]@@L
                                                    -zzzz___@@@U@@@,
                                                      "~-@@@@@@@@@@@
                                                         `~-@@@@@@@@L
                                                            "~-@@@@@@,
                                                               "~@@@@L
                                                                 `~@@@e
                                                                    ~@@_
                                                                      ~@
     * 
     * 
     */
    $mail->Body    = " veuillez confirmer notre email." . "<br>". $message;// le corp de de l'email  *
    // ICIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
    /* ****************************************************************************************************/
    $mail->AltBody = 'Cordiallement';//mini corp
    /************************ */
    
    if(!$mail->send()) {
        echo 'email non envoyé';
        echo 'Mailer erreur: ' . $mail->ErrorInfo;
    } else {
        echo '<script>aler("Email envoyé avec succés");</script>';
        //hna update ta3 commande => validé
        //dirouha 
    }
    
                             
                             ?>


<?php      

if($message != ''){
$idpointdevente = strip_tags($_GET['idpointdevente']); 
$idcommende = strip_tags($_GET['idcommende']);
  $sql = "SELECT * FROM point_de_vente WHERE id_point_vente LIKE '$idpointdevente' ";

?>

<?php if($pdo->query($sql)){
      foreach  ($pdo->query($sql) as $row) {
        //$mail_point_de_vente = $row['mail_point_de_vente'] ; 

        $mail_point_de_vente = 'vide' ; 
       }  ?>
<?php }; ?>



<?php 

$sujet = 'nouvelle facture';
  
$destinataire = $mail_point_de_vente;
$headers = "From: \"site web\"<moi@domaine.com>\n";
$headers .= "Reply-To: moi@domaine.com\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
/*
if(mail($destinataire,$sujet,$message,$headers))
{
        ?><script type="text/javascript"> alert("L'email a bien été envoyé.");</script> <?php 
 
}
else
{
           ?><script type="text/javascript"> alert("Une erreur c'est produite lors de l'envois de l'email.");</script> <?php 
}


*/

 ?><script type="text/javascript"> alert("L'email a bien été envoyé vers le point de vente : <?php echo $titrepoint; ?>.");</script> <?php 


$etat_comd = 'valider';

$sql = "UPDATE commande 
        SET 
        etat_comd=:etat_comd
        WHERE  id_comd=:id_comd";
 
        $execution = $bdd->prepare($sql);    
        $execution->bindParam(':id_comd', $idcommende, PDO::PARAM_INT);       
        $execution->bindParam(':etat_comd', $etat_comd, PDO::PARAM_STR); /////en attendan le mailling      

        $execution->execute();


  } ?>

<?php  } //fin de if(isset($_GET['idcommende']))?> 



 
<?php       if(isset($_GET['idpointdevente'])){$idpointdevente = strip_tags($_GET['idpointdevente']);} 

$sql = "SELECT  * FROM commande WHERE etat_comd LIKE 'valider' AND id_point_vente LIKE '$idpointdevente'";

//$sqlpointdevent = "SELECT  * FROM commande WHERE etat_comd LIKE 'pointdevente' AND id_point_vente LIKE '$id_point_vente'";

?>


    <?php 
        if($pdo->query($sql)){
           
            

            foreach  ($pdo->query($sql) as $commande) { ?>
 
  <?php 
  $facture = json_decode($commande['elements_produit'], true);

  ?>  
                    <tr>
                        <td><?php echo $facture['idClient']; ?></td>
                        <td><?php echo $facture['nom'].' '. $facture['prenom'];?></td>
                        <td><?php echo $commande['date_comd']; ?></td>
                        <td><?php echo $commande['etat_comd']; ?></td>
                       
                         <td>
                         <?php // liste des produits ?>
 
                         <?php $liste = $facture['listeid']; //recuperation de la liste des id des commande ?>
                         <?php $listeProduitPannier = explode('/', $liste); 
                               $y = count($listeProduitPannier); 
                               for ($i=1; $i < $y-1; $i++)  
                               {
                               $idp = $listeProduitPannier[$i]; 
                               echo '<p>'.$facture['titreProduit'.$idp].' ('.$facture['qteProduit'.$idp].')</p>';
                               }
                         ?>
                         </td>
                      
                       
                      
                        <td>
    
        <a  class="btn btn-success btn-block " href="imprime_facture.php?id=<?php echo $commande['id_comd']; ?>"><i class="fas fa-eye"></i>&nbsp;voir&nbsp;/&nbsp;<i class="fas fa-print"></i>&nbsp;imprimer</a> 

                        </td>
                         <td>
                           
        <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $commande['id_client'] ;?>"><i class="fas fa-trash"></i></button>
                                            </td>
                        

                       
                    </tr>
                    <div class="modal fade" id="m<?php echo $commande['id_client'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $commande['id_client'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                        <div class="modal-body">
                            <form action="un_point_de_ventes.php?id_comd=<?php echo $commande['id_comd'] ;?>&idpointdevente=<?php echo $commande['id_point_vente'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer la commande du client n°<?php echo $commande['id_comd'] ;?> </h1>
                <input type="hidden" name="action" value="suppCommande">
                              
                                <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                            </form>

                        </div>

                    </div>
                </div>
            </div>
                   
              <?php 
            }
          
             } ?>     
            </table>
 
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

    </div>
    <!-- /.content-wrapper -->
<?php include 'foot.php'; ?>