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
                <li class="left-arm"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
                <li class="right-arm"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
                <li class="torso"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
                <li class="left-leg"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
                <li class="right-leg"><a href="#select" data-rel="popup" data-position-to="window">Velg</a></li>
            </ul>
        </div>

		
		<div data-role="popup" id="select">
		        <ul data-role="listview" data-inset="true" class="ui-icon-alt" data-theme="d" >
		            <li class="listdesc" data-role="divider">Velg en egenskap:</li>
					<li>Kreativitet</li>
					<li>Humoristisk sans</li>
					<li>Være ekte</li>
					<li>Nysgjerrighet</li>
					<li>Like å lære</li>
					<li>Modig</li>
					<li>Håp</li>
					<li>Kjærlighet</li>
					<li>Entusiasme</li>
					<li>Utholdenhet</li>
					<li>Være snill</li>
					<li>Rettferdighet</li>
					<li>Jordnærhet</li>
					<li>Viljestyrke</li>
					<li>Sosial intelligens</li>
					<li>Estetisk sans</li>
					<li>Takknemlighet</li>
					<li>Tilgivelse</li>
		        </ul>
		</div>

        <div class="intro">
            <div class="title">Slik begynner du!</div>
            <p>Fyll figuren med seks egenskaper du ønsker å forbedre.</p>
            <a data-role="button" class="button-positive close">Begynn!</a>
        </div>
    </div>

</div>

<script type="text/javascript">
			function doneGoal() {

				if ( localStorage.getItem("limb") != 0 ) {	
					console.log("kumb :)");
					$(".humansprite div:nth(" + localStorage.getItem("limb") + ")").addClass("completed");
			        $("ul.properties li:nth(" + localStorage.getItem("limb") + ")"  ).addClass("completed");
					
				} else {
					console.log("not kumb");
				}
	
	
				
			}
			

	doneGoal();
	
</script>