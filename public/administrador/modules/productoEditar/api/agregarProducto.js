const urlAPI = 'api/AgregarProductoAPI.php';

function ready() {
    recuperarCampos();
    agregarVariableProducto($("#formMarca"));
    agregarVariableProducto($("#formUnidad"));
    agregarVariableProducto($("#formCategoria"));
    ajustarDropZone();
    ajustarSubmitGuardarProducto();
}

function recuperarCampos() {
    crearPeticion(urlAPI, {case: "recuperarCamposFormulario"}, function (res) {
        $.each(res.selector, function (idx, lista) {
            crearSelector($("#lista" + idx), idx.toLowerCase(), lista, true, "select");
            $('.select').select2({
                minimumResultsForSearch: -1,
                width: '100%'
            });
        });
    });
}

function ajustarSubmitGuardarProducto() {


    $("#submit").click(function () {
        let data = {
            nombre: $("#nombre").val(),
            categoria: $("#categoria").val(),
            marca: $("#marca").val(),
            unidad: $("#unidad").val(),
            precioVenta: $("#precioVenta").val(),
            cantInventario: $("#cantInventario").val(),
            cantMinima: $("#cantMinima").val()
        };

        if (Object.values(data).some(value => !value)) {
            mostrarMensajeAdvertencia("Completa todos los campos", false);
        } else {
            //crearPeticion(urlAPI, {case: "guardarProducto", data: $.param(data)});
            const formData = new FormData();
            const dropzoneFiles = Dropzone.forElement("#fotografiasProductoForm").getAcceptedFiles();
            dropzoneFiles.forEach((file, index) => {
                formData.append(`fotografiasProducto[${index}]`, file, file.name);
            });
            formData.append("case", "guardarProducto");
            formData.append("data", $.param(data));

            crearPeticion(urlAPI, formData, print);
        }
    });
}

function agregarVariableProducto($form) {
    $form.submit(function (e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.find('input');
        var val = $input.val().trim();
        var tipo = $this.attr("id").replace("form", "").toLowerCase();
        crearPeticion(urlAPI, {case: "crearElementoAtributo", data: "val=" + val + "&tipo=" + tipo}, function (res) {
            crearOpcionSelector($("#" + tipo), res.id, val);
            $this.closest('.modal').modal('hide');
            $input.val('');
        });
    });
}

function ajustarDropZone() {
    Dropzone.autoDiscover = false;
    const myDropzone = Dropzone.forElement("#fotografiasProductoForm");
    myDropzone.options.addRemoveLinks = true;
    myDropzone.options.dictRemoveFile = "Eliminar archivo";
    myDropzone.options.acceptedFiles = ".png, .jpg, .jpeg";
}