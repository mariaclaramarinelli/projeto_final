    <!-- Conteúdo da Página -->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="<?= $produto['foto']?>">
            </div>

            <div class="col-6">
                <h5> <?= $produto['nome']?> </h5>
                <p>Marca: <?= $produto['nome']?> </p>
                <strong>R$ <?= $produto['preco']?> </strong>
            </div>

        </div>

        <div>
            <h6>Detalhes</h6>
            <?= $produto['descricao']?>
        </div>
        
    </div>

   