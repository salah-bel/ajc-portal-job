<?php
require_once __DIR__ . '/../partials/header.html.php';

?>
<main class="container">
    <!--SECTION -->
    <section id="jumbotron">
        <div class="jumbo-content h-100  w-100 d-flex justify-content-start align-items-center p-5">
            <h2 class="w-50 text-light">Notre job, vous aider
                à choisir le vôtre parmi
                <span class="badge bg-warning">2000</span> offres
            </h2>
        </div>

    </section>

    <!--LISTE DES OFFRES-->
    <h1 class="m-5 text-center text-black">Nos <?= count($offers) ?> dernieres offres </h1>
    <section class="d-flex flex-wrap w-75 justify-content-evenly m-auto">
        <?php foreach ($offers as $job) :
            require dirname(__DIR__)  . '/partials/job-card.html.php';
        endforeach ?>
    </section>
    <!-- aller vers toutes les offres -->
    <div class="d-flex justify-content-center">
        <a href="/offers-list.html.php" class="btn btn-secondary px-5 py-2 mt-3">Voir toutes les offres</a>
    </div>
    <!--LISTE DES COMPAGNIES-->
    <h1 class="m-5 text-center text-black">Entreprise partenaires </h1>
    <section class="d-flex flex-wrap w-75 justify-content-evenly m-auto">
        <?php foreach ($companies as $company) :
            require dirname(__DIR__)  . '/partials/company-card.html.php';
        endforeach ?>
    </section>
    <!-- aller vers toutes les offres -->
    <div class="d-flex justify-content-center">
        <a href="/companies-list.html.php" class="btn btn-secondary px-5 py-2 mt-3 ">Des entreprises
        qui recrutent</a>
    </div>
</main>
<?php
require_once __DIR__ . '/../partials/footer.html.php';
