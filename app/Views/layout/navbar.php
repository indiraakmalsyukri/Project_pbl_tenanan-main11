<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Website PBL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/pages/about">Dosen</a>
                    <a class="nav-link" href="/kelompok/index">Kelompok</a>
                    <a class="nav-link" href="/mitra/index">Mitra</a>
                    <a class="nav-link" href="/logbook/index">Logbook</a>
                </div>
                <?php if (logged_in()) : ?>
                    <a class="btn btn-outline-danger" href="/logout">Logout</a>
                <?php else : ?>
                    <a class="btn btn-outline-primary" href="/login">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>