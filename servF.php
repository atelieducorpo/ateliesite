
<?php require('_header.php') ?>
<div class="container">
  <center>
    <div class="col-lg-9">

      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="galeria/i1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="galeria/i2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="galeria/i3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </center>
  <link rel="stylesheet" href="css/servM.css">


  <!-- -->
  <div class="row">

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/cortef.jpg"></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="cad.php">Cortes de cabelo Feminino</a>
          </h4>
          <h5>$24.99</h5>
          <p class="card-text">Traga uma pessoa e ganhe um desconto</p>
        </div>
        <div class="card-footer">
        <p><a href="agendar.php?serv=Corte de cabelo Feminino" target="_none" class="btn btnServ" data-serv="Corte de Cabelo">Agendar</a></p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/dep.jpg"> </a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="cad.php">Depilação Feminina</a>
          </h4>
          <h5>$24.99</h5>
          <p class="card-text">Faça depilação com cera quente ou fria e ganhe e ganhe uma hidratação na pele.</p>
        </div>
        <div class="card-footer">
        <p><a href="agendar.php?serv=Depilação Feminina" target="_none" class="btn btnServ" data-serv="Depilação Feminina">Agendar</a></p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/limpf.jpg"> </a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="cad.php">Limpeza de Pele Feminina</a>
          </h4>
          <h5>$24.99</h5>
          <p class="card-text">A limpeza de pele tem desconto de 10% no pagamento em dinheiro</p>
        </div>
        <div class="card-footer">
        <p><a href="agendar.php?serv=Limpeza de pele Feminina" target="_none" class="btn btnServ" data-serv="Limpeza de pele Feminina">Agendar</a></p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/sobran.jpg"></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="cad.php">Sobrancelha Feminina</a>
          </h4>
          <h5>$24.99</h5>
          <p class="card-text">Faça a Sobrancelha e ganhe uma aplicação e henna na próxima vez</p>
        </div>
        <div class="card-footer">
        <p><a href="agendar.php?serv=Sobrancelha Feminina" target="_none" class="btn btnServ" data-serv="Sobrancelha Feminina">Agendar</a></p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/massmod.jpg"></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="cad.php">Massagem Model. Feminina</a>
          </h4>
          <h5>$24.99</h5>
          <p class="card-text">Venha fazer uma Massagem modeladora e ganhe um gel redutor.</p>
        </div>
        <div class="card-footer">
        <p><a href="agendar.php?serv=Massagem Model. Feminina" target="_none" class="btn btnServ" data-serv="Massagem Model. Feminina">Agendar</a></p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="img/unhas.jpg"> </a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="cad.php">Unhas Feminina</a>
          </h4>
          <h5>$24.99</h5>
          <p class="card-text">Os Serviços de unhas tem 10% de desconto no pagamento em dinheiro.</p>
        </div>
        <div class="card-footer">
        <p><a href="agendar.php?serv=Unhas Feminina" target="_none" class="btn btnServ" data-serv="Unhas Feminina">Agendar</a></p>
      </div>
      </div>
    </div>

  </div>
  <!-- /.row -->
</div>

<script src="js/servM.js"></script>

<?php require('_footer.php') ?>