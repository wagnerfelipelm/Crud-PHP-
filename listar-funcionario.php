<h1>Lista de Funcionários</h1>
<?php
  $sql = "SELECT * FROM funcionarios";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if ($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
      print "<th>#</th>";
      print "<th>Nome</th>";
      print "<th>Data de nacimento</th>";
      print "<th>Salário</th>";
      print "<th>Usuário</th>";
      print "<th>Senha</th>";
      print "<th>Ações</th>";
      print "</tr>";
    while($row = $res->fetch_object()) {
      print "<tr>";
      print "<td>".$row->ID."</td>";
      print "<td>".$row->nome."</td>";
      print "<td>".$row->dt_nascimento."</td>";
      print "<td>".$row->salario."</td>";
      print "<td>".$row->usuario."</td>";
      print "<td>".$row->senha."</td>";
      print "<td>
              <button onclick=\"location.href='?page=editar&ID=".$row->ID."';\" class='btn btn-success'>Editar</button>
              
              <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&ID=".$row->ID."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
      print "</tr>";
    }
    print "</table>"; 
  }else {
    print "<p class='alert alert-danger'>Não foi possível encontrar o resultado!</p>";
  }