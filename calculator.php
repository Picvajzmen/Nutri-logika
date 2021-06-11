<?php include_once 'php/includes/head-calculator.php'; ?>

    <!-- =====================
            CALCULATOR    
    ======================= -->
    <section id="calculator">
      <div class="calculator__wrapper">
        <div class="calculator__title">
          <h1>Kalkulator makronutrijenata i kalorija</h1>
        </div>
        <form action="#" class="form">
          <div class="calculator__polje polje">
            <label for="cilj"><h4>Moj cilj je:</h4></label>
            <select name="cilj" id="odabir-cilj">
              <option value="dobijanje" class="opcija">
                Suficit kalorija- želite da povećate telesnu težinu i mišićnu
                masu (ukoliko trenirate redovno), a ne povećate mnogo masne
                naslage.
              </option>
              <option value="gubljenje" class="opcija">
                Deficit kalorija - želite da smanjite telesnu težinu i masne
                naslage sa tim, a zadržite što je više moguće mišićnu masu.
              </option>
              <option value="odrzavanje" class="opcija">
                Održanje kalorija- želite da održite telesnu težinu na
                trenutnoj.
              </option>
            </select>
          </div>
          <div class="calculator__polje polje">
            <label for="pol">
              <h4>Pol:</h4>
            </label>
            <select name="pol" id="pol">
              <option value="muski" class="opcija">Muški</option>
              <option value="zenski" class="opcija">Ženski</option>
            </select>

            <h4>Godine starosti:</h4>
            <!-- <label for="godine">Godine starosti:</label> -->
            <div id="godine_greska" class="error-message-invisible">
              <br />
              <p>* Unesite godine</p>
              <br />
            </div>
            <input type="number" id="godine" placeholder="34.." />

            <h4>Težina:</h4>
            <div id="tezina_greska" class="error-message-invisible">
              <br />
              <p>* Unesite tezinu</p>
              <br />
            </div>
            <input type="number" id="tezina" placeholder="--kg" />

            <h4>Visina:</h4>
            <div id="visina_greska" class="error-message-invisible">
              <br />
              <p>* Unesite visinu</p>
              <br />
            </div>
            <input type="number" id="visina" placeholder="--cm" />
          </div>

          <div class="calculator__polje polje">
            <h4>Aktivnost u toku dana:</h4>
            <p>
              Kada birate nivo aktivnosti, uzmite u obzir kako treninge tako i
              aktivnosti u svakodnevnom životu kao što su pešačenje, tip posla
              kojim se bavite itd.
            </p>
            <br />
            <select type="text" name="aktivnost" id="aktivnost">
              <option value="veoma-neaktivan" class="opcija">
                Neaktivan (povremeni ili nikakav trening)
              </option>
              <option value="lagano-aktivan" class="opcija">
                Lagano aktivan (lagani trening/sport 1-3 dana nedeljno)
              </option>
              <option value="srednje-aktivan" class="opcija">
                Srednje aktivan (rekreativni trening/sport 3-5 dana nedeljno)
              </option>
              <option value="veoma-aktivan" class="opcija">
                Veoma aktivan (ozbiljniji trening/sport 6-7 dana nedeljno)
              </option>
              <option value="ektremno-aktivan" class="opcija">
                Ekstremno aktivan (veoma ozbiljan trening/sport i zahtevan
                fizički posao)
              </option>
            </select>
          </div>

          <div class="calculator-polje polje">
            <h4>Brzina:</h4>
            <p id="opis-brzina">
              Brzina ostvarenja se iskazuje kroz procenat telesne težine koji
              želite da izgubite ili dobijete u proseku nedeljno i ovo su neke
              brojke i smernice:
            </p>
            <br />
            <select type="text" name="brzina" id="brzina">
              <option value="0.3" class="opcija">
                Sporije - za one koji nemaju mnogo iskustva sa praćenjem ishrane ili ne žure previše i vole stvari polako i održivo.
                Moj predlog za sve vas čiji je izbor suficit kalorija.
              </option>
              <option value="0.4" class="opcija" selected>
               Srednje - za one koji imaju srednje iskustva sa praćenjem ishrane ili žele rezultate očekivanom brzinom.
              Moj predlog za sve vas čiji je izbor deficit kalorija.
              </option>
              <option value="0.85" class="opcija" >
                Brže - za one koji imaju baš mnogo iskustva sa praćenjem ishrane ili oni koji žele najbrže rezultate (sa najviše negativnih
                nuspojava, npr veći gubitak mišića kod onih u deficitu tj veći dobitak masnih naslaga kod onih u suficitu).
                Predlažem samo u retkim situacijama i samo kod iskusnih.
              </option>
            </select>
          </div>
        </form>
        <div class="calculator-button__wrapper">
          <button class="dugme-login-admin" id="submit-calculator">
            Izračunaj!
          </button>
        </div>
        <div class="calculator-rezultati__polje">
          <h4>Dnevni unos:</h4>
          <p id="kalorije">Kalorije:</p>
          <p id="protein">Protein:</p>
          <p id="hidrat">Ugljeni hidrati:</p>
          <p id="mast">Masti:</p>
        </div>
      </div>
    </section>
    <?php include_once 'php/includes/foot-calculator.php'; ?>
   
  </body>
</html>
