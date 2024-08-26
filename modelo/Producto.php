<?php

/**
 * Description of Producto
 *
 * @author JuanCarlos
 */
class Producto {

    use Entidad;

    private $nombre;
    private $categoria;
    private $marca;
    private $unidad;
    private $precioVenta;
    private $cantInventario;
    private $cantMinima;
    private $fotografias;
    private $id;

    function __construct($nombre, $categoria, $marca, $unidad, $precioVenta, $cantInventario, $cantMinima, $fotografias, $id = "") {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->marca = $marca;
        $this->unidad = $unidad;
        $this->precioVenta = $precioVenta;
        $this->cantInventario = $cantInventario;
        $this->cantMinima = $cantMinima;
        $this->fotografias = $fotografias;
        $this->id = $id;
    }

    function getFotografias() {
        return $this->fotografias;
    }

    function getId() {
        return $this->id;
    }

    function setFotografias($fotografias): void {
        $this->fotografias = $fotografias;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getMarca() {
        return $this->marca;
    }

    function getUnidad() {
        return $this->unidad;
    }

    function getPrecioVenta() {
        return $this->precioVenta;
    }

    function getCantInventario() {
        return $this->cantInventario;
    }

    function getCantMinima() {
        return $this->cantMinima;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    function setMarca($marca): void {
        $this->marca = $marca;
    }

    function setUnidad($unidad): void {
        $this->unidad = $unidad;
    }

    function setPrecioVenta($precioVenta): void {
        $this->precioVenta = $precioVenta;
    }

    function setCantInventario($cantInventario): void {
        $this->cantInventario = $cantInventario;
    }

    function setCantMinima($cantMinima): void {
        $this->cantMinima = $cantMinima;
    }

}
