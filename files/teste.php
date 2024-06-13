<html>
<script>
function removerTR(id){
        id.remove();
}

function adicionarTR(){
        // // Quantidade de linha da tabela
        var qtdRows = document.getElementById("campos").rows.length;

        var table = document.getElementById("campos");
        var newRow = table.insertRow(qtdRows);
        var chave = "composto_" + qtdRows
        newRow.id = chave;

        // add cells to the row
        var cel1 = newRow.insertCell(0);
        var cel2 = newRow.insertCell(1);
        var cel3 = newRow.insertCell(2);
        var cel4 = newRow.insertCell(3);
        var cel5 = newRow.insertCell(4);
        var cel6 = newRow.insertCell(5);
        var cel7 = newRow.insertCell(6);

        // add values to the cells
        cel1.innerHTML = "";
        cel2.innerHTML = "";
        cel3.innerHTML = "";
        cel4.innerHTML = "0.00";
        cel5.innerHTML = "1";
        cel6.innerHTML = "UN";
        cel7.innerHTML = "<input type='text' value='" + chave + "'><a href='#' onClick='removerTR(" + "composto_" + qtdRows + ");'>Excluir</a>";
}
</script>
<body>
	
<table class="table table-bordered">
    <button onclick="adicionarTR();">Add</button>
    <thead>
        <tr class="active">
            <th>Cód. produto</th>
            <th>Categoria</th>
            <th>Produto</th>
            <th>Valor</th>
            <th class="text-center">Quantidade</th>
            <th class="text-center">Tipo</th>
            <th><center>Ação</center></th>
        </tr>
    </thead>
    <tbody id="campos">
        <tr>

        </tr>

    </tbody>
</table> 
    <p>&nbsp;</p>
    <table width="200" border="1">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
</body>
</html>