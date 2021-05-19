 
<?php
$active_cuadros="";
$active_poesia="";
$active_escultura="";
switch ($pagina) {
    
    case "miscuadros":
        $active_cuadros="class='active'";
        break;
	
	case "poesia":
        $active_poesia="class='active'";
        break;
		
	case "esculturas":
        $active_escultura="class='active'";
        break;	
}
?>


 <header>
    <div class="container clearfix">
    
      <div class="one-third column">
        <div class="logo">
        <a href="index.html">
          <img src="images/logo.png" alt="Crevision - Creative Template" />
        </a>
        </div> 
      </div><!-- End Logo --> 
       
      <div class="two-thirds column">
        <nav id="menu" class="navigation">
          <ul id="nav">
            <li><a href="index.php" <?php echo $active_inicio?>>Intranet</a></li>
            <li><a href="altaCuadros.php" <?php echo $active_cuadros?>>Gestión Cuadros</a></li>
            <li><a href="altaPoesias.php" <?php echo $active_poesia?>>Gestión Poesías</a> </li>
            <li><a href="altaEsculturas.php" <?php echo $active_escultura?>>Gestión Esculturas</a> </li>
          </ul>
        </nav>
      </div><!-- End Menu -->
      
      <div class="sixteen columns"><hr /></div>
      
    </div><!-- End Container -->
  </header><!-- <<< End Header >>> -->