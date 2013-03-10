<div data-role="page" id="register" data-theme="d">

    <div data-role="content" class="content register">
        <div class="welcome">
            <h1>Bli ditt beste!</h1>
            <p>Denne tjenesten hjelper deg til å utvikle de egenskapene du ønsker å forbedre.</p>
            <p>Nyskjerrig? <a href="#howto">Lær mer</a></p>
        </div>
        <form name="reg">
            <div class="input-group">
                <div class="input-row">
                    <label>Fornavn</label>
                    <input type="text" placeholder="Ditt fornavn" name="name" required>
                </div>
                <div class="input-row">
                  <label>Epost</label>
                  <input type="email" placeholder="din@epost.no" name="email" required>
                </div>

                <div class="input-row">
                    <label>Passord</label>
                    <input type="password" placeholder="passord" name="pass">
                </div>
            </div>
            <a data-role="button" class="button-positive" onclick="registeruser(reg.name.value, reg.pass.value, reg.email.value)">Registrer deg!</a>

        </form>
        <ul class="footer-navigation">
            <li><a href="#howto">Lær mer</a></li>
            <li><a href="#">Betingelser</a></li>
        </ul>
    </div>

</div>