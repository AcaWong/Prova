<html lang="pt-br">
    <head>
      <?php
      session_start();
      
      ?>
        <title>Pagina de Login</title>
        <meta  charset="utf-8">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="cssTreino.css">
    </head>
    <body>
                  
           
               
        
    
    
    <form method="POST" action="../controller/cadastrar.php" name="crudCadastro">
                
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Nome" name="campo_nome" required>
    
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="campo_email" required>
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="campo_senha" required>   
    </div>
    
   
    
  </div>
    
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rad_sexo" id="inlineRadio1" value="M">
  <label class="form-check-label" for="inlineRadio1">M</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="rad_sexo" id="inlineRadio2" value="F">
  <label class="form-check-label" for="inlineRadio2">F</label>
</div>
  
  <div class="form-row">
    
   <label for="inputEmail4">Telefone</label>
      <input type="tel" class="form-control"  placeholder="Telefone" name="campo_telefone" required>
    
    
  </div>  
  <button type="button"  class="btn btn-outline-dark" onClick="validacao()" > Confirmar </button><br>
<br><br>



                
            </form>
    
    </body>
</html>

        <script type="text/javascript" src="../script/scriptconc.js"></script>