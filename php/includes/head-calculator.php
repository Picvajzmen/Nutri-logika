<!DOCTYPE html>
<html lang="sr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8N2WRBFNYH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'G-8N2WRBFNYH');
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />

    <style>
      @font-face {
      font-family: 'Oswald';
      src: url('css/fonts/Oswald-SemiBold.woff2') format('woff2'),
          url('css/fonts/Oswald-SemiBold.woff') format('woff');
      font-weight: 600;
      font-style: normal;
      font-display: swap;
  }
  @font-face {
      font-family: 'Oswald';
      src: url('css/fonts/Oswald-Bold.woff2') format('woff2'),
          url('css/fonts/Oswald-Bold.woff') format('woff');
      font-weight: bold;
      font-style: normal;
      font-display: swap;
  }
  @font-face {
      font-family: 'Poppins';
      src: url('css/fonts/Poppins-Black.woff2') format('woff2'),
          url('css/fonts/Poppins-Black.woff') format('woff');
      font-weight: 900;
      font-style: normal;
      font-display: swap;
  }
  @font-face {
      font-family: 'Poppins';
      src: url('css/fonts/Poppins-Regular.woff2') format('woff2'),
          url('css/fonts/Poppins-Regular.woff') format('woff');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
  }
  @font-face {
      font-family: 'Poppins';
      src: url('css/fonts/Poppins-SemiBold.woff2') format('woff2'),
          url('css/fonts/Poppins-SemiBold.woff') format('woff');
      font-weight: 600;
      font-style: normal;
      font-display: swap;
  }
    </style>
    <!-- selectric  -->
    <link rel="stylesheet" href="js/selectric/selectric.css" />
    <!-- FAVICON  -->
    <link
      rel="shortcut icon"
      href="css/img/favicon/favicon.ico"
      type="image/x-icon"
    />
    <link rel="icon" href="css/img/favicon/favicon.ico" type="image/x-icon" />

    <title>Nutri.Logika</title>
  </head>

  <body>
    <!-- =====================
             HEADER
    ======================= -->
    <header class="index-header relative-navbar">
      <div class="navbar__wrapper">
        <a href="index.php#naslovna" class="navbar__logo"
          ><img src="css/img/nutri.logika.png" alt="" class="navbar__logo__img"
        /></a>
        <nav class="navbar">
          <ul class="navbar__list">
            <li class="navbar__item">
              <a href="index.php#naslovna" class="navbar__link">Home</a>
            </li>
            <li class="navbar__item dropdown">
            <a href="#" class="navbar__link"> Ponuda</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="pages/trening.php">Plan Treninga</a></li>
                <li class="dropdown-item"><a href="pages/ishrana.php">Plan Ishrane</a> </li>
                <li class="dropdown-item"><a href="pages/trening-ishrana.php">Plan Ishrane i Treninga</a> </li>
                <li class="dropdown-item"><a href="pages/online-konsultacije.php">Online Konsultacije</a> </li>
              </ul>
          </li>
           <!-- ==== MOBILE DROPDOWN ==== -->
           <li class="navbar__item dropdown-mobile">
            <a href="#" class="dropdown-link"> Ponuda</a>
              <ul class="dropdown-menu-mobile">
                <li class="dropdown-item"><a href="pages/trening.php">Plan Treninga</a></li>
                <li class="dropdown-item"><a href="pages/ishrana.php">Plan Ishrane</a> </li>
                <li class="dropdown-item"><a href="pages/trening-ishrana.php">Plan Ishrane i Treninga</a> </li>
                <li class="dropdown-item"><a href="pages/online-konsultacije.php">Online Konsultacije</a> </li>
              </ul>
          </li>
            <li class="navbar__item">
              <a href="index.php#testimonials" class="navbar__link"
                >Rezultati</a
              >
            </li>
            <li class="navbar__item">
              <a href="index.php#omeni" class="navbar__link">O meni</a>
            </li>
            <li class="navbar__item">
              <a href="index.php#prijava" class="navbar__link">Prijavi se</a>
            </li>
            <li class="navbar__item">
              <a href="calculator.php" class="navbar__link">Kalkulator</a>
            </li>
            <li class="navbar__item">
              <a href="blog.php" class="navbar__link">Blog</a>
            </li>
          </ul>
        </nav>
        <button class="menu-toggle">
          <span class="hamburger"></span>
        </button>
      </div>
      <!-- <div class="switchers-wrapper">
        <button class="language-switcher-sr">
          SR <img src="css/img/flat-icons/serbia.png" alt="ser" />
        </button>
        <button class="language-switcher-en">
          <img src="css/img/flat-icons/united-kingdom.png" alt="eng" />EN
        </button>
      </div> -->
    </header>