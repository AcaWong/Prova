  <?php require_once "../model/consultas.class.php";

        $consulta = new Consultas();
        $nomes = $consulta->listarUsuarios();
        //$consulta->criarChamada($dataChamada);
         
        $i= 0;
        foreach ($nomes as $item) {
        
         $id = (isset($_POST["chkExcluir$i"]))?1:0;
         
         if($id==1){
          
         $consulta->excluirUsuario($item["id"]);
          
         }
         
         ++$i;
                
        }
        header("Location:../index.php");
        
        
        ?>