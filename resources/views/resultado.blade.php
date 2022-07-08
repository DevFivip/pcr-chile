<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NovuslisBM - Bioclinic - Resultados de laboratorio clínico</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--This CSS entry was added by the Telerik VS Extensions for compatibility reasons-->
    <link href="https://resultadospcr.ddns.net/Content/kendo.compatibility.css" rel="stylesheet" type="text/css">
    <link href="https://resultadospcr.ddns.net/Content/kendo/2018.1.221/kendo.common-bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://resultadospcr.ddns.net/Content/kendo/2018.1.221/kendo.mobile.all.min.css" rel="stylesheet" type="text/css">
    <link href="https://resultadospcr.ddns.net/Content/kendo/2018.1.221/kendo.bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/1p3YWy80wlZ7Q8QFR1gjazwU/recaptcha__es.js" crossorigin="anonymous" integrity="sha384-ZPMuNoDZ03fyq7pTC+g0MvvlrbFNCDaFT+RlkQ5uOXrZK6cTsv0F1nCfk8oblDIM"></script>
    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/1p3YWy80wlZ7Q8QFR1gjazwU/recaptcha__es.js" crossorigin="anonymous" integrity="sha384-ZPMuNoDZ03fyq7pTC+g0MvvlrbFNCDaFT+RlkQ5uOXrZK6cTsv0F1nCfk8oblDIM"></script>
    <script src="https://resultadospcr.ddns.net/Scripts/kendo/2018.1.221/jquery.min.js"></script>
    <script src="https://resultadospcr.ddns.net/Scripts/kendo/2018.1.221/angular.min.js"></script>
    <script src="https://resultadospcr.ddns.net/Scripts/kendo/2018.1.221/jszip.min.js"></script>
    <script src="https://resultadospcr.ddns.net/Scripts/kendo/2018.1.221/kendo.all.min.js"></script>
    <script src="https://resultadospcr.ddns.net/Scripts/kendo/2018.1.221/kendo.aspnetmvc.min.js"></script>
    <script src="https://resultadospcr.ddns.net/Scripts/kendo.modernizr.custom.js"></script>

    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.1.221/styles/kendo.common.min.css">
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.1.221/styles/kendo.rtl.min.css">
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.1.221/styles/kendo.bootstrap.min.css">
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.1.221/styles/kendo.mobile.all.min.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2018.1.221/js/kendo.all.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header" style="float: none; text-align:center; height: 120px">

                <a target="_blank" href="https://www.bioclinic.cl/"><img src="https://resultadospcr.ddns.net/Images/bioclinic2.png"></a>

            </div>

        </div>
    </nav>
    <div id="body">

        <section class="content-wrapper main-content clear-fix">

            <style>
                fieldset.groupbox-border {
                    border: 1px groove #ddd !important;
                    padding: 0 1.4em 1.4em 1.4em !important;
                    margin: 1.2em 1.2em 1.2em 1.2em !important;
                    -webkit-box-shadow: 0px 0px 0px 0px #000;
                    box-shadow: 0px 0px 0px 0px #000;
                }

                legend.groupbox-border {
                    font-size: 1.2em !important;
                    font-weight: bold !important;
                    text-align: left !important;
                    width: auto;
                    padding: 0px 10px 0px 10px;
                    border-bottom: none;
                }

                #regForm {
                    background-color: #ffffff;
                    margin: 10px auto;
                    padding: 10px;
                    width: 90%;
                    min-width: 300px;
                }

                #recuperarForm {
                    background-color: #ffffff;
                    margin: 10px auto;
                    padding: 10px;
                    width: 90%;
                    min-width: 300px;
                }

                input {
                    padding: 10px;
                    width: 100%;
                    font-size: 17px;
                    font-family: Raleway;
                    border: 1px solid #aaaaaa;
                }

                input.invalid {
                    background-color: #ffdddd;
                }

                .tab {
                    display: none;
                }

                .step {
                    height: 15px;
                    width: 15px;
                    margin: 0 2px;
                    background-color: #bbbbbb;
                    border: none;
                    border-radius: 50%;
                    display: inline-block;
                    opacity: 0.5;
                }

                .step.active {
                    opacity: 1;
                }

                .step.finish {
                    background-color: #4CAF50;
                }

                .buttonload {
                    background-color: white;
                    border: none;
                    color: #337ab7;
                    /*padding: 12px 24px;
        font-size: 16px;*/
                }

                .rojo {
                    color: red;
                }

                #RecuperacionNumero {
                    overflow-x: hidden;
                }

                .EsconderRecover {

                    display: none !important;
                }

                .Bloqueo {
                    pointer-events: none;
                    cursor: default;
                }

                .EsconderAcceso {
                    display: none !important;
                }

                .help {
                    font-size: 12px;
                    background-color: #e79e24;
                    height: 100%;
                    width: 100%;
                    padding: 8px;
                    -webkit-border-radius: 15px 15px 15px 15px;
                }
            </style>

            <div id="paginaPrincipal" style="">

                <div class="container-fluid">
                    <div class="row content vdivide" style="display: flex">
                        <!-- First Container -->
                        <div class="col-lg-6 container-fluid bg-2 text-center">
                            <h3 class="margin">Portal Resultados</h3>
                            <div class="alert alert-success" role="alert" style="text-align: center; display: none;" id="mensajeDivPrin">
                                <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                                <strong id="strong"></strong>
                                <p id="mensajeP"></p>
                            </div>
                            <fieldset class="">
                                <legend class="groupbox-border"></legend>

                                <form id="buscarResultados" method="POST" data-role="validator" novalidate="novalidate">

                                    <div class="col-lg-12">
                                        <label id="numorden">Paciente:</label>
                                        <input readonly class="k-textbox" id="iDatencion" name="iDatencion" value="{{$persona->nombres}}" placeholder="Escribe el número de atención" style="width:100%">
                                    </div>

                                    <div class="col-lg-12">
                                        <label id="numorden">Documento</label>
                                        <input readonly class="k-textbox" id="iDatencion" name="iDatencion" value="{{$persona->documento}}" placeholder="Escribe el número de atención" style="width:100%">
                                    </div>

                                    <div class="col-lg-12">
                                        <label id="numorden">Sexo</label>
                                        <input readonly class="k-textbox" id="iDatencion" name="iDatencion" value="{{$persona->sexo}}" placeholder="Escribe el número de atención" style="width:100%">
                                    </div>

                                    <div class="col-lg-12">
                                        <label id="numorden">Recepción de Muestra</label>
                                        <input readonly class="k-textbox" id="iDatencion" name="iDatencion" value="{{$fecha}}" placeholder="Escribe el número de atención" style="width:100%">
                                    </div>

                                    <div class="col-lg-12">
                                        <label id="numorden">Presentación</label>
                                        <input readonly class="k-textbox" id="iDatencion" name="iDatencion" value="PCR SARS-CoV-2" placeholder="Escribe el número de atención" style="width:100%">
                                    </div>
                                    <div class="col-lg-12">
                                        <label id="numorden">Resultado</label>
                                        <input readonly class="k-textbox" id="iDatencion" name="iDatencion" value="{{$persona->id === 117 || $persona->id === 123 ? 'Positivo':'Negativo'}}" placeholder="Escribe el número de atención" style="width:100%">
                                    </div>


                                </form>
                            </fieldset>
                        </div>

                        <!-- Second Container -->


                    </div>
                </div>

                <div id="recaptcha" class="g-recaptcha" data-sitekey="6LeUVscZAAAAAL1J3Gxk_mHWF7ONl7yaMZiaifl8" data-callback="onSubmit" data-size="invisible" data-theme="dark">
                    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                        <div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeUVscZAAAAAL1J3Gxk_mHWF7ONl7yaMZiaifl8&amp;co=aHR0cHM6Ly9yZXN1bHRhZG9zcGNyLmRkbnMubmV0OjQ0Mw..&amp;hl=es&amp;v=1p3YWy80wlZ7Q8QFR1gjazwU&amp;theme=dark&amp;size=invisible&amp;cb=n64qdmmn3ccf" width="256" height="60" role="presentation" name="a-xp54grcbqlza" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe></div>
                        <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                    </div><iframe style="display: none;"></iframe>
                </div>

                <span id="staticNotification" data-role="notification" style="display: none;"></span>
                <span id="staticValidation" data-role="notification" style="display: none;"></span>




                <div class="col-xs-12" id="teminos-condiciones_" style="padding:20px; display: none;">
                    <div class="modal-footer">
                        <div class="btn-group pull-right">
                            <button id="aceptar-terminos_" class="btn btn-primary">Acepto los terminos</button>
                            <button id="cancelar-terminos_" class="btn">Cancelar</button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center"><label>Términos y Condiciones de uso</label> </h4>
                        <div>Estimado Usuario:</div>
                        <br>
                        <p style="text-align:justify">
                            Usted está a punto de acceder a recuperar un número de atención que le permitirá acceder a consultar los resultados asociados. Le informamos que la copia, difusión o cualquier mal uso de esta información está sancionada por la ley.
                        </p>
                        <p style="text-align:justify">
                            Al aceptar estos términos, autoriza a Laboratorio Bioclinic a enviarle dicho número de atención a través del canal seleccionado previamente por usted
                        </p>

                    </div>
                </div>

                <!-- Third Container (Grid) -->
                <div class="container-fluid bg-3 text-center">
                    <h3 class="margin"><a id="preguntas" href="#respuestas">¿Preguntas?</a> </h3><br>

                    <div class="row" id="respuestas">

                        <div class="col-sm-4">
                            <!--    <h4>Hay exámenes que no veo.</h4>  -->
                            <!--   <p>  -->
                            <!--       Los resultados de estos exámenes sólo se entregan en forma personal al paciente directamente en el Laboratorio en que fueron tomadas las muestras.  -->
                            <!--      <a id="lista" title="Exámenes" data-container="body" data-toggle="popover"  -->
                            <!--         data-placement="top" data-trigger="hover" data-html="true"  -->
                            <!--         data-target="#my-popover-content">  -->
                            <!--          Ver lista  -->
                            <!--      </a>  -->
                            <!--  </p>  -->

                            <!--   <span class="fa fa-file-text" style="font-size:50px"></span>  -->
                            <h4>No se encuentra mi resultado.</h4>
                            <p>Contáctenos a <a href="mailto:resultados@bioclinic.cl">resultados@bioclinic.cl</a> e indíquenos su nombre y apellido, RUT o pasaporte, sucursal y fecha de atención.</p>
                            <span class="fa fa-male" style="font-size:50px"></span>
                        </div>

                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4">
                            <h4>¿Otro tipo de dudas?</h4>
                            <p>Escríbenos a: <a href="mailto:Contacto@bioclinic.cl">Contacto@bioclinic.cl</a></p>
                            <span class="fa fa-envelope" style="font-size:50px"></span>
                        </div>
                    </div>
                </div>

                <div id="prestacionesPaciente"></div>

            </div>




            <span id="RecuperarAtencionPopUp" data-role="notification" style="display: none;">

            </span>
            <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
            <script type="text/html" id="my-popover-content">
                <ul>
                    <li>Fosfatasas alc. c/separación isoenz. c/u</li>
                    <li>H.I.V.</li>
                    <li>Electroforesis de proteínas urinarias</li>
                    <li>Electroforesis de proteínas</li>
                </ul>
            </script>
            <style>
                .popover {
                    z-index: 100004
                }

                .k-dropdown-wrap {
                    padding-bottom: 5px;
                }


                #lista:hover {
                    text-decoration: none;
                    cursor: help;
                }

                #preguntas {
                    color: #2f2f2f;
                }

                #preguntas:hover,
                #terminos:hover {
                    text-decoration: none;
                    color: #23527c;
                }

                #terminos {
                    border-bottom: solid 1px;
                    color: #000000;
                }

                #myID {
                    text-decoration: none;
                }

                .modal-footer {
                    border-top: none;
                    border-bottom: 1px solid #e5e5e5;
                    padding-top: unset;
                }

                .row.vdivide [class*='col-lg-6']:not(:last-child):after {
                    background: #e0e0e0;
                    width: 1px;
                    content: "";
                    display: block;
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    right: 0;
                    min-height: 70px;
                }
            </style>
            <label id="TokenSecurityLis"></label>
            <script>
                var tes1 = function(e) {


                    var subcadena = e.substr(0, 7)

                    return subcadena;
                }

                var tes2 = function(e) {

                    if (e.charAt(7) == "-") {

                        var subcadena = e.substr(0, 7)
                        return subcadena;
                    } else {

                        var subcadena = e.substr(0, 7)
                        return subcadena + "-" + e.charAt(7);
                    }
                }

                var tes3 = function(e) {

                    if (e.charAt(8) == "-") {

                        var subcadena = e.substr(0, 8)
                        return tes2(subcadena);
                    }
                }

                var tes4 = function(e) {

                    var subcadena = e.replace("-", "");
                    var cadena1 = subcadena.substr(0, 8)
                    var cadena = cadena1 + "-" + e.charAt(9)

                    return cadena;

                }

                $("#RutPaciente").keydown(e => {
                    let forbbKeys = [109, 189];
                    if (forbbKeys.includes(e.keyCode)) return false;
                })

                $("#RutPaciente").keyup(function(e) {
                    let text, textLenght, rut, dv;
                    text = $(e.target).val().replace("-", "");
                    textLenght = text.length;
                    rut = text.substr(0, textLenght - 1);
                    dv = text.substr(textLenght - 1, 1);

                    if (dv === "k") dv = dv.toUpperCase();

                    $(e.target).val(rut + "-" + dv);
                })

                $("#Identificacion").change(function(e) {
                    //if ($("#Identificacion").data("kendoDropDownList").value() == "P") {
                    if ($("#Identificacion").val() == "P") {
                        $("#RutPaciente").closest("span").hide();
                        $("#Pasaporte").show();
                    } else {
                        $("#RutPaciente").closest("span").show();
                        $("#Pasaporte").hide();
                    }
                })

                $("#IngresarSubmit").click(function() {

                    var identificacion = $("#Identificacion").val();
                    var pasaporte = $("#Pasaporte").val();
                    var rut = $("#RutPaciente").data("kendoMaskedTextBox").value().split(" ")[0];
                    var orden = $("#iDatencion").val();

                    $.ajax({
                        url: "/Resultados/SecurityVerification",
                        //method: "POST",
                        data: {
                            rut: rut,
                            orden: orden,
                            pasaporte: pasaporte,
                            identificacion: identificacion
                        },
                        success: function(e) {

                            if (e != undefined) {

                                $("#ValidationUsersTok").text("Paciente verificado, continuar.")
                                $("#IngresarSubmit").addClass("EsconderAcceso");
                                $("#TokenSecurityLis").val(e);
                                $("#submit").removeClass("EsconderAcceso");
                                $("#submit").click()
                            }
                        }
                    })
                })

                function onSubmit(token) {
                    var Tok = $("#TokenSecurityLis").val()
                    window.location.replace("/Resultados/_Resultados?Tok=" + Tok);
                    return
                }
                $("#RutPaciente").click(function(e) {
                    $("#RutPaciente").data("kendoMaskedTextBox").value($("#RutPaciente").data("kendoMaskedTextBox").value())
                })
                $("#RutPaciente").focus(function(e) {
                    $("#RutPaciente").data("kendoMaskedTextBox").value($("#RutPaciente").data("kendoMaskedTextBox").value())
                })
                $("#RutPaciente").blur(function(e) {
                    staticValidation.hide()
                    if (!Fn.validaRut($("#RutPaciente").data("kendoMaskedTextBox").value())) {
                        staticValidation.show("<label> &nbsp;&nbsp;  RUT no válido</label>", "error");
                    }
                })

                function validate(event) {
                    event.preventDefault();


                    staticValidation.hide()
                    if (validator.validate() && $("#aceptoTerminos").is(":checked") && ((Fn.validaRut($("#RutPaciente").data("kendoMaskedTextBox").value()) && $("#Identificacion").val() == "R") || ($("#Identificacion").val() == "P" && $("#Pasaporte").val() != ""))) {

                        grecaptcha.execute();


                    } else {

                        validator.hideMessages();
                        var lista = "";


                        if ($("#RutPaciente").val() == "" && $("#Identificacion").val() == "R") {

                            staticValidation.show("<label>  &nbsp;&nbsp; Campos obligatorio:</label> Rut paciente", "error");

                        } else if ($("#Pasaporte").val() == "" && $("#Identificacion").val() == "P") {

                            staticValidation.show("<label>  &nbsp;&nbsp; Campos obligatorio:</label> Pasaporte paciente", "error");

                        } else if (!Fn.validaRut($("#RutPaciente").data("kendoMaskedTextBox").value()) && $("#Identificacion").val() == "R") {
                            staticValidation.show("<label> &nbsp;&nbsp;  RUT no válido</label>", "error");
                        }
                        if ($("#iDatencion").val() == "") {

                            staticValidation.show("<label> &nbsp;&nbsp;  Campos obligatorio:</label> Número de Atención", "error");

                        }
                        if ($("#aceptoTerminos").is(":checked") == false) {
                            staticValidation.show("<label> &nbsp;&nbsp;  Debe aceptar Terminos y condiciones</label>", "warning");
                        }




                    }




                }

                function onload() {
                    var element = document.getElementById('submit');
                    element.onclick = validate;
                }


                var Fn = {
                    validaRut: function(rutCompleto) {
                        if (!/^[0-9]+-[0-9kK]{1}$/.test(rutCompleto))
                            return false;
                        var tmp = rutCompleto.split('-');
                        var digv = tmp[1];
                        var rut = tmp[0];
                        if (digv == 'K') digv = 'k';
                        return (Fn.dv(rut) == digv);
                    },
                    dv: function(T) {
                        var M = 0,
                            S = 1;
                        for (; T; T = Math.floor(T / 10))
                            S = (S + T % 10 * (9 - M++ % 6)) % 11;
                        return S ? S - 1 : 'k';
                    }
                }


                var validator = $("#buscarResultados").kendoValidator({
                    validateOnBlur: false,
                }).data("kendoValidator");
                var myWindow = $("#teminos-condiciones");

                var myID = $("#ver-imagen-id");


                var prestacionesPaciente = $("#prestacionesPaciente");

                myID.kendoWindow({
                    width: "890px",
                    title: "¡Mi Número de Atención!",
                    visible: false,
                    actions: [
                        "Close"
                    ],
                    modal: true,
                }).data("kendoWindow").center();

                myWindow.kendoWindow({
                    width: "600px",
                    title: "¡Aviso!",
                    visible: false,
                    actions: [
                        "Close"
                    ],
                    modal: true,
                    open: (e) => {
                        console.log(e)
                        if (window.innerWidth <= 760) e.sender.maximize()
                        else {
                            if (e.sender.isMaximized()) e.sender.toggleMaximization()
                        }
                    }
                }).data("kendoWindow").center();

                $("#myID").click(function(e) {

                    if ($(window).width() < 600) {
                        $("#ver-imagen-id").data("kendoWindow").setOptions({
                            width: "100%"
                        });

                        $("#img-id").width("100%")
                        $("#img-id").height("100%")

                    }
                    myID.data("kendoWindow").open();
                })

                $("#terminos").click(function(e) {
                    if ($(window).width() < 600) {
                        $("#teminos-condiciones").data("kendoWindow").setOptions({
                            width: "100%"
                        });
                    }
                    myWindow.data("kendoWindow").center().open();
                })


                $("#cerrar-ver-imagen-id").click(function(e) {
                    myID.data("kendoWindow").close()
                })

                $("#buscar").click(function(e) {
                    buscarIndicacion()
                })

                $("#aceptoTerminos").click((e) => {
                    e.preventDefault();
                    myWindow.data("kendoWindow").center().open();
                })

                $("#aceptar-terminos").click(function(e) {
                    $("#aceptoTerminos").prop("checked", true)
                    myWindow.data("kendoWindow").close();
                })



                $("#cancelar-terminos").click(function(e) {
                    myWindow.data("kendoWindow").close();
                })
                var staticNotification = $("#staticNotification").kendoNotification({
                    appendTo: "#indicaciones",
                    autoHideAfter: 0,
                }).data("kendoNotification");

                var staticValidation = $("#staticValidation").kendoNotification({
                    appendTo: "#validacion",
                    autoHideAfter: 0,
                }).data("kendoNotification");

                function buscarIndicacion() {

                    var codigo = $("#prestacion").val().split(" | ");

                    $.ajax({
                        url: "/Resultados/GetIndicacionPrestacion",
                        method: "POST",
                        data: {
                            codigo: codigo[0]
                        },
                        success: function(e) {
                            staticNotification.hide()
                            staticNotification.show("<div style='word-wrap: break-word; white-space: normal;'>" + e.indicacion + "</div>", "info");

                            $("#prestacion").val("");

                        }
                    })
                }
                $(document).ready(function() {

                    $("#divCargando").hide();

                    var contentElementId = $("[data-toggle='popover']").data().target;
                    var contentHtml = $(contentElementId).html();
                    $("[data-toggle='popover']").popover({
                        content: contentHtml
                    });

                    $("#toolSolicitud").kendoTooltip({
                        content: "Seleccione en caso de que quiera consultar por Documento y Número de atención."
                    });
                    $("#toolIniciar").kendoTooltip({
                        content: "Paciente ya registrado previamente."
                    });

                    $('#mensajeDivPrin').hide();

                    $('#paginaPrincipal').show(500);

                })
                let mensajeParaUsuario = (mens1, mens2, opcion) => {

                    $('#mensajeDivPrin').show();

                    console.log(`mens1:${ mens1 } ,mens2: ${ mens2 }, opcion: ${ opcion }`);

                    $('#mensajeDivPrin').removeClass();

                    if (opcion == 'Error') {
                        $('#mensajeDivPrin').addClass('alert alert-danger');
                    } else {
                        $('#mensajeDivPrin').addClass('alert alert-success');
                    }

                    document.getElementById("strong").textContent = mens1;
                    document.getElementById("mensajeP").textContent = mens2;

                    window.setTimeout(function() {
                        $(".alert").fadeTo(5000, 0).slideUp(500, function() {
                            $('#mensajeDivPrin').hide();
                        });
                    }, 500);
                }

                ///Portal recuperacion 
                var onCloseWindow = function() {}
                var WinRecuperacion = $("#RecuperacionNumero");

                WinRecuperacion.kendoWindow({
                    title: "Recuperación de Nº de Atención",
                    modal: true,
                    //width: 500,
                    width: 300,
                    //height: 'auto',
                    height: 400,
                    top: -110,
                    visible: false,
                    resizable: true,
                    iframe: false,
                    scrollable: true,
                    refresh: function() {
                        this.center();
                    },
                    close: onCloseWindow,
                });

                function Recuperar(id) {
                    WinRecuperacion.data("kendoWindow")
                        .refresh({
                            url: "/Resultados/RecuperacionNumero",
                            data: {
                                id: id
                            }
                        })
                        .center().open();
                }

                $("#RecuperarNumero").click(function() {

                    Recuperar(0);
                });


                var RecuperacionAt = $("#RecuperarAtencionPopUp").kendoNotification({
                    position: {
                        pinned: true,
                        top: 40,
                        left: null,
                        bottom: null,
                        right: 20
                    }
                }).data("kendoNotification");


                var ConfirmacionEnvioRecuperacion = $("#ConfirmacionRecuperacion").kendoDialog({
                    visible: false,
                    title: "Recuperación",
                    width: 300,
                    height: 'auto',
                    closable: true,
                    size: "small",
                    messages: {
                        close: "Cerrar!"
                    }
                }).data("kendoDialog");


                $("#ConfirmarRecuperacion").click(function() {

                    var TipoEnvio = $("#TipoEnvio").data("kendoDropDownList").value();
                    var Orden = $("#Recuperacion").val()
                    //var Correo = $("#CorreoRecuperacion").val()
                    var Correo = $("#Correo_").val()
                    var Fono = $("#fono_").val()
                    //var Fono = $("#FonoRecuperacion").val()


                    $.ajax({
                        data: {
                            Orden: Orden,
                            TipoEnvio: TipoEnvio,
                            Correo: Correo,
                            Fono: Fono
                        },
                        method: "POST",
                        url: "/Resultados/EnviarNumeroAtencion",
                        success: function(data) {
                            debugger
                            if (data.tipoRespuesta == "Ok") {
                                RecuperacionAt.show("Se ha enviado correctamente", "success");
                            }
                            if (data.tipoRespuesta == "No existe") {

                                RecuperacionAt.show("No se encuentra información, intente con otra fecha", "error");
                            }

                        }

                    });
                });

                function SelectTypeSend() {
                    debugger
                    var TipoEnvio = $("#TipoEnvio").data("kendoDropDownList").value();
                    if (TipoEnvio == 1) {

                        $("#Correo1").removeClass("EsconderRecover")
                        $("#fono_1").addClass("EsconderRecover")
                        $("#fono_2").addClass("EsconderRecover")

                    }
                    if (TipoEnvio == 2) {
                        $("#Correo1").addClass("EsconderRecover")
                        $("#fono_1").removeClass("EsconderRecover")
                        $("#fono_2").removeClass("EsconderRecover")

                    }

                }

                function DataBoundTypeEvent() {

                    var TipoEnvio = $("#TipoEnvio").data("kendoDropDownList").value();
                    if (TipoEnvio == 1) {

                        $("#Correo1").removeClass("EsconderRecover")
                        $("#fono_1").addClass("EsconderRecover")
                        $("#fono_2").addClass("EsconderRecover")

                    }
                    if (TipoEnvio == 2) {
                        $("#Correo1").addClass("EsconderRecover")
                        $("#fono_1").removeClass("EsconderRecover")
                        $("#fono_2").removeClass("EsconderRecover")

                    }
                }
            </script>

            <script>
                onload();
            </script>


        </section>
    </div>
    <div class="k-widget k-window" data-role="draggable" style="padding-top: 35px; min-width: 90px; min-height: 50px; width: 890px; display: none; top: 92.5px; left: 515px;">
        <div class="k-window-titlebar k-header" style="margin-top: -35px;">&nbsp;<span class="k-window-title" id="ver-imagen-id_wnd_title">¡Mi Número de Atención!</span>
            <div class="k-window-actions"><a role="button" href="#" class="k-button k-bare k-button-icon k-window-action" aria-label="Close"><span class="k-icon k-i-close"></span></a></div>
        </div>
        <div id="ver-imagen-id" style="padding: 20px;" data-role="window" class="k-window-content k-content" tabindex="0" role="dialog" aria-labelledby="ver-imagen-id_wnd_title">
            <div class="modal-body">
                <img id="img-id" src="/Images/comprobante.png">
            </div>
            <div class="modal-footer">
                <div class="btn-group pull-right">
                    <button id="cerrar-ver-imagen-id" class="btn btn-primary">Cerrar</button>

                </div>
            </div>
        </div>
        <div class="k-resize-handle k-resize-n"></div>
        <div class="k-resize-handle k-resize-e"></div>
        <div class="k-resize-handle k-resize-s"></div>
        <div class="k-resize-handle k-resize-w"></div>
        <div class="k-resize-handle k-resize-se"></div>
        <div class="k-resize-handle k-resize-sw"></div>
        <div class="k-resize-handle k-resize-ne"></div>
        <div class="k-resize-handle k-resize-nw"></div>
    </div>
    <div class="k-widget k-window" data-role="draggable" style="padding-top: 35px; min-width: 90px; min-height: 50px; width: 600px; display: none; top: 171px; left: 660px;">
        <div class="k-window-titlebar k-header" style="margin-top: -35px;">&nbsp;<span class="k-window-title" id="teminos-condiciones_wnd_title">¡Aviso!</span>
            <div class="k-window-actions"><a role="button" href="#" class="k-button k-bare k-button-icon k-window-action" aria-label="Close"><span class="k-icon k-i-close"></span></a></div>
        </div>
        <div class="col-xs-12 k-window-content k-content" id="teminos-condiciones" style="padding: 20px;" data-role="window" tabindex="0" role="dialog" aria-labelledby="teminos-condiciones_wnd_title">
            <div class="modal-footer">
                <div class="btn-group pull-right">
                    <button id="aceptar-terminos" class="btn btn-primary">Acepto los terminos</button>
                    <button id="cancelar-terminos" class="btn">Cancelar</button>
                </div>
            </div>
            <div class="modal-body">
                <h4 class="text-center"><label>Términos y Condiciones de uso</label> </h4>
                <div>Estimado Usuario:</div>
                <br>
                <p style="text-align:justify">
                    Usted va a acceder a información confidencial y expresamente clasificada como datos sensibles por la Ley. Si los resultados de exámenes de Laboratorio que aquí se entregan no le pertenecen, le informamos que la copia, difusión o cualquier mal uso de esta información está sancionada por la ley.
                </p>
                <p style="text-align:justify">
                    La entrega de resultados de exámenes por internet está sujeta a la Ley N° 19.628*, que regula la protección de datos de carácter personal y a la Ley N°20.584 que REGULA LOS DERECHOS Y DEBERES QUE TIENEN LAS PERSONAS EN RELACIÓN CON ACCIONES VINCULADAS A SU ATENCIÓN EN SALUD.
                </p>
                <p style="text-align:justify">
                    Los resultados únicamente se podrán consultar mediante el uso del número de RUN y número de Atención que aparecerá en su comprobante. El comprobante o etiqueta de Atención es un documento de carácter personal que será entregado al momento de la toma de muestras.
                </p>
                <p style="text-align:justify">
                    El Laboratorio, no es responsable por las interpretaciones que los pacientes hagan de sus resultados, los que deberán ser revisados e interpretados por un médico.
                </p>
                <p style="text-align:justify">
                    Te informamos que este sistema esté certificado para acceder desde tu computador de escritorio y dispositivos Android, con navegadores Google Chrome, Firefox o Safari. Además, para poder ver los informes PDF, debes tener instalado Acrobat Reader o similar.
                </p>

                <p>
                    <a id="lista" title="" data-container="body" data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true" data-target="#my-popover-content" data-original-title="Exámenes">
                        Ver lista de exámenes no disponibles en este portal
                    </a>
                </p>
            </div>
        </div>
        <div class="k-resize-handle k-resize-n"></div>
        <div class="k-resize-handle k-resize-e"></div>
        <div class="k-resize-handle k-resize-s"></div>
        <div class="k-resize-handle k-resize-w"></div>
        <div class="k-resize-handle k-resize-se"></div>
        <div class="k-resize-handle k-resize-sw"></div>
        <div class="k-resize-handle k-resize-ne"></div>
        <div class="k-resize-handle k-resize-nw"></div>
    </div>
    <div class="k-widget k-window" data-role="draggable" style="padding-top: 35px; min-width: 90px; min-height: 50px; width: 300px; height: 400px; display: none; top: 0px; left: 0px;">
        <div class="k-window-titlebar k-header" style="margin-top: -35px;">&nbsp;<span class="k-window-title" id="RecuperacionNumero_wnd_title">Recuperación de Nº de Atención</span>
            <div class="k-window-actions"><a role="button" href="#" class="k-button k-bare k-button-icon k-window-action" aria-label="Close"><span class="k-icon k-i-close"></span></a></div>
        </div>
        <div id="RecuperacionNumero" style="overflow-x: hidden !important;" data-role="window" class="k-window-content k-content" tabindex="0" role="dialog" aria-labelledby="RecuperacionNumero_wnd_title">

        </div>
        <div class="k-resize-handle k-resize-n"></div>
        <div class="k-resize-handle k-resize-e"></div>
        <div class="k-resize-handle k-resize-s"></div>
        <div class="k-resize-handle k-resize-w"></div>
        <div class="k-resize-handle k-resize-se"></div>
        <div class="k-resize-handle k-resize-sw"></div>
        <div class="k-resize-handle k-resize-ne"></div>
        <div class="k-resize-handle k-resize-nw"></div>
    </div>

    <footer class="bg-4 text-center">
        <div class="col-xs-12 col-md-6" style="padding: 10px">
            ©️ 2021 - NovusLis ®️ | SIRANTIC - Soluciones Informáticas en Salud
        </div>
        <div class="col-xs-12 col-md-6" style="padding: 30px; margin-top:-18px">
            <a class="text-center" target="_blank" href="http://www.sirantic.cl" <a=""> www.sirantic.cl</a>
        </div>
    </footer>




    <style>
        #body {
            background-color: #fff;
            padding-bottom: 10px;
        }

        body {
            font: Montserrat, sans-serif;
            line-height: 1.8;
            background-color: #2f2f2f;
            margin-top: 150px;
        }



        .margin {
            margin-bottom: 45px;
        }

        h3 {
            color: #922B21;
        }

        /*footer{
        height:300px;
    }*/

        .bg-2 {
            background-color: #fefefe;
            /* Dark Blue */
            color: #000000;
        }

        #indicaciones,
        .bg-3 {
            background-color: #ffffff;
            /* White */
            color: #555555;
        }

        .bg-4 {
            background-color: #2f2f2f;
            /* Black Gray */
            color: #fff;
            padding-bottom: 10px;
        }

        .container-fluid {
            padding-top: 15px;

        }

        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }

        .navbar-nav li a:hover {
            /*color: #1abc9c !important;*/
            color: #0094ff !important;
        }

        .navbar-header img {
            height: 100%;
        }
    </style>
    <div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;">
        <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div>
        <div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;"><iframe title="El reCAPTCHA caduca dentro de dos minutos" src="https://www.google.com/recaptcha/api2/bframe?hl=es&amp;v=1p3YWy80wlZ7Q8QFR1gjazwU&amp;k=6LeUVscZAAAAAL1J3Gxk_mHWF7ONl7yaMZiaifl8" name="c-xp54grcbqlza" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" style="width: 100%; height: 100%;"></iframe></div>
    </div>
</body>

</html>