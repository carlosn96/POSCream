<?php

/**
 * Description of ProductoDAO
 *
 * @author JuanCarlos
 */
class ProductoDAO extends DAO {

    private const TABLA = "producto";
    private const INSERTAR_PRODUCTO = "CALL insertar_producto(?,?,?,?,?,?,?, ?)";

    public function eliminar($id) {
        return $this->eliminarPorId(self::TABLA, "id_producto", $id);
    }

    public function crearElementoAtributo($case, $val) {
        $this->ejecutarInstruccion("INSERT INTO producto_$case ($case) VALUE('$val')");
        return $this->obtenerIdAutogenerado();
    }

    public function guardarProducto(Producto $producto) {
        $prep = $this->prepararInstruccion(self::INSERTAR_PRODUCTO);
        $prep->agregarString($producto->getNombre());
        $prep->agregarInt($producto->getCategoria());
        $prep->agregarInt($producto->getMarca());
        $prep->agregarInt($producto->getUnidad());
        $prep->agregarDouble($producto->getPrecioVenta());
        $prep->agregarInt($producto->getCantInventario());
        $prep->agregarInt($producto->getCantMinima());
        $prep->agregarJSON($producto->getFotografias());
        return $prep->ejecutar();
    }

    public function recuperarProductoPorId($id) {
        $row = $this->selectPorId("SELECT * FROM listar_productos WHERE id=?", $id);
        if ($row) {
            $row["fotografiasProducto"] = $this->recuperarImgProducto($id);
        }
        return $row;
    }

    public function listarProductos() {
        $list = $this->selectPorCamposEspecificos("*", "listar_productos", "", true);
        foreach ($list as &$row) {
            $row["fotografiasProducto"] = $this->recuperarImgProducto($row["id"]);
        }
        return $list;
    }

    public function recuperarImgProducto($id) {
        $list = [];
        foreach ($this->selectPorCamposEspecificos("*", "producto_imagen", " WHERE id_producto=$id", true) as $row) {
            $list[] = Util::binToBase64($row["imagen"]);
        }
        return $list;
    }

}
