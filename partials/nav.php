<?php session_start(); ?>
<nav>
    <div class="nav-left">
        <ul>
            <a href="/"><li class="nav-logo"><img src="../assets/general/logo.svg" alt="Tyvonni's"/></li></a>
        </ul>
    </div>
    <div class="nav-right">
        <ul>
            <a href="/menu/"><li>Menu</li></a>
            <a href="/about/"><li>About</li></a>
            <?php if($_SESSION['firstName']) { ?>
                <a href="/video/"><li>Videos</li></a>
                <a href="/login/"><li>Login</li></a>
            <?php } else { ?>
                <a href="/login/"><li>Login</li></a>
            <?php } ?>
        </ul>
    </div>
</nav>
<placeholder class="nav-placeholder"></placeholder>
