<h1>Cadastrar-usuario</h1>
<form action="?page=salvar" method="POST">
     <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome"
        class="form-control">

        <label>Email</label>
        <input type="email" name="email"
        class="form-control">

        <label>Senha</label>
        <input type="password" name="senha"
        class="form-control">

        <label>data</label>
        <input type="date" name="data_nascimento"
        class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
    </div>
</form>