<?php

include '../../../../../loader.php';

class ProductoDetallesAPI extends API {

    function recuperar() {
        $this->enviarRespuesta(["producto" => getAdminProducto()->recuperarProductoPorId($this->data["id"])]);
    }

}

Util::iniciarAPI(ProductoDetallesAPI::class);

