$(document).ready(function () {
	// Llamar los datos para ver datos de difunto
	$(".btn-VerDifunto").on("click", function () {
		var id = $(this).val();
		var url = base_url + "control_difuntos/difuntos/VerDifuntos/" + id;

		$.ajax({
			url: url,
			type: "POST",
			success: function (resp) {
				$("#modalVer .modal-body").html(resp);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.error("Error en la solicitud AJAX:", textStatus, errorThrown);
			},
		});
	});
	// Inicializar Bootstrap Switch
	$("input[data-bootstrap-switch]").each(function () {
		$(this).bootstrapSwitch();
	});

	// Llamar los datos para editar datos de difunto
	$(".btn-EditarDifuntos").on("click", function () {
		var id = $(this).val();
		var url = base_url + "control_difuntos/difuntos/EditarDifuntos/" + id;
		console.log("URL de la solicitud AJAX:", url); // Agrega esta línea para depurar

		$.ajax({
			url: url,
			type: "POST",
			success: function (resp) {
				$("#modalEditar .modal-body").html(resp);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.error("Error en la solicitud AJAX:", textStatus, errorThrown);
				console.log("Detalles del error:", jqXHR.responseText); // Agrega esta línea para obtener más detalles del error
			},
		});
	});
});
