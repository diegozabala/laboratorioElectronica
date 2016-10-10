
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

    $(function(){
    $('.panel').hover(function(){
            $(this).find('.panel-footer').slideDown(250);
        },function(){
            $(this).find('.panel-footer').slideUp(250);
        });
    })
</script>

<body class="admin-body-inicio">

  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/estilos.css')}}">

    <div class="container">
        <div class="row">

            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="panel panel-default">

                    <div class="panel-body">                    
                        <h3>Tocame</h3>
                        <p>Programa De Ingenieria Electronica </p>
                        <p>SNIES 4240</p>
                        <p>Res MEN 18-5-2012 (7 Años) </p>
                        <p>Email: ingelect@uniquindio.edu.co</p>
                    </div>
                    <div class="panel-footer"><a href="#"><span class="badge">Tel:7359300 Ext.359</span></a></div>
                </div>
            </div>

            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h3>Sobre Nosotros</h3>
                        <p>Diego Alberto Zabala Betancur</p>
                        <p>Juan Manuel Alvarez</p>
                        <p>Estudiantes de Ingeniería de Sistemas y Computación</p>
                    </div>
                    <div class="panel-footer"><a href="#"><span class="badge">Universidad Del Quindío</span></a></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>