<h1>Novo Funcionário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
      <label>Data  de  Nascimento</label>
      <input type="date" name="dt_nascimento" class="form-control">
    </div>
    <div class="mb-3">
      <label>Salário</label>
      <input type="salario" name="salario" class="form-control">
    </div>
    <div class="mb-3">
      <label>Usuário</label>
      <input type="usuario" name="usuario" class="form-control">
    </div>
    <div class="mb-3">
      <label>Senha</label>
      <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>