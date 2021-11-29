<?php
        require_once "model/consultas.class.php";
        $consulta = new Consultas();
        $nomes = $consulta->listarUsuarios();
        ?> 
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
         <link href="../css/design.css" rel="stylesheet" type="text/css"/>

        <title>Lista</title>
    </head>
    <body>
        
        


        <div id="Geral"> 
            <div id="Menu">

                <h4 id="titulo">Sistema</h4>

                <div id="cmenu">
                    <ul class="nav flex-column">
                        <li class="but">
                            <button type="button"  class="btn btn-outline-dark" onClick="cadastrar()" > Cadastrar Usuario </button><br>
                        </li>                
                    </ul> 
                </div>

            </div>


            
            <form class="w-50 p-3 pt-5 mx-auto mt-5" method="post" name="excluir" action="controller/Excluir.php">
                
            <table border = "1">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Sexo</th>
                    <th>Telefone</th>   
                    <th>Excluir</th>                   


                <style>
                    th{
                        margin-top: 10px;
                    }
                </style>
                </tr>
                <?php
                 

                 $i= 0;
                foreach ($nomes as $item) {
                    
                    ?>

                    <tr>
                        <td><?php echo $item["id"]; ?></td>
                        <td><?php echo $item["nome"]; ?></td>
                        <td><?php echo $item["email"]; ?> </td>
                        <td><?php echo $item["senha"]; ?></td>
                        <td><?php echo $item["sexo"]; ?> </td>
                        <td><?php echo $item["telefone"]; ?> </td>
                        <td><INPUT TYPE="checkbox" NAME="chkExcluir<?php echo $i;?>" > </td>
                        <td>
                             <button type="button" onClick="Editar()" >Editar </button>            
                        </td>

                    </tr>
                    <?php
                     ++$i; }
                
                
                ?>
            </table>
            <br><br>
     <button type="button" class="btn btn-info" onClick="Excluir()" >Excluir</button>
     
     <?php
if(isset($_REQUEST["msg"])==true){        
          echo "Email e/ou senha invalidos";         
      }
?>
     <style>.btn-info{margin: auto; margin-left: 200px;} </style>
            </form>
            
            <?php   
                foreach ($nomes as $item) {                    
                    ?>
            <form method="post" action="controller/confEditar.php" name="editarUsuario"><input type="hidden" name="vlrID" value="<?php echo $item["id"]; ?>"></form>
          <?php       
      }
?>
        
        </div>
        <script type="text/javascript">
            
            function cadastrar()
            {
                location.href = "view/cadastro.php";
                
                }
             
            function Editar()
            {
                var resp = confirm("deseja mesmo editar esse usuario?");
            if(resp== true){
                document.forms["editarUsuario"].submit();
            }else{
                alert("você cancelou");
                }
            }
            
            
            function Excluir()
            {
                var resp = confirm("deseja mesmo excluir?");
            if(resp== true){
                document.forms["excluir"].submit();
            }else{
                alert("você cancelou");
                }
            }
           

        </script>
    </body>
</html>
