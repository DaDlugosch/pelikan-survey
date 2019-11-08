<?php include "head.html" ?>
<?php include "header.html" ?>
<main>
    <div class="container">
        <section class="form col-lg-12">
            <div class="row">
                <h1 class="col-lg-12 text-center py-3">Moje obľúbené ročné obdobie je:</h1>
            </div>
            <div class="row form--links py-4 mx-3 justify-content-around">
                <a href="javascript:void(0)" onclick="window.location.href='otazka4_jar.php';" class="d-flex flex-column mb-4 mb-lg-0">
                    <figure class="image-cropper">
                        <img src="assets/images/jar.png" alt="Jar">
                    </figure>
                    <h2 class="text-center">Jar</h2>
                </a>
                <a href="javascript:void(0)" onclick="window.location.href='otazka4_leto.php';" class="d-flex flex-column mb-4 mb-lg-0">
                    <figure class="image-cropper">
                        <img src="assets/images/leto.png" alt="Leto">
                    </figure>
                    <h2 class="text-center">Leto</h2>
                </a>
                <a href="javascript:void(0)" onclick="window.location.href='otazka4_jesen.php';" class="d-flex flex-column mb-4 mb-lg-0">
                    <figure class="image-cropper">
                        <img src="assets/images/jesen.png" alt="Jeseň">
                    </figure>
                    <h2 class="text-center">Jeseň</h2>
                </a>
                <a href="javascript:void(0)" onclick="window.location.href='otazka4_zima.php';" class="d-flex flex-column mb-4 mb-lg-0">
                    <figure class="image-cropper">
                        <img src="assets/images/zima.png" alt="Zima">
                    </figure>
                    <h2 class="text-center">Zima</h2>
                </a>
            </div>
        </section>
    </div>
</main>
<?php include "footer.html"?>