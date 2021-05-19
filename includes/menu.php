 <?php
$active_inicio="";
$active_cuadros="";
$active_poesia="";
$active_hablando="";
$active_contacto="";
$active_escultura="";
switch ($pagina) {
    case "inicio":
       $active_inicio="class='active'"; 
        break;
    case "miscuadros":
        $active_cuadros="class='active'";
        break;
    case "contacto":
        $active_contacto="class='active'";
        break;
	
	case "hablando":
        $active_hablando="class='active'";
        break;
	//case "patrocinadores":
    //    $active_patrocinadores="id='current'";
    //    break;	
	
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
            <li><a href="index.php" <?php echo $active_inicio?>>Juan</a></li>
            <li><a href="miscuadros.php" <?php echo $active_cuadros?>>Mis Cuadros</a></li>
            <li><a href="poesia.php" <?php echo $active_poesia?>>Poesía</a> </li>
            <li><a href="esculturas.php" <?php echo $active_escultura?>>Escultura</a> </li>
            <li><a href="hablando.php" <?php echo $active_hablando?>>Hablando</a> </li>
            
            <li><a href="contact.php" <?php echo $active_contacto?>>Contacto</a></li>
          </ul>
        </nav>
      </div><!-- End Menu -->
      
      <div class="sixteen columns"><hr /></div>
      
    </div><!-- End Container -->
  </header><!-- <<< End Header >>> -->