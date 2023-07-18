<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <link href="{{ asset('js/bootstrap.min.css') }}" rel="stylesheet" >
    <title>Registro UAEMex</title>


</head>
<body class="container" >



<!-- HEADER DESKTOP-->

    <header class="header-desktop" >
        <div>
            <p>Iniciar secion</p>
        </div>              
    </header>
            
            <!-- HEADER DESKTOP-->
    
<div>
    <h5>Apariencia de la pagina para construir el layout</h5>
</div>


<div>
    <h3>ejemplo de contenido dentro de la pagina </h3>
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>date</th>
                <th>type</th>
                <th>description</th>
                <th>status</th>
                <th>price</th>

                <!-- botones -->
                <th>    </th>
                <th>    </th>
                <th>    </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2018-09-29 05:57</td>
                <td>Mobile</td>
                <td>iPhone X 64Gb Grey</td>
                <td class="process">Processed</td>
                <td>$999.00</td>

                <!-- botones -->
                <th>
                <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
                <i class="zmdi zmdi-edit" style="color: #49C85D;"></i>
                </button>
                </th>

                <th>
                <button class="item" data-toggle="tooltip" data-placement="top" title="Borrar">
                <i class="zmdi zmdi-delete" style="color: #f00;"></i>
                </button>
                </th>

                <th>
                <button class="item" data-toggle="tooltip" data-placement="top" title="Detalle">
                <i class="zmdi zmdi-eye" style="color: #00f;"></i>
                </button>
                </th>

            </tr>
        </tbody>
    </table>

</div>





    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
    <script src="{{asset('js/jquery-3.3.1.js') }} "> </script>
</body>
</html>