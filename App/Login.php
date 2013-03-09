
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
        <form name="input" action="Login.php" method="post">
            <div class="input-group">
                <input type="email" placeholder="Email" name="epost">
                <input type="password" placeholder="Password" name="pass">
                <a class="button button-block" href="Login.php">Login</a>
            </div>
        </form>
    </div>
<?php
    }
?>