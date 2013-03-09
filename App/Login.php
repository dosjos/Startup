
<?php
    if(isset($_POST['epost']) && isset($_POST['pass'])){


        ?>
        <header class="bar-title">
        <h1 class="title">Logget inn</h1>
    </header>
    <?php
    }else{
    ?>



    <header class="bar-title">
        <h1 class="title">Login</h1>
    </header>

    <div class="content">
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

<?php
    }
?>

