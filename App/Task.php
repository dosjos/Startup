<div data-role="page" id="task" data-theme="d">

    <header data-role="header" class="bar-title">
        <a data-rel="back">Tilbake</a>
        <h1 class="title">Kreativitet</h1>
    </header>

    <div data-role="content" class="content task">
        <div class="cover-image">
            <img src="images/temp/task-header.jpg" />
        </div>
        <div class="lead">
            <h2>Hvordan styrker du din kreativitet?</h2>

            <p>Ordet kreativitet forbindes ofte med store kunstnere eller musikere, men kreativitet er veldig mye mer.</p>
            <p>Å ommøblere et rom, lage en ny matrett eller prøve noe nytt er også eksempler på kreativitet.</p>
            <p>I denne oppgaven vil du sette dine egne mål, og få tips underveis til hvordan du kan nå disse.</p>
            <div class="proceed">
                <i class="icon-circle-arrow-down"></i>
                <p>Er du klar til å begynne?</p>
            </div>
        </div>
        <a name="start-task"></a>
        <div class="goals">
            <h2>Sett dine mål!</h2>
            <form>
                <div class="input-group">
                    <div class="input-row">
                        <label>Når jeg..</label>
                        <input type="text" placeholder="vil se på TV">
                    </div>
                    <div class="input-row goal">
                      <label>..skal jeg</label>
                      <input type="text" placeholder="heller male et bilde">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-row">
                        <label>Når jeg..</label>
                        <input type="text" placeholder="lager middag">
                    </div>
                    <div class="input-row goal">
                      <label>..skal jeg</label>
                      <input type="text" placeholder="prøve en ny oppskrift">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-row">
                        <label>Når jeg..</label>
                        <input type="text" placeholder="">
                    </div>
                    <div class="input-row goal">
                      <label>..skal jeg</label>
                      <input type="text" placeholder="">
                    </div>
                </div>
                <div class="input-row">
                    <div class="reward">
                        <i class="icon-trophy"></i>
                        <p>Har du lyst å sette en belønning, som du kan gi deg selv du har nådd dine mål?</p>
                    </div>
                    <input type="text" placeholder="En vinflaske, konsertbilletter, nye sko">
                </div>
                <a data-role="button" class="button-main" id="saveGoalsButton">Lagre mål!</a>
            </form>
        </div>

        <div class="progress">
            <h2>Huk av alle målene du har klart!</h2>

            <form id="goaldone">
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <input type="checkbox" name="checkbox-2" id="checkbox-2" class="custom" />
                        <label for="checkbox-2" class="goal1">Ommøblere et rom</label>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <input type="checkbox" name="checkbox-2" id="checkbox-2" class="custom" />
                        <label for="checkbox-2" class="goal2">Prøve en ny oppskrift</label>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup">
                        <input type="checkbox" name="checkbox-2" id="checkbox-2" class="custom" />
                        <label for="checkbox-2" class="goal3">Gå en ny rute</label>
                    </fieldset>
                </div>
            </form>
            <div class="reward">
                <i class="icon-trophy"></i>
                <p>Når du har gjennomført dette, får du <strong>konsertbiletter</strong>!</p>
            </div>
        </div>
        <div class="help">

            <h2>Ta det første steget!</h2>

            <p>Du er allerede kreativ. Antagelig langt mer enn det du er klar over.</p>
            <p>Og kreativitet, som det meste annet, kan læres.</p>
            <p>Fokuser på dine målsetninger, og ta et steg av gangen. Når du finner noe du liker, gjør det oftere.</p>

            <div class="hint">
               <h3>Hva nå?</h3>
               <p>Om tre dager vil vi sende deg en påminnelse på epost. Denne vil ta deg tilbake til denne siden, hvor du kan markere de målsetningene du har klart så langt.</p>

                <a data-role="button" class="button-main" href="#home">Tilbake til start</a>
            </div>


        </div>

    </div>

</div>