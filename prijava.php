<?php include_once 'php/includes/head-calculator.php';?>
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
    <?php include_once 'php/includes/foot.php';?>