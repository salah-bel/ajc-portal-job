<div class="card border-primary mb-3 col-5" >
    <div class="card-header d-flex justify-content-between ">
            <?= $job["title"] ?>
            <a class="btn btn-primary" href="">Postuler</a>
        </div>
    <div class="card-body">
        <h4 class="card-title"><?= $job["technologies_used"] ?></h4>
        <p class="card-text"><?= $job["description"] ?></p>
      
    </div>
</div>