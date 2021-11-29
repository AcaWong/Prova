
function validacao(){
    
    
    
    var cont_nome= document.forms["crudCadastro"].campo_nome.value;
    if(cont_nome==""){
        alert("Preencha o campo nome");
        return;
    }
    
    var cont_email= document.forms["crudCadastro"].campo_email.value;
    if(cont_email==""){
        alert("Preencha o campo email");
        return;
    }
     
     var cont_senha= document.forms["crudCadastro"].campo_senha.value;
    if(cont_senha==""){
        alert("Preencha o campo senha");
        return;
    }
    
        var totalOp= document.forms["crudCadastro"].rad_sexo.length;
        var Op_selecionada= null;
        for(var i=0; i< totalOp;i++){
           if( document.forms["crudCadastro"].rad_sexo[i].checked==true){
            Op_selecionada=document.forms["crudCadastro"].rad_sexo[i].value;
           }
        }
        
        if(Op_selecionada==null){
            alert("Selecione o sexo");
            return;
        }
        
    var cont_tel= document.forms["crudCadastro"].campo_telefone.value;
    if(cont_senha==""){
        alert("Preencha o campo telefone");
        return;
    }
    
document.forms["crudCadastro"].submit();
}

