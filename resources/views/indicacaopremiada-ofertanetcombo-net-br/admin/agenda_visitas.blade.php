<h4 class="form-titulo"> Agendamento de Visitas</h4>
<form style="margin-top: 5%" >
    <div class="row">
        <div class="form-group col-sm-3 col-md-3 col-lg-3">
            <label>Prospector</label>
            <select id="prospector" class="form-control">
                <option selected>Escolha um prospector...</option>
            </select>
        </div>
        <div class="form-group col-sm-3 col-md-3 col-lg-3">
            <label>Condomínio</label>
            <select id="condominio" class="form-control">
                <option selected>Escolha um condomínio...</option>
            </select>
        </div>
        <div class="form-group col-sm-3 col-md-3 col-lg-3">
            <label >Data da Visita</label>
            <input type="date" id="data" class="form-control" placeholder="" required autofocus>
        </div>
        <div class="form-group col-sm-3 col-md-3 col-lg-3">
            <label>&nbsp;</label>
            <button id="incluir" class="form-control btn  btn-success btn-block" type="button"><i class="fas fa-plus"></i></button>
        </div>
    </div>
</form>

<div class="table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
    <table id="tabelaVisitas" class="table table-striped">
        <thead style="background-color: #37324C; color: white">
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Condomínio</th>
            <th>Status</th>
            <th>Data</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<style>
    .form-titulo{
        text-align: center;
        margin-top: 20px;
        color: white;
        background-color: #37324bba;
        border: 3px solid #37324b;
        border-radius: 50px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
</style>

<script>

    $('#tabelaVisitas').dataTable(
        {   "columns": [
                { data: 'id' },
                { data: 'condominio' },
                { data: 'status' },
                { data: function (datetime) {
                        return moment(datetime).format("DD/MM/YYYY");
                    } }
            ],
            "searching": false,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        }
    );

</script>






