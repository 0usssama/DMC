<?php include 'head.php';

    if(isset($_POST['supprimer'])){

        // need to sanitize
        $idadmin = $_GET['id_admin'] ?? NULL ;

        if(!is_null($idadmin)){
            $sql = "DELETE FROM admin WHERE id_admin= " . $idadmin;

           $resultat=  $pdo->query($sql);

           if($resultat){
               header('location:admin.php');
           }else{
    echo 'ohhhh :(' . "<br>" . print_r($statement->errorInfo());

           }
        }

    }
    ?>
<div id="content-wrapper">


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">

                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search"
                                placeholder="Rechercher un client">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" type="submit">rechercher</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>
            </div>
            <!--end of col-->
        </div>


        <!-- Page Content -->
        <h1>Admin</h1>
        <hr>

        <?php
        $sql = "SELECT * FROM admin";
       
        ?>
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
            data-target="#exampleModalScrollable">Ajouter un admin</button>

      <table class="table table-striped custab">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nom</th>
                    <th>email</th>
                    <th>role</th>
                    <th>état admin</th>

                    <th class="text-center">Action</th>
                </tr>

            </thead>
            <?php 
            if($pdo->query($sql)){
            foreach  ($pdo->query($sql) as $row) { ?>

            <tr>
                <td><?php echo $row['id_admin'] ;?></td>
                <td><?php echo $row['username_admin'] ;?></td>
                <td><?php echo $row['email_admin'] ;?></td>
                <td><?php echo $row['role_admin'] ;?></td>
                <td><?php echo $row['etat_admin'] ;?></td>

                <td class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#m<?php echo $row['id_admin'] ;?>">Supprimer</button></td>
            </tr>

            <div class="modal fade" id="m<?php echo $row['id_admin'] ;?>" tabindex="-1" role="dialog"
                aria-labelledby="m<?php echo $row['id_admin'] ;?>" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="admin.php?id_admin=<?php echo $row['id_admin'] ;?> " method="post">
                                <h1 class="mb-5">voulez-vous supprimer admin n°<?php echo $row['id_admin'] ;?> </h1>
                                <input type="submit" name="supprimer" class="btn btn-block btn-danger"
                                    value="supprimer">
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <?php }
            }; ?>


        </table>






    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="ajouter/ajouter_admin.php" method="post">


                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="username_admin" name="username_admin" class="form-control"
                                    placeholder="utilisateur" required="required" autofocus="autofocus">
                                <label for="username_admin">utilisateur</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="password" id="motpass_admin" name="motpass_admin" class="form-control"
                                    placeholder="mot de passe" required="required" autofocus="autofocus">
                                <label for="motpass_admin">mot de passe</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="email_admin" name="email_admin" class="form-control"
                                    placeholder="email" required="required" autofocus="autofocus">
                                <label for="email_admin">email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">


                                <select name="role_admin" id="role_admin" class="form-control">
                                    <option value="">role admin..</option>
                                    <option value="normal">normal</option>
                                    <option value="superadmin">superadmin</option>


                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">

                                <select name="etat_admin" id="etat_admin" class="form-control">
                                    <option value="">état..</option>
                                    <option value="active">activé</option>
                                    <option value="desactive">désactivé</option>


                                </select>
                            </div>
                        </div>




                        <input type="submit" class="btn btn-primary btn-block" value="Ajouter" name="ajouter">
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->



    <?php include 'foot.php';?>