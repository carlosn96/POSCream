const urlAPI = "api/ProductoDetallesAPI.php";

function ready() {
    let id = Number(extraerParametrosURL().id);
    var regresar = function () {
        redireccionar("../productoListado");
    };
    if (id) {
        crearPeticion(urlAPI, {case: "recuperar", data: "id=" + id}, function (res) {
            if (res.producto) {
                completarCampos(res.producto);
            } else {
                regresar();
            }
        });
    } else {
        regresar();
    }
}

function completarCampos(producto) {
    // Establece el texto de los elementos <h6> usando jQuery
    $('#nombre').text(producto.nombre);
    $('#categoria').text(producto.categoria);
    $('#marca').text(producto.marca);
    $('#unidad').text(producto.unidad);
    $('#cantMinima').text(producto.cantMinima);
    $('#cantInventario').text(producto.cantInventario);
    $('#precioVenta').append(producto.precioVenta);

    const $contenedor = $('#fotografias');

    producto.fotografias.forEach((base64, index) => {
        const $sliderProduct = $('<div>', {class: 'slider-product'});
        const src = base64.startsWith('data:image/') ? base64 : `data:image/jpeg;base64,${base64}`;
        const $img = $('<img>', {
            src: src,
            alt: `Imagen ${index + 1}`
        });
        $sliderProduct.append($img).append($('<h4>', {text: producto.nombre})).append($('<h6>', {text: producto.marca}));
        $contenedor.append($sliderProduct);
    });
    $('.product-slide').owlCarousel({
        items: 1,
        margin: 30,
        dots: false,
        nav: true,
        loop: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 1
            },
            1170: {
                items: 1
            }
        }
    });
}
