<h1>Editar Funcionário</h1>
<?php
  $sql ="SELECT * FROM funcionarios WHERE ID=".$_REQUEST["ID"];
  $res = $conn->query($sql);
  $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="ID" value="<?php 
      print $row->ID; ?>">
    <div class="mb-3">
      <label>Nome</label>
      <input type="text" name="nome" value="<?php print $row->nome; ?>"class="form-control">
    </div>
    <div class="mb-3">
      <label>Data  de  Nascimento</label>
      <input type="date" name="dt_nascimento" value="<?php print $row->dt_nascimento; ?>" class="form-control">
    </div>
    <div class="mb-3">
      <label>Salário</label>
      <input type="salario" name="salario" value="<?php print $row->salario; ?>"class="form-control">
    </div>
    <div class="mb-3">
      <label>Usuário</label>
      <input type="usuario" name="usuario" value="<?php print $row->usuario; ?>"class="form-control">
    </div>
    <div class="mb-3">
      <label>Senha</label>
      <input type="password" name="senha" value="<?php print $row->senha; ?>"class="form-control">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>