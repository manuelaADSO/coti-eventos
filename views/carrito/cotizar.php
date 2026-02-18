<div class="table-responsive">
    <table class="table align-middle text-center mt-3">
        <thead class="table-light">
            <tr>
                <th>Evento</th>
                <th>Servicio</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Eliminar</th>
            </tr>
        </thead>

        <tbody id="tablaServicios"></tbody>
    </table>
</div>

<script>

const eventoNombre = "Baby Shower";

const servicios = [
    { nombre:"Vestuario", precio:300000 },
    { nombre:"Banquete personalizado", precio:900000 },
    { nombre:"Música en vivo - DJ", precio:600000 },
    { nombre:"Fotografía y video", precio:750000 }
];

function cargarTabla() {

    const tabla = document.getElementById("tablaServicios");
    tabla.innerHTML = "";

    servicios.forEach((servicio, index) => {

        tabla.innerHTML += `
            <tr>
                <td>${eventoNombre}</td>
                <td class="fw-semibold">${servicio.nombre}</td>
                <td>$${servicio.precio.toLocaleString()}</td>
                <td>
                    <input type="number"
                           min="0"
                           value="1"
                           class="form-control cantidad"
                           data-precio="${servicio.precio}">
                </td>
                <td class="itemTotal">$${servicio.precio.toLocaleString()}</td>
                <td>
                    <button class="btn btn-sm btn-danger eliminar">
                        🗑️
                    </button>
                </td>
            </tr>
        `;
    });

    agregarEventos();
    calcularTotal();
}

function agregarEventos() {

    document.querySelectorAll(".cantidad").forEach(input => {
        input.addEventListener("input", calcularTotal);
    });

    document.querySelectorAll(".eliminar").forEach(boton => {
        boton.addEventListener("click", function() {

            this.closest("tr").remove();
            calcularTotal();

        });
    });
}

function calcularTotal() {

    let subtotal = 0;

    document.querySelectorAll("#tablaServicios tr").forEach(fila => {

        const input = fila.querySelector(".cantidad");
        const precio = parseInt(input.dataset.precio);
        const cantidad = parseInt(input.value) || 0;

        const totalItem = precio * cantidad;
        subtotal += totalItem;

        fila.querySelector(".itemTotal")
            .innerText = "$" + totalItem.toLocaleString();
    });

    const iva = subtotal * 0.19;
    const total = subtotal + iva;

    document.getElementById("subtotal").innerText = "$" + subtotal.toLocaleString();
    document.getElementById("iva").innerText = "$" + iva.toLocaleString();
    document.getElementById("total").innerText = "$" + total.toLocaleString();
}

cargarTabla();

</script>
