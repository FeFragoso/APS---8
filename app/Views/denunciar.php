<div
    class="card shadow"
    style="
        width: 97.5vw;
        height: 97.5vh;

        background-color: #eee;

        border: solid 1.25px #aaa;
        border-radius: 1rem;
    "
>

    <!-- CARD HEADER -->
    <div class="card-header">
        <h3 style="text-align: center;">Canal de Denuncia</h3>
    </div>

    <!-- CARD BODY -->
    <div class="card-body" style="max-height: 100% !important; overflow-y: auto;">
    
        <!-- NOME -->
        <label for="NOME" class="form-label">Nome</label>
        <div class="input-group mb-3">
            <span class="input-group-text shadow-sm"><i class="bi bi-person-vcard"></i></span>
            <x-input
                contexto="dinheiro"
                x-id="NOME"
                class="form-control shadow-sm"
                x-class="null"
                x-placeholder="Anônimo"
            ></x-input>
        </div>

        <!-- TELEFONE -->
        <label for="TELEFONE" class="form-label">Telefone</label>
        <div class="input-group mb-3">
            <span class="input-group-text shadow-sm"><i class="bi bi-telephone"></i></span>
            <x-input
                x-id="TELEFONE"
                class="form-control shadow-sm"
                x-class="null"
                x-placeholder="Anônimo"
            ></x-input>
        </div>

        <!-- MANANCIAL -->
        <label for="MANANCIAL" class="form-label">Manancial</label>
        <div class="input-group mb-3">
        <span class="input-group-text shadow-sm"><i class="bi bi-droplet"></i></span>
            <select id="MANANCIAL" name="MANANCIAL" class="form-select shadow-sm">
                <option selected disabled>Selecione</option>
                <option value="Santos ZN">Santos ZN</option>
                <option value="Santos Canal 7">Santos Canal 7</option>
                <option value="Santos Centro">Santos Centro</option>
            </select>
        </div>

        <!-- RELATO -->
        <div class="mb-3">
            <label for="RELATO" class="form-label">Relato</label>
            <textarea
                id="RELATO"
                name="RELATO"
                class="form-control shadow-sm"
                rows="6"
                placeholder="Não anônimo"
            ></textarea>
        </div>

    </div>

    <!-- CARD FOOTER -->
    <div class="card-footer row">
        
        <x-form
            x-inputs="NOME TELEFONE"
            x-url="<?= base_url('denunciar/cadastro') ?>"
            x-id="btnSubmit"
            class="col-8 m-1 d-grid p-0"
            x-class="btn btn-success shadow-sm"
            x-text="Denunciar"
        ></x-form>

        <a href="<?= base_url('login') ?>" class="btn btn-outline-secondary col m-1 shadow-sm">logar</a>

    </div>

</div>