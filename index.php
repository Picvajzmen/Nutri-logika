<?php
    include_once "php/includes/head.php";
?>
  
  <!-- =====================
            NASLOVNA
    ======================= -->
  <section id="naslovna">
    <div class="naslovna__wrapper">
      <div class="hero">
        <div class="hero-desktop-img"></div>
        <div class="hero-title">
          <h4>Naučno zasnovane i u praksi dokazane informacije</h4>
          <h1>
            <span>O ishrani,</span> <span>treningu i</span>
            <span> zdravom </span> <br> <span>životu</span>
          </h1>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================
            MAILING LISTA
    ======================= -->
  <section id="mailing-lista">
    <h2>Preuzmite besplatnu tabelu za praćenje napretka</h2>
    <!--ISPISIVANJE GRESKE ZA EMAIL PRIJAVU PRAZNO POLJE ZA PDF-->
    <div id="em_greska" class="error-message-visible">
      <?php
      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if (strpos($fullUrl, "em=0") == true) {
        $errors = "Email je neispravan";
        echo ('<p>' . $errors . '</p>');
      } elseif (strpos($fullUrl, "em=2") == true) {
        $errors = "DOSLO JE DO PROBLEMA SA SERVEROM POKUSAJTE PONOVO";
        echo ('<p>' . $errors . '</p>');
      }
      ?>
    </div>
    <!--ISPISIVANJE PORUKE AKO JE USPESNO POSLAT EMAIL ZA PDF -->
    <div id="em_greska" class="succes-message-visible">
      <?php
      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if (strpos($fullUrl, "em=1") == true) {
        $errors = "Uspešna prijava, hvala Vam!";
        echo ('<p>' . $errors . '</p>');
      }
      ?>
    </div>
    <form action="php/emailForm.php" id="mail-list-form" method="POST">
      <input type="text" id="mail-list-input" name="mailing-lista" placeholder="Vas e-mail">
      <label for="mail-list-input" class="hidden-label">Vaš e-mail</label>
      <button class="dugme-login-admin" id="mail-list-form-btn" type="submit">Pošaljite mi tabelu!</button>
    </form>
  </section>

  <!-- =====================
                PONUDA
    ======================= -->
  <section id="ponuda">
  <div class="paketi-wrapper">
        <div class="plan-single">
          <div class="images">
            <div class="paketi__background-img">
              <img
                src="css/img/plan-ishrane3500x333.jpg"
                alt="plan-ishrane"
              />
            </div>
            <div class="paketi__front-img">
              <img
                src="css/img/plan-ishrane-tanjir500x333.png"
                alt="plan-ishrane-tanjir"
              />
            </div>
          </div>
          <div class="paketi__plan-content">
            <div class="paketi__plan-title"><h2><span>Plan</span> ishrane</h2></div>
            <div class="paketi__plan-text">
              <p>
                Dinamičan plan ishrane predstavlja vaš jedinstven naučno zasnovan plan, sastavljen spram vašeg tela, cilja i stila
                života, a opet je njegov efekat redovno praćen kontrolama i spram njih podešen kako bi se efikasno išlo ka cilju
                (dinamičan je). 
              </p>
              <a class="procitaj-jos" href="pages/ishrana.php">Pročitaj više </a>
            </div>
            <div class="dugme__prijavi-se">
              <a href="index.php#prijava">
                <div class="plan-ishrane__ikonica">
                  <img src="css/img/groceries.svg" alt="nutrition" class="icon" />
                </div>
                Prijavi se
              </a>
            </div>
          </div>
        </div>
        <!-- ======================================================= -->
        
        <div class="plan-single">
          <div class="images">
            <div class="paketi__background-img">
              <img
                src="css/img/tegovi500x333.jpg"
                alt="plan-ishrane"
              />
            </div>
            <div class="paketi__front-img">
              <img
                src="css/img/teg500x333.png"
                alt="plan-ishrane-tanjir"
              />
            </div>
          </div>
          <div class="paketi__plan-content">
            <div class="paketi__plan-title"><h2><span>Plan</span> treninga</h2></div>
            <div class="paketi__plan-text">
            <p>
              Plan treninga predstavlja vaš jedinstven naučno zasnovan
              plan treniranja, koji se prilagođava spram vas i vašeg cilja, a
              na kraju svake nedelje je redovno kontrolisan i podleže
              redovnim izmenama kako bi konstatno gurao...
            </p>
            <a class="procitaj-jos" href="pages/trening.php">Pročitaj više </a>
            </div>
            <div class="dugme__prijavi-se">
              <a href="../index.php#prijava">
                <div class="plan-treninga__ikonica">
                  <img
                    src="css/img/dumbell.svg"
                    alt="dumbbell"
                    class="icon bucka"
                  />
                </div>
                Prijavi se
              </a>
            </div>
          </div>
        </div>
      
      <!-- ======================================================= -->
      
        <div class="plan-single">
          <div class="images">
            <div class="paketi__background-img">
              <img
                src="css/img/rubikova-kocka500x333.jpg"
                alt="plan-ishrane"
              />
            </div>
            <div class="paketi__front-img">
              <img
                src="css/img/samo-kocka500x333.png"
                alt="plan-ishrane-tanjir"
              />
            </div>
          </div>
          <div class="paketi__plan-content">
            <div class="paketi__plan-title"><h2><span>Plan</span> ishrane i treninga</h2></div>
            <div class="paketi__plan-text">
              <p>
              Obuhvata plan ishrane i plan treninga koji su pažljivo uklopljeni jedan sa drugim kako bi stvorili harmoniju između
              pravilne ishrane i treninga, a tako i sinergistički efekat (gde je 1+1=3) koji donosi ultimativnu transformaciju tela,
              zdravlja, uma i života. 
              </p>
              <a class="procitaj-jos" href="pages/trening-ishrana.php">Pročitaj više </a>
            </div>
            <div class="dugme__prijavi-se">
              <a href="../index.php#prijava">
                <div class="dual-plan__ikonica"></div>
                Prijavi se
              </a>
            </div>
          </div>
        </div>
      <!-- ======================================================= -->
      <div class="plan-single">
          <div class="images">
            <div class="paketi__background-img">
              <img
                src="css/img/online-consultations500x333-2.jpg"
                alt="plan-ishrane"
              />
            </div>
            <div class="paketi__front-img">
              <img
                src="css/img/online-consultations-laptop500x333-2.png"
                alt="plan-ishrane-tanjir"
              />
            </div>
          </div>
          <div class="paketi__plan-content">
            <div class="paketi__plan-title"><h2><span>Online</span> Konsultacije</h2></div>
            <div class="paketi__plan-text">
              <p>
              Online konsultacija predstavlja najjednostavniji način da se na stručan način konsultujete sa mnom o svemu vezanom za ishranu, trening i zdrav način života. Ova usluga vam nudi 45 minuta moje totalne pažnje i ekspertize, u svrhu rešavanja problema... 
              </p>
              <a class="procitaj-jos" href="pages/online-konsultacije.php">Pročitaj više </a>
            </div>
            <div class="dugme__prijavi-se">
              <a href="../index.php#prijava">
                <div class="plan-treninga__ikonica">
                  <img
                    src="css/img/counseling.svg"
                    alt="dumbbell"
                    class="icon bucka"
                  />
                </div>
                Prijavi se
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- ======================================================= -->

  </section>
  <!-- =====================
            TESTIMONIALS
    ======================= -->

  <section id="testimonials">

    <div class="testimonials__wrapper">
      <h2>Testimonials & Transformations</h2>
      <div class="transformations-wrapper">
        <div class="transformations glider-transformations">
          <div class="slide-item"><img src="css/img/transformacije/1.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/2.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/4.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/5.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/6.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/7.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/8.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/9.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/10.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/11.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/12.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/13.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/14.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/15.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/16.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/17.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/18.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/19.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/20.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/21.png" alt="transformation"></div>
          <div class="slide-item"><img src="css/img/transformacije/22.png" alt="transformation"></div>
        </div>
        <div class="trans-slider-navigation">
          <div class="carousel__navigation-trans"></div>
          <button class="carousel__button-trans carousel__button--left-trans">
          
          </button>
          <button class="carousel__button-trans carousel__button--right-trans">
         
          </button>
        </div>
      </div>
      <br>

      <div class="carousel">
        <ul class="carousel__slider glider">
          <li class="carousel__slide slide-item">
            <p>
              “Za manje od dva meseca smo totalno rešili problem sa IR i na poslednjem pregledu je nisam
              imala. Kilaža je blago pala, ali je promena navika najviše pomogla. Sviđa mi se ovakva ishrana
              jer gotovo nikada nisam gladna niti imam želj za slatkim”
            </p>
            <h4>Marija I.</h4>
          </li>
          <li class="carousel__slide slide-item">
            <p>
              “Obroci su jednostavni i lako ih nosi na posao, a i cela ishrana je laka za praćenje i ne zahteva
              specijalne namirnice, ovo sve sam i do sada jeo. Iako radimo samo jedan mesec, za sada,
              zadovoljan sam saradnjom. Najbitnije mi je da se ne izgladnjujem.”
            </p>
            <h4>Danijel V.</h4>
          </li>
          <li class="carousel__slide slide-item">
            <p>
              “Ostvarili smo cilj, skinuli 10 kg za 3 meseca saradnje i mogu reći da sam prezadovoljna, kako
              ishranom, tako i komunikacijom, iako sam nekada sačekala odgovor, uvek si mi dao detaljno
              objašnjenje zašto to radimo i kakav će efekat imati. Definitivno nastavljam da se hranim na
              sličan način (kao što si mi savetovao) kako bih održala ove rezultate.”
            </p>
            <h4>Snežana R.</h4>
          </li>
          <li class="carousel__slide slide-item">
            <p>
              “Prezadovoljan sam saradnjom sa tobom. Promena načina ishrane sa fokusom na više ugljenih
              hidrata, a manje masti, mi je donela više energije, veću punoću i značajno bolje treninge, koji su
              jako dobro uklopljeni i organizovani. Ovi prvih 3 meseca saradnje mi je značajno promenilo
              način gledanja na ishranu i trening. Mnogo mi se dopada nedeljni online pregled svake nedelje
              Hvala ti puno.”
            </p>
            <h4>Milan M.</h4>
          </li>
          <li class="carousel__slide slide-item">
            <p>
              “Nisam gladna većinu dana, što je ogroman pomak u odnosu na svaku dijetu koju sam radila do
              sada i to me čini presrećnom. Više od 10 cm u obimu struka i minus 8 kg na mojih 170 cm visine
              se i više nego vide. Zadovoljna sam celom saradnjom, kao i savetima kako da nastavim sada,
              kada smo završili saradnju”
            </p>
            <h4>Harisa J.</h4>
          </li>
        </ul>
        <div class="carousel__navigation"></div>
        <button class="carousel__button carousel__button--left">
    
        </button>
        <button class="carousel__button carousel__button--right">
         
        </button>
      </div>
    </div>
  </section>  
  <!-- =====================
              BLOG - INDEX
    ======================= -->
  <?php
  //// Read 3 last post from DB
  require_once('php/connection.php');

  $sql = "SELECT * FROM posts WHERE status = 1 ORDER BY id DESC 
              LIMIT 3"; ///// NUMBER OF NEWEST BLOGS
  $query = $conn->prepare($sql);
  $query->execute();
  $posts = $query->get_result()->fetch_all(MYSQLI_ASSOC);
  ?>
  <section id="blog-index">

    <div class="blog-index__wrapper">
      <div class="blog-index__main-title--wrapper">
        <div class="blog-index__main-title">
          <h2>Najnoviji <span>blog</span> postovi</h2>
        </div>
      </div>
      <?php foreach ($posts as $key => $post) : ?>
        <div class="blog-index__content">

          <ul class="blog-index__info--list">
            <li><span>Author:</span> Jovan Cvetojevic</li>
            <li><span>Date:</span> <?php echo " " .  date('F j, Y', strtotime($post['created_at'])); ?></li>
            <li><span>Category:</span> <?php echo $post['topic']; ?></li>
          </ul>
          <div class="blog-index__img-holder">
            <a href="blog-single-post.php?id=<?php echo $post['id'] ?>"><img src="css/img/blog/<?php echo ($post['image']); ?>" alt="" class="post-image"></a>
          </div>

          <div class="blog-index__content--text">
            <a href="blog-single-post.php?id=<?php echo $post['id']; ?>" class="single-blog__link">
              <div class="blog-index__title">
                <h4><?php echo $post['title']; ?></h4>
              </div>
              <p>
                <?php echo html_entity_decode(substr($post['body'], 0, 170) . '...'); ?>
              </p>
            </a>
          </div>
          <div class="blog-index__underline"></div>
        </div>
      <?php endforeach; ?>

      <div class="blog-index__button--wrapper">
        <button class="dugme-login-admin">
          <a href="blog.php">Pogledaj ceo blog</a>
        </button>
      </div>
    </div>
  </section>

  <!-- =====================
            O MENI
    ======================= -->
  <section id="omeni">
    <div class="omeni-wrapper">
      <div class="omeni-info">
        <div class="omeni-info__title">
          <h2>O Jovanu Cvetojeviću i Nutri Logici</h2>
        </div>
        <div class="grid-container">
          <div class="omeni-img">

            <img class="omeni-jovan" src="css/img/jovan-pola600.png" alt="jovan" class="jovan" />
          </div>
          <div class="omeni-info__content omeni-info-index">
            <p>
              U fitnes prvi put ulazim 2009., sa svojih 15 godina. Tada samo
              pratim savete ljudi iz teretane za ishranu i trening.
              Napredujem, ali bez ideje i znanja o tome šta se i zašto dešava.
              To me navodi da počnem da razmišljam o tome da li postoji nauka
              iza treninga i ishrane, jasne činjenice i principi koji se mogu
              organizovati sa planiranim ishodom, kao što je slučaj u mnogim
              drugim poljima života.
              <br>
              <br>
              2012. godine počinjem da se edukujem, čitam, testiram naspram
              saznanja do kojih dolazim i pravim velike rezultate. 2013.
              odlučujem da odustanem od puta ekonomiste i odlazim sa fakulteta
              u prvom semestru, nakon čega upisujem Višu medicinsku školu za
              nutricionistu. Tamo bivam razočaran obrazovnim sistemom, ali
              dopunjavam sopstvenu edukaciju kroz čitanje knjiga, gledanje
              seminara i podcasta relevantnih svetskih stručnjaka. Tokom
              studija počinjem da radim sa ljudima i pravim planove ishrane i
              treninga, sa dobrim uspesima. Diplomiram tri meseca pre roka, u
              junu 2017., nakon čega dobijam želju da edukujem i pokažem da je
              cela ova priča jednostavna.
              <br><br>
              Septembra iste godine, pravim Nutri Logiku, čiji je centralni
              cilj edukacija zasnovana na naučnim činjenicama i zdravom
              razumu. Preko nje, vremenom, dolazim u kontakt sa ljudima kojima
              je potrebna pomoć oko ishrane i treninga, I tako počinje moj
              online rad sa ljudima. Ova vrsta posla mi je pružila mogućnost
              da dotaknem veliki broj ljudi i direktno utičem na njihovo
              zdravlje, izgled, performanse i zadovoljstvo. Radio sam sa
              klijentima sa 3 kontinenta, svih polova i uzrasta, zdravim i
              onih koji imaju neko medicinsko stanje, profesionalcima i
              rekreativcima, trudnicama i zauzetim direktorima. Rezultat je
              uvek bio isti. Svako je saradnju završio zadovoljan.
            </p>
          </div>
          <div class="dugme-omeni__wrapper">
            <button class="dugme-login-admin dugme-omeni">
              <a href="omeni.php">Pročitaj više</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================
              PRIJAVA
    ======================= -->

  <section id="prijava">
    <div class="prijava-title">
      <h2>Prijavi se</h2>
    </div>

    <div class="prijava__wrapper">
      <form action="php/form.php" class="form">
        <div class="polje">
          <label for="ime">Ime:</label>
          <div id="ime_greska" class="error-message-invisible">
            <p>Ime je obavezno</p>
          </div>
          <input type="text" id="ime" placeholder="Marko.." />
        </div>

        <div class="polje">
          <label for="prezime">Prezime:</label>
          <div id="prezime_greska" class="error-message-invisible">
            <p>Prezime je obavezno</p>
          </div>
          <input type="text" id="prezime" placeholder="Marković.." />
        </div>

        <div class="polje">
          <label for="email">E-mail:</label>
          <div id="email_greska" class="error-message-invisible">
            <p>Email nedostaje ili je neispravan</p>
          </div>
          <input type="email" id="email" placeholder="mare85@gma.." />
        </div>

        <div class="polje">
          <label for="godine">Godine:(od 16 do 70)</label>
          <div id="godine_greska" class="error-message-invisible">
            <p>Unesite svoje godine</p>
          </div>
          <input type="number" id="godine" min="15" max="70" placeholder="34.." />
        </div>

        <div class="polje">
          <label for="telefon">Telefon:</label>
          <div id="telefon_greska" class="error-message-invisible">
            <p>Broj Vaseg telefona je obavezan</p>
          </div>
          <input type="tel" id="telefon" placeholder="+38169111.." />
        </div>

        <div class="polje">
          <label for="pol">Pol:</label>
          <div class="error-message-invisible">
            <p></p>
          </div>
          <select type="text" name="pol" id="pol">
            <option value="muški" class="opcija">Muški</option>
            <option value="ženski" class="opcija">Ženski</option>
          </select>
        </div>

        <div class="polje">
          <label for="cilj">Koji cilj želiš da postigneš:</label>
          <select type="text" name="cilj" id="cilj">
            <option value="skidanje-kilaze" class="opcija">
              Cilj mi je da skinem kilažu
            </option>
            <option value="dobijanje-misicne-mase" class="opcija">
              Cilj mi je da dobijem na mišićnoj masi
            </option>
            <option value="zdrav-život" class="opcija">
              Cilj mi je da živim zdravije i održim svoju trenutnu kilažu
            </option>
          </select>
        </div>

        <div class="polje">
          <label for="plan">Odaberi plan koji želiš:</label>
          <select type="text" name="plan" id="odabir">
            <option value="ishrana" class="opcija">Plan ishrane</option>
            <option value="trening" class="opcija">Plan treninga</option>
            <option value="ishrana-i-trening" class="opcija">
              Plan ishrane i treninga
            </option>
            <option value="online-konsultacije" class="opcija">
              Online konsultacije
            </option>
          </select>
        </div>
      </form>
      <div class="data-privacy-info">
        <p>
        Vaši lični podaci biće korišćeni isključivo kako bismo primili i obradili vaš zahtev.
        </p>
    </div>
    </div>
    
    <!--GRESKA -->
    <div id="php_greska" class="succes-message-visible"></div>
    <div class="dugme__prijavi-se prijava">
      <a href="#prijava">
        <div class="dual-plan__ikonica"></div>
        Prijavi se
      </a>
    </div>
  </section>


 <?php include_once 'php/includes/foot.php' ?>
 
</body>

</html>