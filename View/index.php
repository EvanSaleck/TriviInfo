<?php 
include('./elements/head.php'); 
?>
<div class="modal z-max" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rejoindre une partie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <input type="text" class="form-control" placeholder="Pseudonyme" aria-label="Pseudonyme">
        <input type="text" class="form-control mt-2" placeholder="Code de la partie" aria-label="Code de la partie" onkeyup="this.value = this.value.toUpperCase();">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" id="JoinGame">Rejoindre la partie</button>
      </div>
    </div>
  </div>
</div>
<body class="user-select-none">
  <nav class="navbar bg-body-secondary fixed-top">
    <div class="container-fluid">
      <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" class="navbar-brand" href="index.php">      <span class="navbar-toggler-icon"></span></a>
      <div class="offcanvas offcanvas-start rounded-end-2" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center align-middle flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Accueil</a>
            </li>

            <hr>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Règles du jeu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Créer une partie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lancé de dés</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Questions</a>  
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <main>
    <div class="position-absolute top-50 start-0 translate-middle-y">
      <div class="text-center ">
        <h1>Bienvenue sur le jeu de plateau Trivi-info</h1>

        <hr class="ms-2 " style="width: 95%;">

        <img src="/triviinfo/assets/img/icons/logo.png" alt="logo" class="logo" width="250px" height="200px">
      </div>

      <div class="text-center mt-5 ">
        <a href="CreateGame.php" class="rounded-pill btn btn-secondary">Créer une partie</a> <br> <p class="mt-2"> Ou </p> 
        <a class="rounded-pill btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Rejoindre une partie</a>
    </div>

  </main>
</body>
<script src="/triviinfo/assets/JS/index.js"></script>

<?php 
include('./elements/footer.php');
?>