<!-- GOOGLE CHARTS -->
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Meses', 'Denuncia'],
            ['Maio',  1000],
            ['Junho',  1170],
            ['Julho',  660],
            ['Agosto',  1030]
        ]);

        var options = {
            title: 'Denuncias por mês',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('denunciaMes'));

        chart.draw(data, options);
    }

    // REDIMENSIONA GRAFICO
    window.onload = drawChart;
    window.onresize = drawChart;

</script>


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
        <h3 style="text-align: center;">Painel Administrativo</h3>
    </div>

    <!-- CARD BODY -->
    <div class="card-body" style="max-height: 100% !important; overflow-y: auto;">

        <!-- GRAFICO - START -->
        <div
            id="denunciaMes"
            class="shadow-sm"
            style="
                width: 100%;
                height: 30%;
                border: solid 1.25px #aaa;
                overflow: hidden;
            "
        ></div>
        <!-- GRAFICO - END -->

        <hr>
        
        <!-- TABELAS BOTOES - START -->
        <div style="width: 100%; overflow-x: auto;">
            <div style="width: 23.75rem;">
                <ul
                    class="nav nav-tabs"
                    id="myTab"
                    role="tablist"
                >
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tabela-pendentes" data-bs-toggle="tab" data-bs-target="#tabela-pendentes-div" type="button" role="tab" aria-controls="tabela-pendentes-div" aria-selected="true">
                            Pendentes
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            Atendidos
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                            Desconsiderados
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- TABELAS BOTOES - END -->

        <!-- TABELAS DIV - START -->
        <div
            class="tab-content shadow-sm"
            style="
                height: 57.5%;
                overflow: auto;
                border: solid 1.25px #aaa;
            "
        >

            <!-- TABELA PENDENTES -->
            <div
                id="tabela-pendentes-div"
                role="tabpanel"
                aria-labelledby="tabela-pendentes"
                tabindex="0"
                class="tab-pane fade show active"
            >
                <?= view('tabelas/pendentes', ['data' => $data->where('STATUS', 'Pendente')->findAll()]) ?>
            </div>

            <!-- TABELA ATENDIDOS -->
            <div
                id="profile-tab-pane"
                role="tabpanel"
                aria-labelledby="profile-tab"
                tabindex="0"
                class="tab-pane fade"
            >
                <?= view('tabelas/atendidos', ['data' => $data->where('STATUS', 'Atendido')->findAll()]) ?>
            </div>

            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
        </div>
        <!-- TABELAS DIV - END -->

    </div>

</div>