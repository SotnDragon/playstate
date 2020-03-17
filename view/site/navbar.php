<?php if ($session_status) { ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="../controller/site.php?view=home">
                <!-- <img src="http://placehold.it/150x30?text=Logo" alt=""> -->
                PlayState
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=games">Games</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=sobre">Sobre</a>
                    </li>
                    <a class="nav-link" href="#">Conta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/user.php?op=logout">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php } else { ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="../controller/site.php?view=home">
                <!-- <img src="http://placehold.it/150x30?text=Logo" alt=""> -->
                PlayState
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=games">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=cadastro">Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controller/site.php?view=sobre">Sobre</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
<?php } ?>