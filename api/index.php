<?php
<!DOCTYPE html>
<html>
    <head>
        <title>CDC (nodejs)</title>
        <meta charset="utf8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="cd.css" />
        <link rel="icon" href="/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <style type="text/css">
            :root {
                --box-color: antiquewhite;
            }
            .box {
                background-color: var(--box-color);
                box-shadow: 8px 8px 6px grey;
                width: 450px;
                border-style: solid;
                border-width: 3px;
                border-color: lightblue;
                padding-left: 10px;
                padding-right: 10px;
                padding-bottom: 10px;
                margin-left: 2px;
            }
            body {
                /*background-color: #f0f0f2; */
                background-image: url("yell_roc.jpg");
                margin: 0;
                padding: 2em;
                font-family: -apple-system, system-ui, BlinkMacSystemFont,
                    "Segoe UI", "Open Sans", "Helvetica Neue", Helvetica, Arial,
                    sans-serif;
            }
            input {
                margin: 10px 3px 10px 3px;
                border: 1px solid grey;
                border-radius: 5px;
                font-size: 12px;
                padding: 5px 5px 5px 5px;
            }
            label {
                position: relative;
                top: 12px;
                width: 190px;
                float: left;
            }
            #submitButton {
                width: 80px;
                margin-left: 20px;
            }
            #errorMessage {
                color: red;
                font-size: 90% !important;
            }
            #successMessage {
                color: green;
                font-size: 90% !important;
                display: block;
                margin-top: 20px;
            }
            .button {
                font-size: 13px;
                color: red;
                background-color: #f8fad7;
            }
            .button:hover {
                background-color: #fadad7;
            }
            #draggable {
                cursor: n-resize;
            }
            #cdcfieldset {
                cursor: move;
            }
            input.currency {
                text-align: left;
                padding-right: 15px;
            }
            .input-group .form-control {
                float: none;
            }
            .input-group .input-buttons {
                position: relative;
                z-index: 3;
            }
            .messages {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <fieldset
            id="cdcfieldset"
            class="draggable ui-widget-content"
            style="
                border: 1px black solid;
                background-color: #cac3ba;
                width: 400px;
            "
        >
            <legend
                style="
                    border: 5px lightblue solid;
                    margin-left: 1em;
                    background-color: #ff6347;
                    padding: 0.2em 0.8em;
                "
            >
                <strong>Crédito Direto ao Consumidor</strong>
            </legend>
            <form method="post">
                <div class="box">
                    <span
                        class="input-group-addon"
                        style="color: var(--box-color)"
                        >$</span
                    >
                    <label for="parc">Parcelamento:</label>
                    <input
                        id="parc"
                        type="number"
                        name="np"
                        size="5"
                        value="88"
                        min="1"
                        max="72000"
                        step="1"
                        required
                    />meses<br />

                    <span
                        class="input-group-addon"
                        style="color: var(--box-color)"
                        >$</span
                    >
                    <label for="itax">Taxa de juros:</label>
                    <input
                        id="itax"
                        type="number"
                        name="tax"
                        size="10"
                        value="4.55"
                        min="0.0"
                        max="100.0"
                        step="any"
                        required
                    />% mês<br />

                    <span class="input-group-addon">$</span>
                    <label for="ipv">Valor Financiado: </label>
                    <input
                        id="ipv"
                        type="number"
                        name="pv"
                        value="23000"
                        min="0.0"
                        step="0.01"
                        class="form-control currency"
                        required
                    /><br />

                    <span class="input-group-addon">$</span>
                    <label for="ipp">Valor Final (opcional):</label>
                    <input
                        id="ipp"
                        type="number"
                        name="pp"
                        value="93964.62"
                        min="0.0"
                        step="0.01"
                        class="form-control currency"
                        required
                    /><br />

                    <span class="input-group-addon">$</span>
                    <label for="ipb">Valor a Voltar(opcional):</label>
                    <input
                        id="ipb"
                        type="number"
                        name="pb"
                        value="0.0"
                        min="0.0"
                        step="0.01"
                        class="form-control currency"
                        required
                    /><br />

                    <span
                        class="input-group-addon"
                        style="color: var(--box-color)"
                        >$</span
                    >
                    <label for="inb">Meses a voltar(opcional):</label>
                    <input
                        id="inb"
                        type="number"
                        name="nb"
                        size="5"
                        value="33"
                        min="0"
                        max="72000"
                        step="1"
                        required
                    />meses<br />

                    <label for="idp">Entrada?</label>
                    <input id="idp" type="checkbox" name="dp" value="1" /><br />
                    <label for="iprt">Imprime?</label>
                    <input
                        id="iprt"
                        type="checkbox"
                        name="pdf"
                        value="1"
                    /><br />
                </div>
                <div class="messages">
                    <input
                        id="submitButton"
                        class="button"
                        type="submit"
                        value="Calcular"
                    />
                    <br />
                    <a href="https://nodejs.org/en">
                        <img src="node.png" width="32"
                    /></a>
                    <a href="https://vercel.com/krotalias/cdc-express">
                        <img src="vercel.png" width="32"
                    /></a>
                    <p>(arraste-me para reposicionar a janela)</p>
                </div>
            </form>

            <div id="errorMessage" class="messages"></div>
            <div id="successMessage" class="messages">
                <p>
                    Se não souber a taxa de juros coloque 0%, e forneça o valor
                    final.
                </p>
            </div>
        </fieldset>
        
        <div id="greenBox" class="rectangle"></div>
        <div id="blueBox" class="rectangle"></div>
        <div id="redBox" class="rectangle"></div>

        <script src="LCG.js"></script>
        <script type="module" src="cdc.js"></script>

        <script type="text/javascript">
            dragAndSave("#cdcfieldset"); // $("#cdcfieldset").draggable()
        </script>
    </body>
</html>

?>
