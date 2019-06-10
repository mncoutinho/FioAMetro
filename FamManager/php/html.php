<?php
$htmlhead = '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Pedro Coutinho">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>FaMManager - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbars/">
    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../../style.css" rel="stylesheet">
<!--script site-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/10296c91e9.js"></script>
   <script>     
  function funcao1()
{
alert("O Registro Foi Gravado Com Sucesso!");
}
</script>  
  </head>
  <body>

         <div id="logo">
        <img src="../../logo_fam.gif" alt="">
    </div> 
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
        </button>
  <div class="collapse navbar-collapse" id="navbarsExample05">
    <ul class=" navbar-nav mr-auto">
    
      <li class="nav-item dropdown">
        <button type="button" class="btn btn-dark" ><a href="home.php" style="text-decoration: none; color: #ffffff">Home</a></button>
        
      </li>
    </ul>
    
     <ul class=" navbar-nav mr-auto">
      
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nota</a>
        <div class="btn btn-secondary dropdown-menu" aria-labelledby="dropdown04">
          <a class="btn btn-secondary dropdown-item" href="geranota.php">Nova nota</a>
          <a class="btn btn-secondary dropdown-item" href="consultanota.php">Consultar nota</a>
        
        </div>
      </li>
    </ul>
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cliente</a>
        <div class="btn btn-secondary dropdown-menu" aria-labelledby="dropdown05">
          <a class="btn btn-secondary dropdown-item" href="cadastrarcliente.php">Novo cliente</a>
          <a class="btn btn-secondary dropdown-item" href="consultacliente.php">Consultar cliente</a>
        </div>
      </li>
    </ul>
     <ul class="navbar-nav mr-auto">
      
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Peça</a>
        <div class="btn btn-secondary dropdown-menu" aria-labelledby="dropdown05">
          <a class="btn btn-secondary dropdown-item" href="cadastrapeca.php">Nova peça</a>
          <a class="btn btn-secondary dropdown-item" href="consultapeca.php">Editar peça</a>
        </div>
      </li>
    </ul>
     <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="consultaservico.php" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviço</a>
        <div class="btn btn-secondary dropdown-menu" aria-labelledby="dropdown05">
          <a class="btn btn-secondary dropdown-item" href="cadastraservico.php">Novo serviço</a>
          <a class="btn btn-secondary dropdown-item" href="consultaservico.php">Editar serviço</a>
       </div>
      </li>
    </ul>
       <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Relatório</a>
        <div class="btn btn-secondary dropdown-menu" aria-labelledby="dropdown05"> 
         <a class="btn btn-secondary dropdown-item" href="relatorio.html">Relatório</a>
       </div>
      </li>
    </ul>
    
  </div><a href="logout.php?token='.md5(session_id()).'"> 
  <button type="button" class="btn btn-dark"  >Logout</button>
       </a>
       
</nav>';
$htmlfooter = ' <footer id="rodape">
       Fio a Metro - TODOS OS DIREITOS RESERVADOS  
    </footer>  
</body>
</html>';
?>