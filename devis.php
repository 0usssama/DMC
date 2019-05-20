
<?php include 'includes/config.php'; ?>
<?php include 'fonctionSite.php'; ?>

 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="css/Font-Awesome-master/Font-Awesome-master/css/all.css">
<style type="text/css">
 
  <?php 
if(!isset($_SESSION['qteTotal'])){echo' #finir{display: none;}';}   
if($_SESSION['qteTotal'] <= 1 ){echo' #finir{display: none;}';}   
if($_SESSION['qteTotal'] > 0 ){echo' #finir{display: block;}';}    
?>

</style>
<script type="text/javascript">
  function affichefinir(){
  document.getElementById("finir").style.display = "block";
  }
  function masquefinir(){
  document.getElementById("finir").style.display = "none";
  }  
</script>
</head>
<body>
    

<section class="jumbotron bg-danger text-light text-center">
        <h1><i class="fas fa-cash-register"></i>Devis</h1>
</section> 

<div class="container mb-4">
  
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produit</th>
                            <th scope="col">Disponibilité</th>
                            <th scope="col" class="text-center">Quantité</th>
                            <th scope="col" class="text-right">Prix U</th>
                            <th scope="col" class="text-right">Prix T</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
    $_SESSION['listeIdProduit'] = $_SESSION['listeIdProduit'] ?? '';
    $listeProduitPannier = explode('/', $_SESSION['listeIdProduit']);
    if(isset($_GET['action']) && $_GET['action']=='supprimer'){
      $id_produit = $_GET['id_prod'];
    
        if(in_array($id_produit, $listeProduitPannier)){
          //var_dump($listeProduitPannier);
          foreach ($listeProduitPannier as $key => $value) {
             if($value== $id_produit){
              if(strpos($_SESSION['listeIdProduit'], $id_produit) !== NULL){

                   unset($listeProduitPannier[$key]);
                  
                   $_SESSION['listeIdProduit'] = implode('/', $listeProduitPannier);
                   header('location: devis.php');

              }
             }
          }
            //unset($listeProduitPannier[$id_produit]);
        }
    }

        //var_dump($listeProduitPannier);
    $y = count($listeProduitPannier);
  //  var_dump($listeProduitPannier);

//echo 'count : '.$y;
$prixtotaleDevis = 0;
$qtetotaleDevis = 0;
$produitDevis = [];

    for ($i=1; $i < $y-1; $i++)  
     {
    
    $idp = $listeProduitPannier[$i]; 
   // echo 'id = ' . $idp . '<br>';
 
    $prixProduit = 'prixProduitTotal'.$idp;  
   // echo 'prix = ' . . '<br>';

   // $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + $_SESSION[$prixProduit];
    //echo 'prix totale= ' . $_SESSION['prixTotal']. '<br>';
 
    $qteProduit = 'qteProduit'.$idp ;
    //echo 'quantité = ' . . '<br>';

    //$_SESSION['qteTotal'] = $_SESSION['qteTotal'] + $_SESSION[$qteProduit];
 
    $sql = "SELECT *
        FROM produit
        WHERE id_prod LIKE '$idp' ";

         
 if($pdo->query($sql)){
    foreach  ($pdo->query($sql) as $row) { 
    
    ?>
                        <tr>
                            <?php 
                            
                            $sqlimage = "SELECT * FROM image WHERE id_prod LIKE '$idp'";
                             if($pdo->query($sqlimage)){
                foreach  ($pdo->query($sqlimage) as $rowimage) { 
                    if(!empty($rowimage['url_imag'])){
                  
                        $imageprincipale =  $rowimage['url_imag'];
                      }
                    ?>

                           
                            <td><img src="<?php echo $imageprincipale; ?>" width="40px" /> </td>

                <?php };};?>
                            <td><?php echo $row['nom_prod']; ?></td>
                            <td>Disponible</td>
                            <td>

                            <input onchange="calcule('<?php echo $row['id_prod']; ?>')"  
                                   id="qte<?php echo $row['id_prod']; ?>" 
                                   name="qte<?php echo $row['id_prod']; ?>" 
                                   class="form-control" type="number" style="width: 65px;"
                                   value="<?php echo $_SESSION[$qteProduit] ; $qtetotaleDevis = $qtetotaleDevis + $_SESSION[$qteProduit]; ?>"

                            />
                            </td>
                           
                            <td class="text-right">
                              <input id="prixunitaire<?php echo $row['id_prod']; ?>" 
                                     name="prixunitaire<?php echo $row['id_prod']; ?>" 
                                     class="form-control" type="text" style="width: 120px" 
                                     value="<?php echo $_SESSION[$prixProduit] ; ?>"
                            />
                            </td>

                            <td class="text-right">
                              <input id="prixtotal<?php echo $row['id_prod']; ?>" 
                                     name="prixtotal<?php echo $row['id_prod']; ?>" 
                                     class="form-control" type="text" style="width: 120px" 
                                     value="<?php echo $_SESSION[$qteProduit] * $_SESSION[$prixProduit] ; ?>"
                            />
                            </td>


                            <td class="text-right">
                                <form method="post" action="devis.php?action=supprimer&id_prod=<?php echo $idp; ?>">

                                <input type="submit" value="supprimer" class="btn btn-sm btn-danger">
                                </form>
                              <!--  <button class=""><i class="fa fa-trash"></i> </button> -->
                            </td>
                        </tr>
                     <?php 

                     $prixtotaleDevis +=  $_SESSION[$prixProduit] *  $_SESSION[$qteProduit];
                     //echo $prixtotaleDevis . '<br>';
                   
                    }; };};
                   $_SESSION['produitDevis']= $produitDevis;
                  
                    ?>  
                      
                        <tr>
                            <td></td>
                            <td><strong>Total quantité:</strong></td>
                            <td>
                             totaleproduit
                            

 
                            </td>
                            <td><input id="totaleproduit" 
                                     name="totaleproduit" 
                                     class="form-control" type="text" style="width: 65px" 
                                     value="<?php   
                            if(isset( $qtetotaleDevis)){
                                echo  $qtetotaleDevis; $_SESSION['qteTotal'] = $qtetotaleDevis;
                            }else{
                                echo '0 produits';
                            }
                            ?>"
                            /></td>
                            <td></td>
                            <td><strong>Total prix: </strong></td>
                            <td class="text-right">
                            <input id="totalepannier" 
                                     name="totalepannier" 
                                     class="form-control" type="text" style="width: 120px" 
                                     value="<?php   
                            if(isset($prixtotaleDevis)){
                                echo $prixtotaleDevis . ' DA'; $_SESSION['prixTotal'] = $prixtotaleDevis;
                            }else{
                                echo '0 DA';
                            }
                            ?>"
                            />
                               </td>
                        </tr>

<form method="post" action="devis.php">


                        <tr><td>Point de vente</td>
                        
                        <td><select name="pointdevente" class="browser-default custom-select">

  <?php $sql = "SELECT * FROM point_de_vente";
      if($bdd->query($sql)){
      foreach  ($bdd->query($sql) as $point_de_vente) {   ?>
         <option value="<?php echo $point_de_vente['id_point_vente']; ?>">
          <?php echo $point_de_vente['titre_point_vente']; ?>
         </option>
  <?php } }; ?> 


</select></td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>
                    </tbody>
                </table>

              
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href ="index.php" class="btn btn-lg btn-block btn-warning text-uppercase"><i class="fas fa-cart-plus"></i>&nbsp;Continuer le shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <input type="hidden" name="action" value="validerLeDevis">
                    
                  
                    <button type="submit" id="finir" name="valider" class="btn btn-lg btn-block btn-success text-uppercase">  <i class="fas fa-vote-yea"></i>&nbsp;Finir le shopping</button>
                </div>
            </div>
        </div>
    </div>
</div>
 </form>
<script type="text/javascript">
function calcule (id){

  
  var idchanpqte = 'qte'+id;

      var quantite  = document.getElementById(idchanpqte).value; 
      var envoi     = "fonctionSite.php?plusqteid="+idchanpqte+"&quantite="+quantite;
      $.get(envoi);
 
  //alert(idchanpqte);
  var idchanpprixunitaire = 'prixunitaire'+id;
  var idchanpprixtotal = 'prixtotal'+id;
  
  var qte = document.getElementById(idchanpqte).value; 
  var prixunitaire = document.getElementById(idchanpprixunitaire).value; 
  document.getElementById(idchanpprixtotal).value = qte*prixunitaire;
  
  var totalepannier = 0;
  var totaleproduit = 0;

   <?php //realisation d'un boucle pour generer des ligne en javascripte et additioner les elements du pannier de maniere manuelle, ?>

   <?php $listeProduitPannier = explode('/', $_SESSION['listeIdProduit']);?>
   <?php $y = count($listeProduitPannier);?>
   <?php for ($i=1; $i < $y-1; $i++){?>  
    
   <?php $idp = $listeProduitPannier[$i]; ?>

   idchanpprixtotal = 'prixtotal'+<?php echo $idp; ?>; 
   idchanpqte = 'qte'+<?php echo $idp; ?>;

   totalepannier = parseFloat(totalepannier) + parseFloat(document.getElementById(idchanpprixtotal).value);
   totaleproduit = parseFloat(totaleproduit) + parseFloat(document.getElementById(idchanpqte).value);
   <?php } ?>
   document.getElementById('totalepannier').value = parseFloat(totalepannier);
   document.getElementById('totaleproduit').value = parseFloat(totaleproduit);
   if(totaleproduit>0){affichefinir();}
   if(totaleproduit<1){masquefinir();}

}  
</script>

</body>
</html>