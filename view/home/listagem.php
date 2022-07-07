<hr>
<div class="container mt-2">

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach($produtos as $produto):?>
  <div class="col">
    <div class="card h-100">
      <img src="<?= $produto['foto'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $produto['nome'] ?></h5>
        <p class="card-text"><?= $produto['descricao'] ?></p>
      </div>
    </div>
  </div>

  <?php endforeach;?>
</div>


</div>