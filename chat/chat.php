<div class="modal fade" id="chat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" class="border border-5" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="container-fluid">
                    <h1>Chat</h1>
                    <div class="modal-header">
                        <input id="input" class="form-control" type="text" placeholder="Escribe lo que deseas...."
                            autofocus>
                        <button class="btn btn-outline-info me-3" type="button">Enviar</button>
                    </div>
                    <div class="p-3 bg-light border">
                        <p id="output"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    var input = document.querySelector("#input");
    var output = document.querySelector("#output");
    var stringIn = " ";
    var stringOut = " ";
    var button = document.querySelector("button");

    button.addEventListener("click", clickHandler, false);

    function clickHandler() {
        stringIn = input.value;
        if (stringIn.includes("Como")) {
            if (stringIn === "Como puedo comprar" || stringIn === "¿Como puedo comprar?" || stringIn ===
                "Como puedo comprar?" || stringIn === "Como comprar?" || stringIn === "¿Como comprar?" || stringIn ===
                "Como comprar") {
                stringOut = "La compra se realiza por medio del carrito de compra.\n ¿Puedo ayudarte en algo mas?";
            } else if (stringIn === "Como pagar" || stringIn === "¿Como pagar?" || stringIn === "Como pagar?" ||
                stringIn === "¿Como puedo pagar?" || stringIn === "Como puedo pagar?") {
                stringOut = "El pago se realiza online, aceptamos tarjeta de credito y debito";
            } else if (stringIn === "Como" || stringIn === "como") {
                stringOut = "No entiendo lo que desea, favor de ser mas claro";
            }
        } else if (stringIn.includes("como")) {
            if (stringIn === "como puedo comprar" || stringIn === "¿como puedo comprar?" || stringIn ===
                "¿como comprar?" || stringIn === "como comprar?" || stringIn === "como puedo comprar?") {
                stringOut = "La compra se realiza por medio del carrito de compra.\n ¿Puedo ayudarte en algo mas?";
            } else if (stringIn === "como pagar" || stringIn === "¿como pagar?" || stringIn === "como puedo pagar?" ||
                stringIn === "¿como puedo pagar?") {
                stringOut = "El pago se realiza online, aceptamos tarjeta de credito y debito";
            } else if (stringIn === "¿como" || stringIn === "como") {
                stringOut = "No entiendo lo que desea, favor de ser mas claro";
            }
        } else if (stringIn.includes("Donde")) {
            if (stringIn === "Donde se ubican" || stringIn === "¿Donde se ubican?" || stringIn === "Donde se ubican?") {
                stringOut = "La compra se realiza por medio del carrito de compra.\n ¿Puedo ayudarte en algo mas?";
            } else if (stringIn === "Donde") {
                stringOut = "No entiendo lo que desea, favor de ser mas claro";
            }
        }

        output.innerHTML = stringOut;
    }
</script>