<?php include('fonctionSite.php');?>
<?php include('head.php');?>    
<?php include('header.php');?>  
<?php include('nav.php');?>  

    <!-- Content-->
    <?php
    $id_prod = $_GET['id'];
        // join mazal cause the foreign keys are not ready
        $sql = "SELECT produit.prix_gros, produit.prix_detail, produit.id_prod, produit.alaune_produit,  
        produit.nom_prod, produit.date_prod, 
        produit.description_prod,produit.caracteristiques_prod,
        
         marque.image_marque, famille.titre_famille
        FROM produit
        JOIN marque 
        ON marque.id_marque = produit.id_marque
        JOIN famille
        ON famille.id_famille = produit.id_famille 
        
       WHERE produit.id_prod = '" . $id_prod . "'";
        if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) {
        ?>
    <div id="content">
        <div class="container">


            <div class="container" id="images">
                <div class="row bg-white pt-4 d-flex lign-items-center mb-4 mt-3">

                    <div class="col-md-5 text-danger d-flex justify-content-center">
                        <div class="">
                            <h3 class="font-weight-bold  " style="color:rgb(219,2,23);font-weight:bold; ">
                            <?php echo $row['titre_famille'];?></h3>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="target=" _blank"
                            onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false"><button
                                style="width:100%; margin-top:10px;" type="button" class="btn btn-facebook btn-lg"><i
                                    class="fab fa-facebook-f"></i> Partager </button></a>
                    </div>
                    <div class="col-md-5 d-flex justify-content-center align-items-center">

                        <img src="<?php echo $row['image_marque'];?>" alt="" class="img-fluid" style="height: 100px;">
                    </div>

                </div>
                <div class="row bg-white pt-4">
                    <div class="col-md-6 d-flex">

                        <div class="col-2">
                            <div class="previews">
                       
                            <?php $sqlimage = "SELECT * FROM image WHERE id_prod LIKE '$id_prod'"; ?>
                <?php 
                if($pdo->query($sqlimage)){
                foreach  ($pdo->query($sqlimage) as $rowimage) { ?>

                <?php  
                if(!empty($rowimage['url_imag'])){
                  $imageprincipale = '' . $rowimage['url_imag'];
                }
                if($rowimage['image1']!=''){$image1 = ''.$rowimage['image1'];}
                if($rowimage['image2']!=''){$image2 =''.$rowimage['image2'];}
                if($rowimage['image3']!=''){$image3 = ''.$rowimage['image3'];}
                ?>
                
                <?php } //foreach
                      }  //if ?>
                       <div class="row">
                                <a href="#" data-full="<?php echo $imageprincipale; ?>"><img width="67"
                                        src="<?php echo $imageprincipale; ?>" /></a>
                                </div>
                                <div class="row">
                                <a href="#" data-full="<?php echo $image1; ?>"><img width="67"
                                        src="<?php echo $image1; ?>" /></a>
                                </div>
                                <div class="row">
                                <a href="#" data-full="<?php echo $image2; ?>"><img width="67"
                                        src="<?php echo $image2; ?>" /></a>
                                </div>
                                <div class="row">
                                <a href="#" data-full="<?php echo $image3; ?>"><img width="67"
                                        src="<?php echo $image3; ?>" /></a>
                                </div>
                               
                             
                            </div>

                        </div>
                        <div class="col-10">
                            <div class="full">
                                <!-- first image is viewable to start -->
                                <img src="<?php echo  $imageprincipale; ?>" class="img-fluid" />
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6" style="text-align: left !important;">

                        <h1 class="pb-3"><?php echo $row['nom_prod']; ?></h1>
    <button onclick='$.get("fonctionSite.php?id=<?php echo $row['id_prod'] ?>$idclient=<?php echo $_SESSION['id_client'] ?>&vote=1&action=vote");'>
    <button onclick='$.get("fonctionSite.php?id=<?php echo $row['id_prod'] ?>$idclient=<?php echo $_SESSION['id_client'] ?>&vote=2&action=vote");'>
    <button onclick='$.get("fonctionSite.php?id=<?php echo $row['id_prod'] ?>$idclient=<?php echo $_SESSION['id_client'] ?>&vote=3&action=vote");'>
    <button onclick='$.get("fonctionSite.php?id=<?php echo $row['id_prod'] ?>$idclient=<?php echo $_SESSION['id_client'] ?>&vote=4&action=vote");'>
    <button onclick='$.get("fonctionSite.php?id=<?php echo $row['id_prod'] ?>$idclient=<?php echo $_SESSION['id_client'] ?>&vote=5&action=vote");'>
                        <h3 class="mb-3" style="color:rgb(219,2,23);font-weight:bold; ">Caractéristiques</h3>
 
                            
                            <?php $caracteristiques_prod = '
                            [Gamme de vitesse :]
                            700 à 1000 billets minute ; 
                            [Capacité :]
                            Module d alimentation : 700 billets, Bac de réception : 200 billets, Poche de rejet : 200
                            billets ; 
                            [Capacité :]
                            Module d alimentation : 700 billets, Bac de réception : 200 billets, Poche de rejet : 200
                            billets ; 
                            [Capacité :]
                            Module d alimentation : 700 billets, Bac de réception : 200 billets, Poche de rejet : 200
                            billets ; 
                            '; ?>

<?php $caracteristiques_prod = str_replace('[', '<br><span style="font-weight:bold; color:rgba(196,0,0,1)">', $caracteristiques_prod); ?>

<?php $caracteristiques_prod = str_replace(']', '</span>', $caracteristiques_prod); ?>
<?php echo $caracteristiques_prod; // remplcer le texte entre [] par des titre et un saut de ligne ?>

                        <h3 style="color:rgb(219,2,23);font-weight:bold; " class="mt-5">Description</h3>
                        <p> <?php echo $row['description_prod'];?></p>
                    </div>
                </div>
              
            </div>

        </div>
    </div>

    <!-- end Content-->
    <?php }
            }; ?>


<div class="container">
<div class="col-md-3 d-flex">
<div
                      class="d-flex justify-content-between align-items-right mr-3 ml-3 mb-2 "
                    >

                      <div class="price text-success">
                        <h5 class="mt-4"><?php echo $row['prix_detail'] . ' DA'; ?></h5>
                      </div>
  
                     
                      <input type="number" class="qte" name="qte" min="0" value="1" id="qte<?php echo $row['id_prod']; ?>"> 
                      <button
                      
                      <?php if(isset($_SESSION['id_client']) && !empty($_SESSION['id_client'])){ ?>
                       onclick="ajoutpannier('qte<?php echo $row['id_prod']; ?>');" 
                      <?php } else { ?>
                       onclick="location.href='login.php'"; 
                      <?php } ?>
                       class="btn btn-danger btn-sm mt-3">
                        <i class="fas fa-shopping-cart"></i> Ajouter
                      </button>
                  </div>
                </div>
<div class="col-md-6 d-flex">
</div>
</div>    
<?php include('services.php');?>  

<?php include('footer.php');?>  