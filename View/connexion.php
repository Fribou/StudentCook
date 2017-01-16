<?php
$title = "StudentCook : Connexion";
ob_start();

//On regarde si l'utilisateur n'est pas d�j� connect�


//On est dans la page de formulaire

  echo'  <div class="container">
          <div class="row main">
            <div class="main-login main-center">
            <h1>Connexion</h1>
            <p>Pour vous connecter, veuillez remplir les champs suivants:</p>
              <form class="" method="post" action="./index.php?action=connexion">


                <div class="form-group">
                  <label for="username" class="cols-sm-2 control-label">Pseudo</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" name="pseudo" id="pseudo"  placeholder="Entrer votre pseudo"/>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="cols-sm-2 control-label">Mot de passe</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" name="password" id="password"  placeholder="Entrer votre mot de passe"/>
                    </div>
                  </div>
                </div>
                
                <div class="form-group ">
                  <input  type="submit" value="Connexion" id="button" class="btn btn-primary btn-lg btn-block login-button"/>

                </div>

              </form>
            </div>
          </div>
        </div>';

$contenu = ob_get_clean();
require('View/layout.php');

?>
