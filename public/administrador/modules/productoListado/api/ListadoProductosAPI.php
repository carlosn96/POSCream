<?php

include '../../../../../loader.php';

class AgregarProductoAPI extends API {

    function listar() {
        $this->enviarRespuesta(getAdminProducto()->listarProductos());
    }

    function eliminar() {
        $this->enviarResultadoOperacion(getAdminProducto()->eliminar($this->data["id"]));
    }

}

Util::iniciarAPI(AgregarProductoAPI::class);

