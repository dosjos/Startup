<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vær ditt beste</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Set Apple icons for when prototype is saved to home screen -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="touch-icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="touch-icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="touch-icons/apple-touch-icon-57x57.png">


      <script src="js/popovers.js" type="text/javascript"></script>
      <script src="js/push.js" type="text/javascript"></script>
      <script src="js/sliders.js" type="text/javascript"></script>

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>

    <link rel="stylesheet/less" type="text/css" href="css/main.less" />
    <script src="js/less.js" type="text/javascript"></script>

      <script type="text/javascript">
          function login(name, pass){
              var ajaxRequest = new XMLHttpRequest();

              ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                      eval("var response = ("+ajaxRequest.responseText+")");

                      if(response.item1 == true){
                          localStorage.clear();
                          localStorage.setItem("logedin","true");
                          localStorage.setItem("id",response.itemid);

                          window.location = "index.php#home";
                      }
                  }
              }

              var queryString = "checkuserlogin.php?name=" + name + "&pass=" + pass;
              ajaxRequest.open("GET", queryString, true);
              ajaxRequest.send(null);

          }


          function registeruser( pass, email){
              var ajaxRequest = new XMLHttpRequest();

              ajaxRequest.onreadystatechange = function(){

                  if(ajaxRequest.readyState == 4){
                     //alert(ajaxRequest.responseText);
                      eval("var response = ("+ajaxRequest.responseText+")");

                      if(response.item1 == true){

                          localStorage.clear();
                          localStorage.setItem("logedin","true");
                          localStorage.setItem("id",response.itemid);

                          window.location = "index.php#home";
                      }
                  }
              }

              var queryString = "RegisterUser.php?pass=" + pass + "&email="+email;
              ajaxRequest.open("GET", queryString, true);
              ajaxRequest.send(null);

          }

		
		
		$(document).ready(function() {
		
			
			/* GetEgenskaper.php */
			function getEgenskaper() {
		
				$.getJSON("GetEgenskaper.php?type=egenskaper", function(json) {
		/* 			var items = []; */
					$.each(json, function(key,val) {
		/* 				items.push(val.id+','+ val.text); */				
						$("#select ul").append('<li><a href="#">'+val.text+'</a></li>');
					});
				});		
		
			}
		
			/* GetEgenskaper.php */
			function getMan() {

				$.getJSON("GetEgenskaper.php?type=getman&id=" + localStorage.getItem("id"), function(json) {
					console.log("getegenskaper mann");
					var it = 0;
				    $.each(json, function(key, val) {
				        console.log("getman id : " + val.id);
				        console.log("getman state : " + val.state);
				        
						if( val.id != 0) {
					        $("ul.properties li:nth(" + it + ") a"  ).css("color", "green");
					        $(".humansprite div:nth(" + it + ")" ).css({
					        	"-webkit-filter": "hue-rotate(30deg)",
					        	"display": "block"
					        });
					        $(".humansprite div:nth(" + it + ")" ).css("-webkit-filter", "hue-rotate(60deg)");					        
						}

				        
				        it++;
					        
				    });
		    		
				});		
		
			}
		
		

			
			
			/* click on nth limb of human for property-selecting */
			$(".properties li").on('tap', function() {
				localStorage.setItem("selectingProperty", $(this).index());
				console.log("set selectingprop" + localStorage.getItem("selectingProperty"));
			});
		
			/* choosing a property for limb */
			$("#select li").on('tap', function() {
		
				console.log("ASDASDASD");
				/* var nthLimb = localStorage.getItem("selectingProperty") + 1; */	/* nth = index+1 */
		/* 			var nthLimb = localStorage.getItem("selectingProperty"); */	/* nth = index+1 */
		/* 			console.log("nth" + nthLimb); */
		/* 			$(".properties li:nth-child(" + nthLimb + ") a" ).text( $(this + " a").html() ); */
			});
			


			getEgenskaper();			
			getMan();
			
			
			
						
			/* TASK PAGE */
			$('.goals').show();
			$('.progress').hide();
			
			function scrollToElement(selector, time, verticalOffset) {
			    time = typeof(time) != 'undefined' ? time : 1000;
			    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
			    element = $(selector);
			    offset = element.offset();
			    offsetTop = offset.top + verticalOffset;
			    $('html, body').animate({
			        scrollTop: offsetTop
			    }, time);
			}
			
			$('.proceed').click(function () {
			    $(this).hide();
			    scrollToElement('.goals', 500, -15);
			});
			
			$('#saveGoalsButton').click(function() {
			   scrollToElement('.goals', 500, -15);
			   $('.goals').slideUp();
			   $('.progress').slideDown();
			});
		});

      </script>


  </head>
  <body>

<?php include('Register.php'); ?>
<?php include('Home.php'); ?>

<div data-role="page" id="login">

    <header data-role="header" class="bar-title">
        <h1 class="title">Login</h1>
    </header>

    <div data-role="content" class="content register">
        <div class="welcome">
            <h1>Bli ditt beste!</h1>
            <p>Denne tjenesten hjelper deg til å utvikle de egenskapene du ønsker å forbedre.</p>
            <p>Logg inn nå for å bli det beste du kan være</p>
        </div>
        <form  name="input" action="" method="get">
            <div class="input-group">
                <div class="input-row">
                    <label>Epost</label>
                    <input type="email" placeholder="din@epost.no" name="username">
                </div>
                <div class="input-row">
                    <label>Passord</label>
                    <input type="password" placeholder="passord" name="pass">
                </div>
            </div>
            <a data-role="button" class="button-positive" onclick="login(input.username.value, input.pass.value)">Logg inn!</a>

        </form>
        <ul class="footer-navigation">
            <li><a href="#howto">Lær mer</a></li>
            <li><a href="#">Betingelser</a></li>
            <li><a href="#register">Registrer deg</a></li>
        </ul>
    </div>
</div>
<?php include('Task.php'); ?>
<?php include('HowTo.php'); ?>

</body>
</html>