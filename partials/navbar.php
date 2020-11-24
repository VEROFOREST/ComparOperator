<header>
  <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <?php foreach($destinationCards as $card):?>
  <li><a href="../views/operators.php?destinationName=<?=$card->getLocation()?>"><?=$card->getLocation()?></a></li>
  
  <?php endforeach;?>
</ul>
<div>

  <nav class="navbar-fixed ">
   
    <div class="nav-wrapper ">
      <a href="../index.php" class="brand-logo center">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Sélectionner une destination<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    
  
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
          
        </div>
    
      </ul>
      
    </div>
    
    
    
       
    
  </nav>
  
   
   <?php include "./partials/buttonAdmin.php"?>
  <div>
  <ul class="sidenav" id="mobile-demo">
    <?php foreach($destinationCards as $card):?>
    <li><a href="../views/operators.php?destinationName=<?=$card->getLocation()?>"><?=$card->getLocation()?></a></li>
    <?php endforeach;?>
  </ul>
  </div>
  
</header>