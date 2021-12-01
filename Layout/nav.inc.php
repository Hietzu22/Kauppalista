<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="index.php">Kauppalista</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="addItems.php">Lisää kauppalistaan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addOftenItems.php">Lisää usein ostettuihin</a>
            </li>
            <?php if (isset($_SESSION['logged_in'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Kirjaudu ulos</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Kirjaudu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Rekisteröidy</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>