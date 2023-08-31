<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
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