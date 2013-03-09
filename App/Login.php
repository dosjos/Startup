
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
        <form  name="input" action="Login.php" method="post">
            <div class="input-group">
                <div class="input-row">
                    <label>Epost</label>
                    <input type="email" placeholder="Mister Ratchet">
                </div>
                <div class="input-row">
                    <label>Passord</label>
                    <input type="password" placeholder="din@epost.no">
                </div>
            </div>
            <a class="button-block">Registrer deg!</a>
            <input type="button" class="button button-block" href="Login.php">Login</a>
        </form>

<script>
    

</script>



    </div>
<?php
    }
?>