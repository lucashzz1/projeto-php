<h3>Fale Conosco</h3>
<form action="salvar_mensagem.php" method="POST">
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Seu nome" name="nome">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Mensagem:</label>
        <textarea type="text" class="form-control" id="pwd" placeholder="Mensagem" name="mensagem"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>