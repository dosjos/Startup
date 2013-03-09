<div data-role="page" id="login">
    <header data-role="header" class="bar-title">
        <h1 class="title">Login</h1>
    </header>

    <div data-role="content" class="content">
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
            <div class="button-block" onclick="test(input.username, input.pass)" data-ignore="push">Registrer deg!</div>

        </form>

    </div>
</div>