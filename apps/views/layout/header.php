<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Axixa Technologies</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php
                            if ((Session::get('loginDtl'))) { ?>
                                <!-- <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?= ROOT; ?>">Home</a>
                                </li> -->

                                <li class="nav-item">
                                    <a class="nav-link <?= request()->controller == 'Author' ? 'active' : ''; ?>" href="<?= ROOT; ?>author">Author</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= request()->controller == 'Article' ? 'active' : ''; ?>" href="<?= ROOT; ?>article">Article</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?= ROOT; ?>login/logout">Logout</a>
                                </li>
                            <?php } else { ?>

                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Login</a>
                                </li>
                            <?php } ?>
                        </ul>
                        <span class="navbar-text">
                            Welcome <span class="text-white"><?= ($dtl = Session::get('loginDtl')) ? $dtl['fullname'] : 'Guest'; ?>
                            </span>
                        </span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">