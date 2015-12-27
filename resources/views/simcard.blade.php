<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Belltronic</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Selectpicker CSS -->
    <link href="css/utilities/bootstrap-select.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Page CSS  -->
    <link href="css/simcard.css" rel="stylesheet">
    
    <link href="css/finanzas.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link href="css/colors.css" rel="stylesheet">
    
    <!-- Base CSS -->
    <link href="css/base.css" rel="stylesheet">
    
    <!-- Loading Animation CSS -->
    <link href="css/utilities/utilities.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">Belltronic</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#buscar">Buscar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#paquetes">Paquetes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#miestado">Mi Estado</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#libres">Libres</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#empaquetar">Empaquetar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#asignaciones">Asignaciones</a>
                    </li>
                    @if($user->isAdmin)
                    <li>
                        <a class="page-scroll" data-target="#modal_upload" data-toggle="modal" href="#modal_upload"><span class="glyphicon glyphicon-cloud-upload"></span></a>
                    </li>
                    @endif
                    <li>
                        <a class="page-scroll" href="/settings"><span class="glyphicon glyphicon-cog"></span></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/auth/logout"><span class="glyphicon glyphicon-off"></span></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container dark_cover">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenido a tu portal</div>
                <div class="intro-heading">Revisa tus simcards</div>
                <a href="/" class="page-scroll btn btn-xl">Volver</a>
            </div>
        </div>
    </header>

    <!-- BUSCAR SIMCARD   -->
    <section id="buscar">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Encuentra tus Simcards</h2>
                    @if($user->isAdmin)
                    <h3 class="section-subheading text-muted" style="color:black;margin-bottom:10px">Ingresa la ICC o el numero de telefono. 
                    Recuerda que <span class ="red_text"> Rojo </span> es Vencida, <span class ="blue_text">Azul</span> es Disponible y <span class ="green_text">Verde</span> es Activada.</h3>
                    <h3 class="section-subheading text-muted blue_strong_text">Para asignar primero busca la simcard y luego presiona el boton ASIGNAR</h3>
                    @else
                    <h3 class="section-subheading text-muted" style="color:black">Ingresa la ICC o el numero de telefono. 
                    @endif
                </div>
            </div>
            <div class="row text-center ">
                <div class="col-md-4" style="display: inline-block;
    vertical-align: middle;
    float: none;">
                    <div id="search_container" class = "search_container">
                        <h3 class = "section_body_content white" style="margin-top:0">Busca una simcard</h3>
                            <input class = "data" type="number" placeholder = "ICC / Tel" id = "dato_buscar_sim" />
                        <div style="margin:auto">
                            <button class="button gray" style="margin-right:4%;width:45%" onClick="limpiar_campos()">Limpiar</button>
                            <button class = "button" style="width:45%" onClick = "buscarSim()">Buscar</button>
                            @if($user->isAdmin)
                            <button class = "button button_assign" style="width:45%;margin-top:10px" onClick = "$('#modal_seleccionar_subdistri_unidad').modal('show')">Asignar</button>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-7" style="display: inline-block;
    vertical-align: middle;
    float: none;">
                    <div class = "search_results_container" style="margin-top:0">
                        @if ($user->isAdmin)
                            <div class ="gray" style="flex-grow:2" id="ICC-container">
                                <input class="center white white_input" type="number" id = "ICC-resultado" placeholder="ICC"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="telefono-container">
                                <input class="center white white_input" type="number" id = "telefono-resultado" placeholder="Teléfono"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="paquete-container">
                                <input class="center white white_input" type="text" id = "paquete-resultado" placeholder="Paquete"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="tipo-container">
                                <input class="center white white_input" type="text" id = "tipo-resultado" placeholder="Tipo"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="distribuidor-container">
                                <button class="center white white_input" id ="distribuidor-resultado" onClick="$('#modal-distribuidor').modal('show')" style="background:none;border:none;" >Distribuidor</button>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="subdistribuidor-container">
                                <button class="center white white_input" id ="subdistribuidor-resultado" onClick="$('#modal-subdistribuidor').modal('show')" style="background:none;border:none;">Subdistribuidor</button>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="fecha_vencimiento-container">
                                <p class ="white" style ="margin-top:5px;"> Vencimiento </p>
                                <input class="center white white_input" type="date" id = "fecha_vencimiento-resultado" placeholder="Vencimiento"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="fecha_activacion-container">
                                <p class ="white"  style ="margin-top:5px;"> Activación </p>
                                <input class="center white white_input" type="date" id = "fecha_activacion-resultado" placeholder="Activación"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="fecha_entrega-container">
                                <p class ="white"  style ="margin-top:5px;"> Entregada </p>
                                <input class="center white white_input" type="date" id = "fecha_entrega-resultado"></input>
                            </div style="align-self:flex-end">
                        @else
                            <div class ="gray"style="flex-grow:2" id="ICC-container">
                                <input disabled=true class="center white white_input" type="number" id = "ICC-resultado" placeholder="ICC"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="telefono-container">
                                <input disabled=true class="center white white_input" type="number" id = "telefono-resultado" placeholder="Teléfono"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="paquete-container">
                                <input disabled=true class="center white white_input" type="text" id = "paquete-resultado" placeholder="Paquete"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="tipo-container">
                                <input  disabled=true class="center white white_input" type="text" id = "tipo-resultado" placeholder="Tipo"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="distribuidor-container">
                                <button class="center white white_input" disabled=true id ="distribuidor-resultado" onClick="$('#modal-distribuidor').modal('show')" style="background:none;border:none;" >Distribuidor</button>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="subdistribuidor-container">
                                <button class="center white white_input" disabled =true id ="subdistribuidor-resultado" onClick="$('#modal-subdistribuidor').modal('show')" style="background:none;border:none;">Subdistribuidor</button>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="fecha_vencimiento-container">
                                <p class ="white" style ="margin-top:5px;"> Vencimiento </p>
                                <input disabled=true class="center white white_input" type="date" id = "fecha_vencimiento-resultado" placeholder="Vencimiento"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="fecha_activacion-container">
                                <p class ="white"  style ="margin-top:5px;"> Activación </p>
                                <input class="center white white_input" disabled=true type="date" id = "fecha_activacion-resultado" placeholder="Activación"></input>
                            </div>
                            <div class ="gray" style="flex-grow:2" id="fecha_entrega-container">
                                <p class ="white"  style ="margin-top:5px;"> Entregada </p>
                                <input class="center white white_input" disabled=true type="date" id = "fecha_entrega-resultado"></input>
                            </div style="align-self:flex-end">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION PAQUETES -->
    <section id="paquetes" class ="parallax">
        <div class="container dark_cover">
            <div class="container">
                 <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading orange_text">Encuentra tus paquetes</h2>
                        <h3 class="section-subheading text-muted white" style="font-size:18px">Ingresa el numero de telefono o de ICC y encontrarás todas las simcards del paquete a la que pertenezca. Puedes darle click a una simcard para obtener más información de ella.</h3>
                    </div>
                </div>
                <div class="principal-view-body-container">
                    <div class ="package_form_container">
                        <input class="data_package white white_input" style="background:none;font-size:18px" type="number" id = "datos_busqueda_paquete" placeholder="ICC / Tel"></input>
                        <button class="button" onClick="buscarPaquete()" style="height:42px;width:10%;margin-right:20px">Buscar</button>
                            <button class="button button_assign" onClick="$('#modal_seleccionar_subdistri').modal('show')" style="height:42px;width:10%">Asignar</button>
                    </div>
                    <div class = "search_results_container" id ="container_simcards_paquete">
                          
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- SECCION MI ESTADO -->
    <section id="miestado" class="parallex">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Estado Simcards</h2>
                    <h3 class="section-subheading text-muted" style="color:black">Revisa el estado de tus simcards separadas por tipo y mes.
                    Recuerda que <span class ="red_text"> Rojo </span> son las Vencidas en el mes y <span class ="green_text">Verde</span> son las Activadas en el mes.</h3>
                </div>
            </div>
            <div class="row">
                <div class ="mystatus_container">
                    <div>
                        <div class="chart_container">
                            <div style="weight:100%;height:100%">
                                <div class="preloader" id ="loader_prepago"> <i class="fa fa-cog fa-spin  blue_strong_text"></i></div>
                                <canvas id="canvasPrepago"></canvas>
                            </div>
                        </div>
                        <div class="portfolio-caption">
                            <h4 style ="text-align:center;">Prepago Pack</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION LIBRES  -->
    <section id="libres" class ="parallax">
        <div class="container dark_cover" style="padding:50px 0">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading orange_text">Planes Libres</h2>
                        <h3 class="section-subheading text-muted white" style="font-size:18px;margin-bottom:30px">Ingresa un numero de celular de una simcard libre y encontrarás toda la información del cliente asociado a ella.
                        </h3>
                    </div>
                </div>
                <div class="row text-center ">
                    <div class="col-md-4" style="display: inline-block;
        vertical-align: middle;
        float: none;">
                        <div id="search_container" class = "search_container gray_dark">
                            <h3 class = "section_body_content white" style="margin-top:0">Busca una simcard</h3>
                                <input class = "data white white_input" type="number" placeholder = "Teléfono" id = "dato_buscar_sim_libre" style="background:none;font-size:18px;text-align:center;padding:0" />
                            <div style="margin:auto">
                                <button class="button button_delete" style="margin-right:4%;width:45%" onClick="limpiar_campos_libre()">Limpiar</button>
                                <button class = "button" style="width:45%" onClick = "buscarSim_libre()">Buscar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7" style="display: inline-block;
        vertical-align: middle;
        float: none;">
                        <div class = "search_results_container" style="margin-top:0">
                            <div class ="gray_dark" style="flex-grow:2" id="nit_container">
                                <button class="center white white_input" id ="nit_resultado" onClick="$('#modal-cliente_libre').modal('show')" style="background:none;border:none;">NIT</button>
                            </div>
                            <div class ="gray_dark" style="flex-grow:2" id="nombre_empresa_container">
                                <input class="center white white_input"  disabled=true type="text" id = "nombre_empresa_resultado" placeholder="Empresa"></input>
                            </div>
                            <div class ="gray_dark" style="flex-grow:2" id="plan_container">
                                <input class="center white white_input"  disabled=true type="text" id = "plan_resultado" placeholder="Plan"></input>
                            </div>
                            <div class ="gray_dark" style="flex-grow:2" id="valor_container">
                                <input class="center white white_input"  disabled=true type="text" id = "minutos_resultado" placeholder="Min"></input>
                            </div>
                            <div class ="gray_dark" style="flex-grow:2" id="valor_container">
                                <input class="center white white_input"  disabled=true type="text" id = "valor_resultado" placeholder="Valor"></input>
                            </div>
                            <div class ="gray_dark" style="flex-grow:2" id="fecha_activacion_libre_container">
                                <p class ="white" style ="margin-top:5px;"> Activación </p>
                                <input class="center white white_input"  disabled=true type="date" id = "fecha_activacion_libre_resultado"></input>
                            </div>
                            <div class ="gray_dark" style="flex-grow:2" id="cod_scl_container">
                                <input class="center white white_input"  disabled=true type="text" id = "cod_scl_resultado" placeholder="Cod scl"></input>
                            </div>
                            <div class ="gray_dark" style="flex-grow:2" id="cod_punto_container">
                                <input class="center white white_input"  disabled=true type="text" id = "cod_punto_resultado" placeholder="Cod Punto"></input>
                            </div>
                            <div class ="gray_dark" style="flex-grow:2" id="direccion_container">
                                <input class="center white white_input"  disabled=true type="text" id = "direccion_resultado" placeholder="Dirección"></input>
                            </div style="align-self:flex-end">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- SECCION EMPAQUETADO  -->
    <section id="empaquetar">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Empaquetar Simcards</h2>
                    <h3 class="section-subheading text-muted" style="margin-bottom:20px">Digita la ICC o el numero de teléfono de la simcard y presiona Enter. Si existe, la veras abajo y estara lista para empaquetarse.</h3>
                </div>
            </div>
            <div class="principal-view-body-container">
                <div class ="package_form_container">
                    <input class="data_package" type="number" id = "datos_busqueda_sim_empaquetar" placeholder="ICC / Tel" style="width:40%;min-width:300px"></input>
                    <div class ="package_buttons_container">
                        <button class="button button_delete" onClick="limpiar_paquete()" style="height:42px;margin-right:20px">Limpiar</button>
                        <button class="button" onClick="empaquetar()" style="height:42px;">Empaquetar</button>
                    </div>
                </div>
                <div class = "search_results_container" id ="container_simcards_empaquetado">
                      
                </div>
            </div>
        </div>
    </section>
     <!-- SECCION VER ASIGNACIONES  -->
    <section id="asignaciones">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Revisa las asignaciones</h2>
                    @if($user->isAdmin)
                    <h3 class="section-subheading text-muted" style="margin-bottom:20px">Escoge el distribuidor deseado y observa el reporte de asignaciones para el periodo escogido.</h3>
                    @else
                    <h3 class="section-subheading text-muted" style="margin-bottom:20px">Escoge un rango de fechas y observa tu reporte de asignaciones.</h3>
                    @endif
                </div>
            </div>
            <div class="principal-view-body-container">
                 <div class="row text-center ">
                    <div style="display: inline-block;vertical-align: middle;float: none;width:100%">
                        <div class="flex_container" style="width:100%">
                            @if($user->isAdmin)
                                <select class="selectpicker" data-width="80%" data-style="data_package" id ="subPicker_distri" style="min-width:220px">
                                    @foreach ($distribuidores as $distribuidor)
                                        <option>{{$distribuidor->name}}</option>
                                    @endforeach
                                </select>
                                <button class="button" onClick="consultar_asignaciones_admin()" style=";width:100px;padding:0;margin-right:10px">Consultar</button>
                                <button class="button button_assign" onClick="descargar_asignaciones_admin()" style=";width:100px;padding:0;">Descargar</button>
                            @endif
                            <div class="flex_container" style="width:100%;flex-wrap:nowrap;margin-top:20px">
                                <div class="flex_container" style="flex-wrap: wrap">
                                    <label style="margin-right:20px">Fecha Inicial: </label><input type="date" class="data" id="fecha_inicial" style="width:200px;margin-right:20px"></input>
                                </div>
                                <div  style="margin-right:20px"class="flex_container" style="flex-wrap: wrap">
                                    <label style="margin-right:20px" >Fecha Final: </label><input type="date" class="data" id="fecha_final" style="width:200px;"></input>
                                </div>
                            </div>
                            @if(!$user->isAdmin)
                                <button class="button" onClick="consultar_asignaciones()" style=";width:100px;padding:0;">Consultar</button>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row text-center" style="margin-top:20px">
                    <div class="col-md-4" style="display: inline-block;vertical-align: middle;float: none;">
                        <div class = "valores_sub_container">
                            <h3 class="section-heading text-muted" style="color:black;margin-bottom:20px">ASIGNACIONES</h3>
                            <hr>
                            <label class="heading_label">PREPAGO</label><label class="heading_label">LIBRE</label>
                            <div id = "asignaciones_container">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="display: inline-block;vertical-align: middle;float: none;">
                        <div style="display: inline-block;vertical-align: middle;float:none;margin: 0 20px">
                            <div style="width:250px;height:250px">
                                <canvas id="canvasAsignaciones"></canvas>
                            </div>
                            <div class="portfolio-caption">
                                <h4 style ="text-align:center;">Distribución Asignaciones</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <iframe id="my_iframe" style="display:none;"></iframe>
    <!--------------------------------------MODALS------------------------------------------------->
    <div id="modal-content" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 id ="modal-tittle"></h3>
                </div>
                <div class="modal-body">
                    <p id ="modal-body"></p>
                </div>
            </div>
        </div>
    </div>
    
    <div id="modal-distribuidor" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 class = "section-body section-body-title"> Seleccionar Distribuidor</h3>
                </div>
                <div class="modal-body">
                    <div class="container" style="width:100%" id ="modal-body-distribuidores">
                    @foreach($distribuidores as $distribuidor)
                        <button class="button-simcards button-default" style="flex-grow:2; margin-top:10px" onClick="seleccionar_distribuidor(this)" value ="{{$distribuidor->name}}">{{$distribuidor->name}}</button>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-subdistribuidor" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 class = "section-body section-body-title"> Seleccionar subdistribuidor</h3>
                </div>
                <div class="modal-body">
                    <div class="container" style="width:100%" id ="modal-body-subdistribuidores">
                    @if($user->isAdmin)
                        @foreach($subdistribuidores[$user->name] as $subdistribuidor)
                            <button class="button-simcards button-default" style="flex-grow:2; margin-top:10px" onClick="seleccionar_sub(this)" value ="{{$subdistribuidor->nombre}}">{{$subdistribuidor->nombre}}</button>
                        @endforeach
                    @else
                        @foreach($subdistribuidores as $subdistribuidor)
                            <button class="button-simcards button-default" style="flex-grow:2; margin-top:10px" onClick="seleccionar_sub(this)" value ="{{$subdistribuidor->nombre}}">{{$subdistribuidor->nombre}}</button>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
    <!-- MODAL SELECCIONAR SUBDISTRIBUIDOR PARA ASIGNAR UNIDAD-->
    <div id="modal_seleccionar_subdistri_unidad" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 class = "section-body section-body-title"> Seleccionar subdistribuidor </h3>
                </div>
                <div class="modal-body" style="text-align:center;">
                    <select class="selectpicker" data-width="100%" data-style="data" id ="subPicker_unidad">
                        @foreach ($distribuidores as $distribuidor)
                        <optgroup label="{{$distribuidor->name}}">
                            @foreach ($subdistribuidores[$distribuidor->name] as $subdistribuidor)
                            <option>{{$subdistribuidor->nombre}}</option>
                            @endforeach
                        </optgroup>
                        @endforeach
                    </select>
                    <button class="button" onClick="asignar_sim_unidad()" style="height:42px;width:100px;margin:0 auto">Asignar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MODAL SELECCIONAR SUBDISTRIBUIDOR PARA ASIGNAR-->
    <div id="modal_seleccionar_subdistri" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 class = "section-body section-body-title"> Seleccionar subdistribuidor </h3>
                </div>
                <div class="modal-body" style="text-align:center;">
                    <select class="selectpicker" data-width="100%" data-style="data" id ="subPicker">
                        @foreach ($distribuidores as $distribuidor)
                        <optgroup label="{{$distribuidor->name}}">
                            @foreach ($subdistribuidores[$distribuidor->name] as $subdistribuidor)
                            <option>{{$subdistribuidor->nombre}}</option>
                            @endforeach
                        </optgroup>
                        @endforeach
                    </select>
                    <button class="button" onClick="asignar_paquete()" style="height:42px;width:100px;margin:0 auto">Asignar</button>
                </div>
            </div>
        </div>
    </div>    
    <!-- MODAL RESPONSABLE LIBRES  -->
    <div id="modal-cliente_libre" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 class = "section-body section-body-title"> Datos Responsable </h3>
                </div>
                <div class="modal-body">
                    <div class="search_results_container" style="margin:0">
                        <div class ="gray" style="flex-grow:2">
                            <input class="center white white_input" style="width:100%" type="text" id = "nombre_responsable_resultado" placeholder="Responsable"></input>
                        </div>
                        <div class ="gray" style="flex-grow:2">
                            <input class="center white white_input" style="width:100%" type="text" id = "cedula_responsable_resultado" placeholder="Cedula"></input>
                        </div>
                        <div class ="gray" style="flex-grow:2">
                            <input class="center white white_input" style="width:100%"  type="text" id = "celular_responsable_resultado" placeholder="Celular"></input>
                        </div>
                        <div class ="gray" style="flex-grow:2">
                            <input class="center white white_input" style="width:100%"  type="text" id = "ciudad_responsable_resultado" placeholder="Ciudad"></input>
                        </div>
                        <div class ="gray" style="flex-grow:2">
                            <input class="center white white_input" style="width:100%"  type="text" id = "barrio_responsable_resultado" placeholder="Barrio"></input>
                        </div style="align-self:flex-end">
                        <div class ="gray" style="flex-grow:2">
                            <p class ="white"  style ="margin-top:5px;text-align:center"> Entregada </p>
                            <input class="center white white_input" style="width:100%"  type="date" id = "fecha_entrega_libre_resultado" placeholder="Barrio"></input>
                        </div>
                        <div class ="gray" style="flex-grow:2">
                            <input class="center white white_input" style="width:100%"  type="text" id = "direccion_responsable_resultado" placeholder="Dirección"></input>
                        </div style="align-self:flex-end">
                        <div class ="gray" style="flex-grow:2">
                            <p class ="white"  style ="margin-top:5px;text-align:center"> LLamado </p>
                            <input class="center white white_input" style="width:100%"  type="date" id = "fecha_llamada_libre_resultado" placeholder="Barrio"></input>
                        </div style="align-self:flex-end">
                        <div class ="gray" style="flex-grow:2;width:100%;height:70px">
                            <textarea class="center white white_input" style="width:100%;height:90%;background-color:transparent;" id = "detalle_llamada_resultado" placeholder="Detalle llamada"></textarea>
                        </div style="align-self:flex-end">
                        <div style="margin:auto;">
                        <button class="button"  onClick="guardar_responsable()" style="height:42px;flex-grow=2;">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MODAL UPLOAD RESULT -->
    @if(null !== Session::get('result'))
    <div id="modal_upload_result" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id ="modal-tittle">Resultado Operacion</h3>
                </div>
                <div class="modal-body">
                    <label id = "modal_upload_result_label">{{Session::get('result')}} filas añadidas </label>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- MODAL LOADING -->
    <div id="modal-loading" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-body">
            <a class="btn btn-danger loading" style = "width:100%;">Cargando información</a>
        </div>
    </div>
    
    <!-- CARGAR ARCHIVO -->
    <div id="modal_upload" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3 id ="modal-tittle">Subir archivo Simcards</h3>
                </div>
                <div class="modal-body">
                    <p>Al presionar SUBIR se debe esperar que se recarge la página.</p>
                    {!! Form::open(
                    array(
                        'route' => 'subirArchivoSimcards', 
                        'class' => 'form', 
                        'novalidate' => 'novalidate', 
                        'files' => true,
                        'style' => 'text-align:center')) !!}
                    <input name="_token" hidden value="{!! csrf_token() !!}" />
                    <div class="form-group">
                        {!! Form::file('image', null) !!}
                    </div>
                    <div class="form-group">
                        {!!Form::select('accion', array('ADD' => 'Agregar', 'UPLOAD' => 'Activar'),null, array('class' => 'data_package'))!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Subir', array('class' => 'button')) !!}
                    </div>
                    {!! Form::close() !!}        
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Charts Script -->
    <script src="js/Chart.js"></script>
    <script src="js/simcard.charts.js"></script>
    
    <!-- Page Script  -->
    <script src="js/simcard.js"></script>
    
    <!-- Plugin JavaScript -->
    <script src="/js/jquery.easing.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

    <!-- Bootstrap Select JS -->
    <script src ="/js/utilities/bootstrap-select.js" ></script>
    
    <div id="footerwrap">
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<logo class="logo">Belltronic</logo>
      			<p>Desarrollado por <span class="mySpan">Stiven Avila</span> - stiven140@hotmail.com</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
</body>

</html>
