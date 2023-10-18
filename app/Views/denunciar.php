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
                contexto="texto"
                x-id="NOME"
                class="form-control shadow-sm"
                x-class="null w-100"
                x-placeholder="Anônimo"
            ></x-input>
        </div>

        <!-- TELEFONE -->
        <label for="TELEFONE" class="form-label">Telefone</label>
        <div class="input-group mb-3">
            <span class="input-group-text shadow-sm"><i class="bi bi-telephone"></i></span>
            <x-input
                contexto="telefone"
                x-id="TELEFONE"
                class="form-control shadow-sm"
                x-class="null w-100"
                x-placeholder="Anônimo"
            ></x-input>
        </div>

        <!-- MANANCIAL -->
        <label for="MANANCIAL" class="form-label">Manancial</label>
        <div class="input-group mb-3">
        <span class="input-group-text shadow-sm"><i class="bi bi-droplet"></i></span>
            <x-select
                x-id="MANANCIAL"
                x-opcoes="Santos ZN/?/Santos Canal 7/?/Santos Centro"
                
                class="form-select shadow-sm"
                x-class="null w-100"
                x-opcoesStyle="
                    width: 90%;
                    max-height: 10rem;
                    overflow-y: auto;

                    border: solid 1px #aaa;
                    background-color: #fff;
                "
                x-opcoesClass="list-group shadow"
                x-opcaoClass="list-group-item list-group-item-action"
            ></x-select>
        </div>

        <!-- RELATO -->
        <div class="mb-3">
            <label for="RELATO" class="form-label">Relato</label>
            <textarea
                id="RELATO-hidden"
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
            x-inputs="NOME TELEFONE MANANCIAL RELATO"
            x-url="<?= base_url('denunciar/cadastro') ?>"
            x-id="btnSubmit"
            class="col-8 m-1 d-grid p-0"
            x-class="btn btn-success shadow-sm"
            x-text="Denunciar"
        ></x-form>

        <a href="<?= base_url('login') ?>" class="btn btn-outline-secondary col m-1 shadow-sm">logar</a>

    </div>

</div>