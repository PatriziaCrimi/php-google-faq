<?php
  @include 'faq.php';
  @include 'content.php';
  /* ASSIGNMENT
    Per prima cosa, strutturiamo un array che contiene tutte le domande e le relative risposte.
    Utilizzando PHP stampiamo la lista delle FAQ all'interno della pagina html.
    Una volta che siamo riusciti ad ottenere un buon risultato con array e html+php ci dedichiamo alla grafica: utilizzando Sass, stiliamo header e footer e il contenuto della pagina.
  */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Domande frequenti - Privacy e termini - Google</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="public/app.css">
  </head>
  <body>
    <div id="page-wrapper">
      <!-- Header -->
      <header>
        <!-- Navbar -->
        <nav>
          <div class="container-fluid">
            <div class="row">
              <div id="nav-left">
                <!-- Display only in Mobile & Tablet -->
                <div class="burger-icon">
                  <i class="fas fa-bars"></i>
                </div>
                <h1> <?php echo($title); ?> </h1>
                <!-- Display only in Desktop  -->
                <a class="logo" href="#">
                  <img src="public/img/google_logo.svg" alt="Google logo">
                </a>
                <a class="section-title" href="<?php echo($section_details['url']); ?>">
                  <?php echo($section_details['title']); ?>
                </a>
              </div>
              <div id="nav-right">
                <a class="app" href="#">
                  <i class="fas fa-ellipsis-h"></i>
                  <i class="fas fa-ellipsis-h"></i>
                  <i class="fas fa-ellipsis-h"></i>
                </a>
                <a class="user" href="#">
                  <img src="public/img/user.jpg" alt="User picture">
                </a>
              </div>
            </div>
            <div class="row">
              <div id="nav-menu">
                <ul>
                  <?php
                    foreach ($nav_menu_links as $link_details) { ?>
                      <li>
                        <a href="<?php echo($link_details['url']); ?>">
                          <?php echo($link_details['link']); ?>
                        </a>
                      </li>
                      <?php
                    }
                    ?>
                </ul>
              </div>
            </div>
          </div>   <!-- Closing Nav container -->
        </nav>
      </header>
      <!-- Main -->
      <main>
        <div class="container">
          <div class="faq-wrapper">
            <?php
              foreach ($faq_list as $faq) { ?>
                <div class="faq-box">
                  <h2> <?php echo($faq[$question]) ?> </h2>
                  <?php
                  foreach ($faq[$answer] as $paragraph) { ?>
                    <p> <?php echo($paragraph); ?> </p>
                    <?php
                  }
                  ?>
                </div>
                <?php
              }
              ?>
          </div>
        </div>  <!-- Closing Main container -->
      </main>
      <!-- Footer -->
      <footer>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="language-choice">
                <label for="language">Cambia lingua:</label>
                <select id="language" name="languages">
                  <?php
                    foreach ($languages_list as $language_details) { ?>
                      <option value="<?php echo($language_details['code']); ?>">
                        <?php echo($language_details['language']); ?>
                      </option>
                    <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col">
              <ul class="footer-links">
                <?php
                foreach ($footer_links as $link_details) { ?>
                  <li>
                    <a href="<?php echo($link_details['url'])?>">
                      <?php echo($link_details['name'])?>
                    </a>
                  </li>
                  <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>  <!-- Closing Footer container -->
      </footer>
    </div>  <!-- Closing page wrapper -->
  </body>
</html>
