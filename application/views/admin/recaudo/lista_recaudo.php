<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"></h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="info-box">
                                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-bus"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">REGISTRO DE RECAUDO GENERAL</span>
                                        <span class="info-box-number">
                                            <small>REGISTROS</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <button type="button" id="locateButton" class="btn btn-info btn-xs">
                                            <span class="fas fa-bus"></span> REGISTRO
                                        </button>

                                        <script>
                                            document.getElementById('locateButton').onclick = function () {
                                                window.location.href = "<?= base_url() ?>control_lecturas/lecturas";
                                            }
                                        </script>
                                    </div>
                                    <!-- TABLA DE CEMENTERIO -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example1"
                                                    class="table table-bordered table-striped dataTable dtr-inline"
                                                    aria-describedby="example1_info" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>UID</th>
                                                            <th>Tarjeta ID</th>
                                                            <th>Saldo</th>
                                                            <th>Lecturas Preferencial</th>
                                                            <th>Lecturas Regular</th>
                                                            <th>Saldo Total Regular</th>
                                                            <th>Saldo Total Preferencial</th>
                                                            <th>Saldo Total</th>
                                                            <th>Timestamp</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if (!empty($lecturas)): ?>
                                                            <?php foreach ($lecturas as $lectura): ?>
                                                                <tr>
                                                                    <td><?= $lectura->id; ?></td>
                                                                    <td><?= $lectura->uid; ?></td>
                                                                    <td><?= $lectura->tarjetaID; ?></td>
                                                                    <td><?= $lectura->saldo; ?></td>
                                                                    <td><?= $lectura->lecturas_preferencial; ?></td>
                                                                    <td><?= $lectura->lecturas_regular; ?></td>
                                                                    <td><?= $lectura->saldo_total_regular; ?></td>
                                                                    <td><?= $lectura->saldo_total_preferencial; ?></td>
                                                                    <td><?= $lectura->saldo_total; ?></td>
                                                                    <td><?= $lectura->timestamp; ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <tr>
                                                                <td colspan="10">No hay lecturas registradas.</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>