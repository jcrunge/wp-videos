  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?> <span class="glyphicon glyphicon-fire">  </span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav navbar-nav', //Aquí se modifica la clase para que funcione con bootstrap (la clase que iba en ul)
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
      
      <!--Lado izq del menu-->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Horarios<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Lunes       8:00-20:00</a></li>
            <li><a href="#">Martes      8:00-20:00</a></li>
            <li><a href="#">Miercoles   8:00-20:00</a></li>
            <li><a href="#">Jueves      8:00-20:00</a></li>
            <li><a href="#">Viernes     9:00-24:00</a></li>
            <li><a href="#">Sabado      9:00-22:00</a></li>
            <li><a href="#">Domingo     9:00-19:00</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Días Festivos</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
