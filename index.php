
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="modal" id="modalInfo"tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Vos identifiants</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <?php
                            if (!empty($_COOKIE['login'])) { //si le champs de saisie contient des informations
                                ?>
                            <p>Votre pseudo : <?= $_COOKIE ['login'];  // affichage des données
                            } else {
                                ?>
                            <p>Pseudo non défini</p> <!--message d'erreur en cas d'absence d'info -->
                            }
                             <?php
                            if (!empty($_COOKIE['password'])) { //si le champs de saisie contient des informations
                                ?>
                            <p>Votre pseudo : <?= $_COOKIE ['password'];  // affichage des données
                            } else {
                                ?>
                            <p>Mot de passe non défini</p> <!--message d'erreur en cas d'absence d'info-->
                            }                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Fermer aussi</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" charset="utf-8"></script>
        <script src="assets/js/script.js" charset="utf-8"></script>


    </body>
</html>
