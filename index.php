<!DOCTYPE html>
<html lang="fr">

  <?php include 'partials/head.php'; ?>

  <body id="page-top">

    <?php include 'partials/navbar.php'; ?>

    <header id="home" class="d-flex justify-content-center align-items-center text-center text-light" data-parallax="scroll" data-image-src="/img/header.jpg">
      <div class="container-fluid bg-primary py-5">
        <h1>Étincelle de Vie</h1>
        <h2 class="h3 d-none d-md-inline-block">Le bien être vient à vous</h2>
        <hr class="d-none d-md-block" />
        <a href="#about" class="page-scroll btn btn-outline-light text-center sr-button d-none d-md-inline-block">En savoir plus</a>
      </div>
    </header>

    <!-- Notre entreprise -->
    <section class="bg-primary text-light text-center py-5" id="about">
      <h2 class="h2">Le bien-être comme priorité</h2>
      <hr />
      <div class="container">
        <p class="text-justify">
          Dans une société où le travail occupe une place considérable, le bien-être
          en <strong>entreprise</strong> devrait être une <strong>priorité</strong>.
          Aujourd’hui, un nombre croissant de managers commence à réaliser l’importance
          d’assurer le <strong>bien-être</strong> en interne, pour leurs collaborateurs
          et pour eux-mêmes. C’est pourquoi certaines entreprises mettent en place
          des programmes visant le maintien de la <strong>santé physique</strong>
          et <strong>psychique</strong> de leurs salariés.<br />
          <br />
          Le <strong>massage</strong> trouve également, tout-à-fait sa place dans
          les <strong>structures pour séniors</strong> dans le cadre de l’amélioration
          de la <strong>qualité de vie</strong> des résidents en contribuant à
          soulager les douleurs et à rompre l’isolement.<br />
          <br />
          Il est aussi possible de profiter d’une pause <strong>bien-être</strong>
          à la carte pour les <strong>particuliers</strong> désireux de profiter
          des bienfaits d’un <strong>massage</strong> ou d’un <strong>soin énergétique</strong>
          (prestations au Garden blues à Poitiers, à la Maison du Bien-Etre à Neuville
          de Poitou, à Quincay).
        </p>
      </div>
      <a href="#portfolio" class="page-scroll btn btn-outline-light text-center sr-button">Voir nos prestations</a>
    </section>

    <!-- Nos prestations -->
    <section class="bg-light text-primary text-center py-5" id="portfolio">
      <h2 class="section-heading text-center text-primary">Nos prestations</h2>
      <hr />
      <div class="container-fluid px-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-sm-4 col-xs-12">
            <a href="/entreprises.php" class="portfolio-box">
              <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="Pour les entreprises">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    Pour les entreprises
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-4 col-xs-12">
            <a href="/structures-specialisees.php" class="portfolio-box">
              <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="Pour les structures spécialisées">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    Pour les structures spécialisées
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-4 col-xs-12">
            <a href="/particuliers.php" class="portfolio-box">
              <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="Pour les particuliers">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-name">
                    Pour les particuliers
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <a href="#services" class="page-scroll btn btn-outline-primary text-center mt-5 sr-button">Voir nos tarifs</a>
    </section>

    <!-- Nos tarifs -->
    <section id="services" class="bg-primary text-light text-center py-5">
      <h2 class="section-heading">Nos tarifs</h2>
      <hr />
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-4 col-lg-5 col-md-10">
            <div class="service-box">
              <i class="fa fa-4x fa-users text-light sr-icons"></i>
              <h3>Pour les entreprises</h3>
              <ul class="text-left">
                <li>Le Amma (massage assis et habillé) de 15 minutes : 90 Euros (Tarif horaire de base)</li>
                <li>Les massages allongés : 100 Euros (Tarif horaire de base)</li>
                <li>Formation en gestion du stress « Bien-être et sérénité au travail » : Nous contacter pour obtenir gratuitement un devis et une documentation</li>
              </ul>
              <p class="text-left mb-0">Pour les entreprises, nous appliquons un tarif dégressif en fonction des commandes.</p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 col-md-10">
            <div class="service-box">
              <i class="fa fa-4x fa-user text-light sr-icons"></i>
              <h3>Pour les particuliers</h3>
              <ul class="text-left">
                <li>Le Amma (massage assis et habillé) de 15 minutes : 110 Euros (Tarif horaire de base)</li>
                <li>Les massages allongés : 110 Euros (Tarif horaire de base)</li>
                <li>Formation en gestion du stress « Bien-être et sérénité au travail » : sur devis</li>
              </ul>
              <p class="text-left mb-0">
                Remarques :
                <br />
                Tous nos tarifs sont majorés de 30% dès 20h. Dès 22h ainsi que les dimanches et jours fériés, nos tarifs sont majorés de 100%.
              </p>
            </div>
          </div>
        </div>
      </div>
      <a href="#contact" class="page-scroll btn btn-outline-light text-center mt-5 sr-button">Contactez nous</a>
    </section>

    <!-- Contact -->
    <section id="contact" class="bg-light text-primary text-center py-5">
      <h2 class="section-heading">Contact</h2>
      <hr />
      <div class="container">
        <img class="img-responsive" src="img/contact.jpg" style="float:left; padding-right:5px;" alt="D-stress : Contact" />
        <p class="text-justify">
          Notre rigueur nous permet de travailler avec des clients prestigieux tels que Nike, Technicolor, DCNS, Bavaria ou bien des personnalités du monde de la télévision.
          <br />
          Dès lors n’hésitez pas à nous contacter. Notre équipe se fera un plaisir de répondre à vos questions. Votre confiance constituera la meilleure récompense pour nos techniques de massages apprises auprès des plus grands professeurs ainsi que pour la mise en pratique minutieuse de nos compétences en gestion du stress, en traumatologie et en anatomie acquises au travers de notre expérience et diplômes universitaires
        </p>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-2 col-lg-offset-2 text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>
              06 14 48 01 04
              <br />
              09 54 39 69 81
            </p>
          </div>
          <div class="col-lg-2  text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a href="mailto:contact@dstress-massages.fr">contact@dstress-massages.fr</a>
            </p>
          </div>
          <div class="col-lg-2 text-center">
            <i class="fa fa-linkedin-square fa-3x sr-contact"></i>
            <p>
              <a href="https://www.linkedin.com/in/yannick-coignard-256770138" target="_blank">linkedin</a>
            </p>
          </div>
          <div class="col-lg-2 text-center">
            <i class="fa fa-facebook-official fa-3x sr-contact"></i>
            <p>
              <a href="https://www.facebook.com/dstressentreprise" target="_blank">facebook</a>
            </p>
          </div>
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <i class="fa fa-graduation-cap fa-3x sr-contact"></i>
            <p>
              Activité de formation déclarée (IDF) : 117 883 282 78
              <br />
              Siret : 491608840000 30
            </p>
          </div>
        </div>
      </div>
    </section>

    <?php include 'partials/footer.php'; ?>

    <?php include 'partials/scripts.php'; ?>

  </body>

</html>
