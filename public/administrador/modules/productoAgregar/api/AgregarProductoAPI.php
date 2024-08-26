<?php

include '../../../../../loader.php';

class AgregarProductoAPI extends API {

    function recuperarCamposFormulario() {
        $admin = getAdminProducto();
        $this->enviarRespuesta([
            "selector" => [
                "Categoria" => $admin->recuperarCategorias(),
                "Marca" => $admin->recuperarMarcas(),
                "Unidad" => $admin->recuperarUnidades(),
            ]
        ]);
    }

    function crearElementoAtributo() {
        $this->enviarRespuesta(["id" => getAdminProducto()->crearElementoAtributo($this->data["tipo"], $this->data["val"])]);
    }

    function guardarProducto() {
        $nombreInputFile = "fotografiasProducto";
        $this->data[$nombreInputFile] = Util::recuperarArchivosServidor($nombreInputFile);
        $this->enviarResultadoOperacion(getAdminProducto()->guardarProducto($this->data));
    }

}

Util::iniciarAPI(AgregarProductoAPI::class);

