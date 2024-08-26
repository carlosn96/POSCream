const urlAPI = "api/ListadoProductosAPI.php";

function ready() {
    crearPeticion(urlAPI, {case: "listar"}, function (res) {
        //print(res);
        var data = [];
        $.each(res, (i, producto) => {
            let nombre = producto.nombre;
            let imagenHTML = '';

            // Verifica si `producto.fotografias` tiene elementos
            if (producto.fotografias && producto.fotografias.length > 0) {
                // Obtén el primer elemento de `producto.fotografias`
                let base64String = producto.fotografias[0];

                // Asegúrate de que la cadena base64 tenga el prefijo adecuado
                let src = base64String.startsWith('data:')
                        ? base64String
                        : `data:image/jpeg;base64,${base64String}`; // Usa el prefijo adecuado para tu tipo de imagen

                imagenHTML = `
                    <a href="javascript:void(0);" class="product-img stock-img">
                        <img src="${src}" alt="${nombre}">
                    </a>
                `;
            }
            data.push({
                "Producto": `
            <div class="productimgname">
                ${imagenHTML} 
                <a href="javascript:void(0);">${nombre}</a>
            </div>
        `,
                "Categoria": producto.categoria,
                "Precio de venta": producto.precioVenta,
                "Unidad de medida": producto.unidad,
                "Inventario": producto.cantInventario,
                "Acciones": {
                    html: crearBotonesAccion(producto.id),
                    clase: "action-table-data"
                }
            });
        });

        construirTablaDataTable(data,
                "table",
                "productos",
                "tablaProductos");

    });

}




function crearBotonesAccion(id) {
    // Crear los elementos HTML usando jQuery
    var $editDeleteAction = $('<div>', {class: 'edit-delete-action'});

    var $viewButton = $('<a>', {
        class: 'me-2 edit-icon p-2',
        href: '../productoDetalles/?id=' + id
    }).append($('<i>', {
        'data-feather': 'eye',
        class: 'feather-eye'
    }));

    var $editButton = $('<a>', {
        class: 'me-2 p-2',
        //href: '../productoEditar/?id=' + id
        href: '#'
    }).append($('<i>', {
        'data-feather': 'edit',
        class: 'feather-edit'
    }));

    var $deleteButton = $('<a>', {
        class: 'confirm-text p-2',
        href: 'javascript:eliminarProducto(' + id + ')'
    }).append($('<i>', {
        'data-feather': 'trash-2',
        class: 'feather-trash-2'
    }));

    // Append buttons to the main container
    $editDeleteAction.append($viewButton, $editButton, $deleteButton);

    // Return the jQuery object
    return $editDeleteAction;
}

function eliminarProducto(id) {
    return alertaEliminar({
        mensajeAlerta: "El producto ya no estará disponible",
        url: urlAPI,
        data: {case: "eliminar", data: "id=" + id}
    });
}


/*
 * 
 * 
 <tr>
 <td>
 <div class="productimgname">
 <a href="javascript:void(0);" class="product-img stock-img">
 <img src="../../../assets/img/products/stock-img-01.png" alt="product">
 </a>
 <a href="javascript:void(0);">Lenovo 3rd Generation </a>
 </div>
 </td>
 <td>Laptop</td>
 <td>Lenovo</td>
 <td>$12500.00</td>
 <td>Pc</td>
 <td>100</td>
 
 <td class="action-table-data">
 
 </div>
 </td>
 </tr>
 * 
 */