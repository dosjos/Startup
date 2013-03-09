<div data-role="page" id="home">

    <header data-role="header" class="bar-title">
        <a data-rel="back">Back</a>
        <h1 class="title">Utvikle dine egenskaper!</h1>
    </header>

    <div data-role="content" class="content home">
        <div class="silhouette">

            <div class="humansprite">
                <div class="head"></div>
                <div class="left-arm"></div>
                <div class="right-arm"></div>
                <div class="torso"></div>
                <div class="left-leg"></div>
                <div class="right-leg"></div>
            </div>


            <ul class="properties">
                <li class="head"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
                <li class="left-arm selected"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
                <li class="right-arm"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
                <li class="torso completed"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
                <li class="left-leg"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
                <li class="right-leg"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
            </ul>
        </div>


        <div data-role="popup" id="select">
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                    <legend>Date of Birth:</legend>

                    <label for="select-choice-month">Month</label>
                    <select name="select-choice-month" id="select-choice-month">
                        <option>Month</option>
                        <option value="jan">January</option>
                        <!-- etc. -->
                    </select>

                    <label for="select-choice-day">Day</label>
                    <select name="select-choice-day" id="select-choice-day">
                        <option>Day</option>
                        <option value="1">1</option>
                        <!-- etc. -->
                    </select>

                    <label for="select-choice-year">Year</label>
                    <select name="select-choice-year" id="select-choice-year">
                        <option>Year</option>
                        <option value="2011">2011</option>
                        <!-- etc. -->
                    </select>

                </fieldset>
            </div>
        </div>

        <div class="intro" style="display:none;">
            <h2>Slik begynner du!</h2>
            <p>Fyll figuren med seks egenskaper du ønsker å forbedre.</p>
            <a class="button-block button-main">Begynn!</a>
        </div>
    </div>

</div>