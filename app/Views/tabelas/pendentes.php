<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <td scope="col" class="text-nowrap text-center">Ações</td>
            <td scope="col" class="text-nowrap text-center">Status</td>
            <td scope="col" class="text-nowrap text-center">Código</td>
            <td scope="col" class="text-nowrap text-center">Nome</td>
            <td scope="col" class="text-nowrap text-center">Telefone</td>
            <td scope="col" class="text-nowrap text-center">Manancial</td>
            <td scope="col" class="text-nowrap text-center">Relato</td>
            <td scope="col" class="text-nowrap text-center">Criado em</td>
            <td scope="col" class="text-nowrap text-center">Atualizado em</td>
        </tr>
    </thead>

    <tbody class="table-group-divider">

        <!-- STATUS COR LINHA -->
        <style>
            .Atendido { background-color: #aea !important; }
            .Pendente { background-color: #ffa !important; }
        </style>

        <?php foreach($data as $x) { ?>
            <tr>
                <!-- AÇÕES -->
                <td
                    class="text-nowrap text-center <?= $x['STATUS'] ?>"
                    style="width: 1rem;"
                >

                    <?php if ($x['STATUS'] == 'Pendente') { ?>

                        <div class="d-flex">
    
                            <!-- AÇÃO MARCAR COMO ATENDIDA -->
                            <a
                                class="btn btn-success py-0 px-1 me-1 shadow-sm"
                                href="<?= base_url('painel/atendido/' . $x['PK']) ?>"
                            ><i class="bi bi-check-lg"></i></a>

                            <!-- AÇÃO DESCONSIDERAR -->
                            <a
                                class="btn btn-danger py-0 px-1 shadow-sm"
                                href="<?= base_url('painel/desconsiderar/' . $x['PK']) ?>"
                            ><i class="bi bi-x-lg"></i></a>

                        </div>

                    <?php } ?>
                </td>

                <!-- STATUS -->
                <td class="text-nowrap <?= $x['STATUS'] ?>"><?= $x['STATUS'] ?></td>

                <!-- CODIGO -->
                <td
                    scope="row"
                    class="text-nowrap <?= $x['STATUS'] ?>"
                    style="width: 1rem;"
                >
                    <?= $x['PK'] ?>
                </td>

                <td class="text-nowrap <?= $x['STATUS'] ?>"><?= $x['NOME'] ?></td>
                <td class="text-nowrap <?= $x['STATUS'] ?>"><?= $x['TELEFONE'] ?></td>
                <td class="text-nowrap <?= $x['STATUS'] ?>"><?= $x['MANANCIAL'] ?></td>
                <td class="text-nowrap <?= $x['STATUS'] ?>"><?= $x['RELATO'] ?></td>

                <!-- CRIADO EM -->
                <td class="text-nowrap <?= $x['STATUS'] ?>">
                    <?php
                        if ($x['created_at'] != '0000-00-00 00:00:00')
                        {
                            $z = date_create($x['created_at']);
                            echo date_format($z, 'd/m/Y H:i');
                        }
                    ?>
                </td>

                <!-- ATUALIZADO EM -->
                <td class="text-nowrap <?= $x['STATUS'] ?>">
                    <?php
                        if ($x['updated_at'] != '0000-00-00 00:00:00')
                        {
                            $z = date_create($x['updated_at']);
                            echo date_format($z, 'd/m/Y H:i');
                        }
                    ?>
                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>