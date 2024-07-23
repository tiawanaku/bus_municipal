<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Últimos Registros del Día</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Contenedor 1: Bus 1 -->
                <div class="col-md-6">
                    <div id="lectura-container-1" class="lectura-container">
                        <?php if (!empty($lectura_bus_1)): ?>
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3 class="text-sm">Validador: <?php echo $lectura_bus_1['busID']; ?></h3>
                                    <p class="text-sm">Saldo Total Regular:
                                        <?php echo $lectura_bus_1['saldo_total_regular']; ?>
                                    </p>
                                    <p class="text-sm">Saldo Total Preferencial:
                                        <?php echo $lectura_bus_1['saldo_total_preferencial']; ?>
                                    </p>
                                    <p class="text-sm">Saldo Total: <?php echo $lectura_bus_1['saldo_total']; ?></p>
                                    <p class="text-sm">Timestamp: <?php echo $lectura_bus_1['timestamp']; ?></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-bus"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        <?php else: ?>
                            <p>No hay registros disponibles para el Bus 1.</p>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Contenedor 2: Bus 2 -->
                <div class="col-md-6">
                    <div id="lectura-container-2" class="lectura-container">
                        <?php if (!empty($lectura_bus_2)): ?>
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3 class="text-sm">Validador: <?php echo $lectura_bus_2['busID']; ?></h3>
                                    <p class="text-sm">Saldo Total Regular:
                                        <?php echo $lectura_bus_2['saldo_total_regular']; ?>
                                    </p>
                                    <p class="text-sm">Saldo Total Preferencial:
                                        <?php echo $lectura_bus_2['saldo_total_preferencial']; ?>
                                    </p>
                                    <p class="text-sm">Saldo Total: <?php echo $lectura_bus_2['saldo_total']; ?></p>
                                    <p class="text-sm">Timestamp: <?php echo $lectura_bus_2['timestamp']; ?></p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-bus"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        <?php else: ?>
                            <p>No hay registros disponibles para el Bus 2.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function cargarLectura() {
        $.ajax({
            url: '<?= base_url('control_lecturas/lecturas/obtener_lectura_ajax') ?>', // Ruta del controlador para AJAX
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                var html_bus_1 = '';
                var html_bus_2 = '';

                if (data.bus_1) {
                    html_bus_1 += '<div class="small-box bg-info">';
                    html_bus_1 += '<div class="inner">';
                    html_bus_1 += '<h3 class="text-sm">Validador: ' + data.bus_1.busID + '</h3>';
                    html_bus_1 += '<p class="text-sm">Saldo Total Regular: ' + data.bus_1.saldo_total_regular + '</p>';
                    html_bus_1 += '<p class="text-sm">Saldo Total Preferencial: ' + data.bus_1.saldo_total_preferencial + '</p>';
                    html_bus_1 += '<p class="text-sm">Saldo Total: ' + data.bus_1.saldo_total + '</p>';
                    html_bus_1 += '<p class="text-sm">Timestamp: ' + data.bus_1.timestamp + '</p>';
                    html_bus_1 += '</div>';
                    html_bus_1 += '<div class="icon">';
                    html_bus_1 += '<i class="fas fa-bus"></i>';
                    html_bus_1 += '</div>';
                    html_bus_1 += '<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>';
                    html_bus_1 += '</div>';
                } else {
                    html_bus_1 += '<p>No hay registros para el Bus 1.</p>';
                }

                if (data.bus_2) {
                    html_bus_2 += '<div class="small-box bg-info">';
                    html_bus_2 += '<div class="inner">';
                    html_bus_2 += '<h3 class="text-sm">Validador: ' + data.bus_2.busID + '</h3>';
                    html_bus_2 += '<p class="text-sm">Saldo Total Regular: ' + data.bus_2.saldo_total_regular + '</p>';
                    html_bus_2 += '<p class="text-sm">Saldo Total Preferencial: ' + data.bus_2.saldo_total_preferencial + '</p>';
                    html_bus_2 += '<p class="text-sm">Saldo Total: ' + data.bus_2.saldo_total + '</p>';
                    html_bus_2 += '<p class="text-sm">Timestamp: ' + data.bus_2.timestamp + '</p>';
                    html_bus_2 += '</div>';
                    html_bus_2 += '<div class="icon">';
                    html_bus_2 += '<i class="fas fa-bus"></i>';
                    html_bus_2 += '</div>';
                    html_bus_2 += '<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>';
                    html_bus_2 += '</div>';
                } else {
                    html_bus_2 += '<p>No hay registros para el Bus 2.</p>';
                }

                $('#lectura-container-1').html(html_bus_1);
                $('#lectura-container-2').html(html_bus_2);
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
                $('#lectura-container-1').html('<p>Error al cargar los datos.</p>');
                $('#lectura-container-2').html('<p>Error al cargar los datos.</p>');
            }
        });
    }

    $(document).ready(function () {
        cargarLectura(); // Cargar datos al inicio

        // Opcional: Actualizar datos cada minuto (60000 ms)
        setInterval(cargarLectura, 60000);
    });
</script>