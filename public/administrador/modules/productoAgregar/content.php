<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4>Nuevo Producto</h4>
                <h6>Crear nuevo producto</h6>
            </div>
        </div>
        <ul class="table-top-head">
            <li>
                <div class="page-btn">
                    <a href="../productoListado" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Ver productos</a>
                </div>
            </li>
            <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-body add-product pb-0">
            <div class="accordion-card-one accordion" id="accordionExample">
                <div class="accordion-item">
                    <div class="accordion-header" id="headingOne">
                        <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                            <div class="addproduct-icon">
                                <h5><i data-feather="info" class="add-info"></i><span>Información del producto</span></h5>
                                <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Nombre - Descripción</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingrese el nombre o la descripción del producto">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="form-label">Categoría</label>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-category" class="btn btn-link">
                                                <i data-feather="plus-circle" class="text-primary"></i> Añadir Nueva
                                            </a>
                                        </div>
                                        <div id="listaCategoria"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="form-label">Marca</label>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-brand" class="btn btn-link">
                                                <i data-feather="plus-circle" class="text-primary"></i> Añadir Nueva
                                            </a>
                                        </div>
                                        <div id="listaMarca"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="form-label">Unidad</label>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-unit" class="btn btn-link">
                                                <i data-feather="plus-circle" class="text-primary"></i> Añadir Nueva
                                            </a>
                                        </div>
                                        <div id="listaUnidad"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-card-one accordion" id="accordionExample2">
                <div class="accordion-item">
                    <div class="accordion-header" id="headingTwo">
                        <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                            <div class="text-editor add-list">
                                <div class="addproduct-icon list icon">
                                    <h5><i data-feather="life-buoy" class="add-info"></i><span>Precio e Inventario</span></h5>
                                    <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="input-blocks add-product">
                                                <label for="precioVenta">Precio de venta</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">$</span>
                                                    <input id="precioVenta" name="precioVenta" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="input-blocks add-product">
                                                <label for="cantInventario">Cantidad en inventario</label>
                                                <input id="cantInventario" name="cantInventario" type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-12">
                                            <div class="input-blocks add-product">
                                                <label for="cantMinima">Cantidad mínima</label>
                                                <input id="cantMinima" name="cantMinima" type="number" class="form-control" value="1">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-card-one accordion" id="accordionExample3">
                <div class="accordion-item">
                    <div class="accordion-header" id="headingThree">
                        <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree">
                            <div class="addproduct-icon list">
                                <h5><i data-feather="image" class="add-info"></i><span>Fotografía</span></h5>
                                <a href="javascript:void(0);"><i data-feather="chevron-down" class="chevron-down-add"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                        <div class="accordion-body">
                            <div class="text-editor add-list add">
                                <div class="col-lg-12">
                                    <div class="mb-4 row align-items-center">
                                        <label for="fotografiasCaso" class="form-label col-sm-3 col-form-label">Fotografías del producto</label>
                                        <div class="col-sm-9">
                                            <form action="#" id="fotografiasProductoForm" class="dropzone">
                                                <div class="fallback">
                                                    <input id="fotografiasProducto" name="fotografiasProducto" type="file" multiple required="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="btn-addproduct mb-4">
            <button  class="btn btn-cancel me-2">Cancelar</button>
            <button id="submit" class="btn btn-submit">Guardar producto</button>
        </div>
    </div>
</div>


<div class="modal fade" id="add-units-category">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Añadir Categoría</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form id="formCategoria">
                            <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" required="">
                            </div>
                            <div class="modal-footer-btn">
                                <button class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-submit">Añadir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="add-units-brand">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Añadir Marca</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form id="formMarca">
                            <div class="mb-3">
                                <label class="form-label">Marca</label>
                                <input type="text" class="form-control" required="">
                            </div>
                            <div class="modal-footer-btn">
                                <button class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancelar</button>
                                <button class="btn btn-submit" type="submit">Añadir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="add-unit">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
            <div class="page-wrapper-new p-0">
                <div class="content">
                    <div class="modal-header border-0 custom-modal-header">
                        <div class="page-title">
                            <h4>Añadir Unidad</h4>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body custom-modal-body">
                        <form id="formUnidad">
                            <div class="mb-3">
                                <label class="form-label">Unidad</label>
                                <input type="text" class="form-control" required="">
                            </div>
                            <div class="modal-footer-btn">
                                <button class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-submit">Añadir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
