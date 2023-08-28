<form action="<?= base_url('login/logar') ?>" method="POST">

    <div class="card shadow" style="width: 95vw; max-width: 25rem;">

        <div class="card-header">
            <h3>Painel Administrativo</h3>
        </div>

        <div class="card-body d-flex flex-column">

            <label for="EMAIL" class="form-label">E-mail</label>
            <div class="input-group mb-3">
                <span class="input-group-text shadow-sm"><i class="bi bi-person-fill"></i></span>
                <input type="email" class="form-control shadow-sm" id="EMAIL" name="EMAIL" placeholder="nome@exemplo.com">
            </div>

            <label for="SENHA" class="form-label">Senha</label>
            <div class="input-group mb-3">
                <span class="input-group-text shadow-sm"><i class="bi bi-key-fill"></i></span>
                <input type="password" class="form-control shadow-sm" id="SENHA" name="SENHA" placeholder="Suasenha123@">
            </div>

            <?php if (session()->getFlashdata('msg') != null) { ?>
                <div class="alert alert-danger m-0 shadow" role="alert">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php } ?>

        </div>

        <div class="card-footer d-grid gap-2">

            <button type="submit" class="btn btn-secondary shadow-sm">Login</button>

        </div>

    </div>

</form>