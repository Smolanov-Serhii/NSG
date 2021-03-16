<?php
include("template-parts/header.php");
include("template-parts/breadcrumbs.php");
?>
    <div class="page-404-global container-wide">
        <section class="page-404">
            <h1 class="page-404__title">Page not found</h1>
            <div class="page-404__image">
                <picture>
                    <source srcset="images/img-test/404-bg.png" media="(max-width: 600px)" type="image/webp">
                    <img src="images/img-test/404-bg.png" alt="" class="404">
                </picture>
            </div>
            <div class="page-404__content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing duis interdum est nullam pulvinar mauris.
                    Id libero in magna consequat cras. Sollicitudin at pharetra auctor gravida eu varius nisl.
                    Ultricies amet, vel viverra vestibulum velit aliquet.</p>
            </div>
            <a href="index.php" class="page-404__lnk full-width-button">
                Home page
            </a>
        </section>
    </div>

<?php
include("template-parts/footer.php");
?>