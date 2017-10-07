<html>
<head>
    <style>
        div#body  /*Define una identificador "body" asociado a un elemento <div>. Es la posición del cuerpo de la página (barra lateral más contenido) */
        {
            margin:auto auto auto auto;  /* top right bottom left: equivale a poner un sólo auto */
            width:710px; /* El ancho del estilo lo coloca en 710px */
        }
        div#header /*Define una identificador "header" asociado a un elemento <div>. Es la posición de la cabecera */
        {
            margin:10px auto 10px auto;
            width:710px;
            border:solid 3px maroon;
            border-radius: 15px; /*borde redondeado de radio 15px */
        }
        div#sidebar
        {
            display:none;
            border:solid 1px #CFC;
            padding-left:15px; /*Se modifica el ancho*/
        }
        body.sidebar-main div#footer  /*Define una identificador "footer" asociado a un elemento <div>. Es la posición del pie de página */
        {
            margin:25px auto 25px auto;
            width:710px;
            border:solid 3px maroon;
            border-radius: 15px; /*borde redondeado de radio 15px */
            clear:right;/* Deja sin utilidad la opción de float:right */
        }

        body.main-sidebar div#footer /*Define una identificador "footer" asociado a un elemento <div>. Es la posición del pie de página */
        {
            margin:15px auto 15px auto;

            width:710px;
            border:solid 3px maroon;
            border-radius: 15px; /*borde redondeado de radio 15px */
            clear:left;/* Deja sin utilidad la opción de float:left*/
        }
        body.main-sidebar div#main, body.sidebar-main div#main
        {
            width:490px;
            border:solid 4px green;
        }
        body.main-sidebar div#body, body.sidebar-main div#body
        {
            margin:auto auto auto auto;
            width:710px;
            border:solid 4px #FFF;
        }
        body.main-sidebar div#sidebar, body.sidebar-main div#sidebar
        {
            display:block;
            width:200px;
            border:solid 1px #CCC;
        }
        body.main-sidebar div#main, body.main-sidebar div#sidebar  /*Main-sidebar. Este estilo coloca el sidebar a la derecha y el main a la izquierda */
        {
            float:left;
            border:dotted 1px lightgreen;
        }
        body.sidebar-main div#main, body.sidebar-main div#sidebar /*Sidebar-main. Este estilo coloca el sidebar a la izquierda y el main a la derecha*/
        {
            float:right;
            border:dotted 1px lightgreen;
        }
        #header #imaxe{ float: left; border:dotted 1px lightgreen;}
        #texto{
            width: 85%;
            height: 8.5%;
            border:dotted 1px lightblue;
            margin-bottom: 2em;
        }
        #sidebar ul li{
            list-style-type: none;
        }
        #sidebar a{
            background-color: maroon;
            color: black;
        }
        #sidebar a:active{}
        #sidebar a:hover{
            background-color: red;
            color: black;
        }
        #sidebar a:visited{
            color: black;
        }
    </style>
</head>

<body class="sidebar-main">
    <div id="header">
        <div id="imaxe"><img src="logo.jpg"></div>
        <div id="texto"><h1>El muslito</h1></div>
    </div>
    <div id="body">
        <div id="main">
            <img src="portada.png">
            <p>Este restaurante es una de las referencias gastronómicas del esta zona. [...]</p>
        </div>
        <div id="sidebar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Onde estamos?</a></li>
                <li><a href="#">A nosa carta</a></li>
                <li><a href="#">Horarios</a></li>
            </ul>
        </div>
    </div>
    <div id="footer">Pie de página</div>
</body>
</html>