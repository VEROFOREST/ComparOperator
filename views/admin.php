
<?php 
require '../helpers/init.php';

// include "../helpers/autoload.php";


function loadClass($classe)
{
    require_once ('../entities/'.$classe.'.php') ;
    
}
spl_autoload_register('loadClass');

$DestinationsManager = new DestinationsManager($db);
$OperatorsManager = new OperatorsManager($db);
$OperatorIds = $OperatorsManager->rawsOperators();
$standardOperators=$OperatorsManager->getStandardOperators();

// echo "<pre>". var_export($OperatorIds, true) . "</pre>";


include "../partials/head.php"
?>
<a href="../index.php" class="brand-logo center">Retour au site</a>
<body>

<div class="row">


 <!-- TAB ------------------------------------------ -->
    <div class="col s12">
      <ul class="tabs">
        <li class="tab active col s4  red-text text-darken-4"><a href="#test1">Ajouter un Tour Opérateur</a></li>
        <li class="tab active col s4 red-text text-darken-4"><a href="#test2">Ajouter une Destination</a></li>
        <li class="tab active col s4 red-text text-darken-4"><a href="#test3">Modifier l'abonnement du Tour Opérateur</a></li>
      </ul>
    </div>


  <!-- operator---------------------------------------------------------------------- -->
    <div id="test1" class="col s12">
        <div class="row">
          <div class="container">
            <form action="/data/adminForm.php" method="POST" class="col s12">
              <div class="row">

                <div class="input-field col s12">
                  <input id="name" name="name" type="text" class="validate">
                  <label for="name">Nom</label>
                </div>
                
                <div class="input-field col s12">
                  <input id="grade" name="grade" type="text" class="validate">
                  <label for="Grade">Avis</label>
                </div>

               
               <div class = "file-field input-field col s12">
                  <div class = "btn red lighten-5 red-text text-darken-4">
                     <span>Fichier</span>
                     <input type ="file" />
                  </div>
                  
                  <div class = "file-path-wrapper"> 
                     <input class = "file-path validate" type = "text" placeholder="Logo" name="logo"/>
                  </div>
               </div>

                <!-- Switch -->
               <div class="input-field col sm12">
                  <div class="checkbox-container">
                    <label>
                      <input type="checkbox" name="is_premium" value="0"/>
                      <span>Standard</span>
                    </label>
                  

                    <label>
                      <input type="checkbox" name="is_premium" value="1"/>
                      <span>Premium</span>
                    </label>
                  </div>
              </div>
            


              <div class="input-field col s12">
                  <input id="link" name="link" type="text" class="validate">
                  <label for="link">site Web</label>
              </div>


              <div>
                <button class="btn waves-effect red lighten-5 red-text text-darken-4 right" type="submit" name="action">Ajouter un Tour Operateur
                <i class="material-icons right">send</i>
              </button>
              </div>
             
            </div>
            <div>
              <button class="btn waves-effect red lighten-5 red-text text-darken-4 right" type="submit" name="action">Supprimer un Tour Operateur
              <i class="material-icons right">send</i>
            </button>
            </div> 
                                
                 
           </form>
           <div>
              <button class="btn waves-effect red lighten-5 red-text text-darken-4 right" type="submit" name="action">Modifier un Tour Operateur
              <i class="material-icons right">send</i>
            </button>
            </div> 
         </div> 
       </div>
    </div>



  <!-- destinations --------------------------------------------------------------------->
    <div id="test2" class="col s12 ">
      <div class="row">
        <div class="container">
          <form action="/data/adminForm.php" method="POST" class="col s12 ">
            <div class="row">
              <div class="input-field col s12 ">
                <select name="id_tour_operator" >
                  <option value="" disabled selected>Choisissez l'identifiant de l'opérateur </option>
                  <?php foreach($OperatorIds as $OperatorId):?>
                  <option  value="<?=$OperatorId->getId()?>"><?=$OperatorId->getId()?></option>
                  <?php endforeach;?>
                </select>
                <label >Numéro Tour opérateur</label>
              </div>
              
             

              <div class="input-field col s12">
                <input  id="name" name="location" type="text" class="validate ">
                <label for="name">Destination</label>
              </div>
              
              <div class="input-field col s12">
                <input id="grade" name="price" type="text" class="validate">
                <label for="Grade">Prix</label>
              </div>

              
              <div class = "file-field input-field col s12">
                <div class = "btn red lighten-5 red-text text-darken-4">
                    <span>Image destination</span>
                    <input type ="file" />
                </div>
                
                <div class = "file-path-wrapper"> 
                    <input class = "file-path validate" type = "text" placeholder="Image Destination" name="card_pic"/>
                </div>
              </div>
              <div class = "file-field input-field col s12">
                <div class = "btn red lighten-5 red-text text-darken-4">
                    <span>Image Parallax1</span>
                    <input type ="file" />
                </div>
                
                <div class = "file-path-wrapper"> 
                    <input class = "file-path validate" type = "text" placeholder="Image Parallax_1" name="parallax_1"/>
                </div>
              </div>
              <div class = "file-field input-field col s12">
                <div class = "btn red lighten-5 red-text text-darken-4">
                  <span>Image Parallax2</span>
                  <input type ="file" />
                </div>
                
                <div class = "file-path-wrapper"> 
                    <input class = "file-path validate" type = "text" placeholder="Image Parallax2" name="parallax_2"/>
                </div>
              </div>

              
              <div>
                <button class="btn waves-effect red lighten-5 red-text text-darken-4 right" type="submit" name="action">Ajouter une destination
                <i class="material-icons right">send</i>
                </button>
              </div>
              
            </div>
            <div>
                <button class="btn waves-effect red lighten-5 red-text text-darken-4 right" type="submit" name="action">Modifier une destination
                <i class="material-icons right">send</i>
                </button>
              </div>
          </form>
        </div> 
      </div>
 
    </div>


  <!-- modification abonnement --------------------------------------------------------------------->
  <div id="test3" class="col s12">
    <div class="row">
        <div class="container">
          <form action="/data/adminForm.php" method="POST" class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <select name="nameStandardOperator">
                  <option value="" disabled selected>Choisissez le nom de l'operateur </option>
                  <?php foreach($standardOperators as $standardOperator):?>
                  <option class="red lighten-1" value="<?=$standardOperator->getName()?>"><?=$standardOperator->getName()?></option>
                  <?php endforeach;?>
                </select>
                <label>Nom des opérateurs Standard</label>
              </div>
              
            </div>
                      <!-- Switch -->
            <div class="switch">
              <label>
                Standard
                <input type="checkbox" name ="switch" value="1">
                <span class="lever"></span>
                Premium
              </label>
            </div>
            
            <div>
              <button class="btn waves-effect right red lighten-5 red-text text-darken-4" type="submit" name="action">Modifier l'abonnement
              <i class="material-icons right">send</i>
              </button>
            </div>
         
          </form>
        </div>
    </div>
  </div>
    
</div>
        


  
        

    

 <!-- END of body content ------------------------------------------------------------------------------------------>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<!-- Materialize Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Link to JavaScript file-->

<script src="../assets/js/script.js"></script>

            


</body>       