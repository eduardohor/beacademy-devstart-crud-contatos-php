<h1>Cadastro</h1>

<hr>

<form action="" method="post">
    <input value="<?php echo $dados[0]; ?>" name="nome" class="form-control mb-2" type="text" placeholder="Nome">
    <input value="<?php echo $dados[1]; ?>" name="email" class="form-control mb-2" type="text" placeholder="Email">
    <input value="<?php echo $dados[2]; ?>" name="telefone" class="form-control mb-3" type="text"
        placeholder="Telefone">

    <button class="btn btn-primary">Enviar</button>

</form>