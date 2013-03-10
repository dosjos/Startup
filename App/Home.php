<div data-role="page" id="home">

    <header data-role="header" class="bar-title">
        <div class="logo">Changetech</div>
        <p>Vær ditt beste!</p>
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
		        <ul data-role="listview" data-inset="true" class="ui-icon-alt" data-theme="d" >
		            <li class="listdesc" data-role="divider">Velg en egenskap:</li>
		        </ul>
		</div>

        <div class="intro" style="display:none;">
            <h2>Slik begynner du!</h2>
            <p>Fyll figuren med seks egenskaper du ønsker å forbedre.</p>
            <a class="button-block button-main">Begynn!</a>
        </div>
    </div>

</div>