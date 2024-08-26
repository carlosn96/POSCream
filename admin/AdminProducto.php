<?php

class AdminProducto extends Admin {

    public function __construct() {
        parent::__construct(new ProductoDAO);
    }

    public function recuperarCategorias() {
        return $this->extraerInfoCampoEspecifico("producto_categoria", "id_categoria", "categoria");
    }

    public function recuperarMarcas() {
        return $this->extraerInfoCampoEspecifico("producto_marca", "id_marca", "marca");
    }

    public function recuperarUnidades() {
        return $this->extraerInfoCampoEspecifico("producto_unidad", "id_unidad", "unidad");
    }

    public function crearElementoAtributo($case, $val) {
        return $this->dao->crearElementoAtributo($case, $val);
    }

    public function recuperarProductoPorId(int $id) {

        return ($rs = $this->dao->recuperarProductoPorId($id)) ? $this->construirProducto($rs)->toArray() : null;
    }

    function guardarProducto($form) {
        return $this->dao->guardarProducto($this->construirProducto($form));
    }

    function listarProductos() {
        $lista = [];
        foreach ($this->dao->listarProductos() as $row) {
            $lista[] = $this->construirProducto($row)->toArray();
        }
        return $lista;
    }

    function construirProducto($form): Producto {
        $nombre = isset($form['nombre']) ? trim($form['nombre']) : '';
        $categoria = isset($form['categoria']) ? trim($form['categoria']) : '';
        $marca = isset($form['marca']) ? trim($form['marca']) : '';
        $unidad = isset($form['unidad']) ? trim($form['unidad']) : '';
        $precioVenta = isset($form['precioVenta']) ? trim($form['precioVenta']) : '';
        $cantInventario = isset($form['cantInventario']) ? trim($form['cantInventario']) : '';
        $cantMinima = isset($form['cantMinima']) ? trim($form['cantMinima']) : '';
        $id = $form['id'] ?? "";
        $fotografias = $form['fotografiasProducto']; // ?? [];

        return new Producto($nombre, $categoria, $marca, $unidad, $precioVenta,
                $cantInventario, $cantMinima, $fotografias, $id);
    }

    function eliminar($id) {
        return $this->dao->eliminar($id);
    }

}
