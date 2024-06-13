// Botão excluir 

function excluir(id) {
     var resposta = confirm("Deseja remover esse registro?");
     
     if (resposta == true) {
          window.location.href = "imagem_excluir.php?id="+id;


     }
}