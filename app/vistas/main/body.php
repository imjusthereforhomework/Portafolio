<body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <a class="navbar-brand" href=" "><img src="sys/libs/images/aguslog.jpg" alt="" width="40" height="40"></a>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link" aria-current="page" href="#" onclick="showView('PORTAFOLIO')">PORTAFOLIO</a>
        <a class="nav-link" href="#"onclick="showView('HABILIDADES') ">HABILIDADES</a>
        <a class="nav-link" href="#"onclick="showView('EXPERIENCIA') ">EXPERIENCIA</a>
        <a class="nav-link" href="#"onclick="showView('CONTACTOS') ">CONTACTOS</a>
      </nav>
    </div>
  </header>
<section>
    <div id="pageView">
        <?php include "app/vistas/Home/Home.php"; ?>
    </div>
</section>
