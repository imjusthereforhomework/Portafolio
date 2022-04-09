<body style="color: black ;">
<nav class="navbar navbar-expand-lg navbar-dark bg-upalt">
  <div class="container-fluid">
    <a class="navbar-brand" href=" "><img src="sys/libs/images/aguslog.jpg" alt="" width="40" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" onclick="showView('PORTAFOLIO')">PORTAFOLIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showView('HABILIDADES') ">HABILIDADES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showView('EXPERIENCIA') ">EXPERIENCIA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showView('CONTACTOS') ">CONTACTOS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section>
    <div id="pageView">
        <?php include "app/vistas/Home/Home.php"; ?>
    </div>
</section>
