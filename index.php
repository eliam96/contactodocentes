<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <title>CONTACTO DOCENTES</title>

</head>
<!--PROYECTO REALIZADO POR:-->
<!--Lillian Maria Machuca Chavarria-->
<!--Edgar Eliam Santos-->
<!--PROGRAMACION ORIENTADA A OBJETOS-->
<!--Lic. Eduardo Vallejo-->



<style>
.header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
</style>

<!--formulario de busqueda de docentes-->
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="busqueda.php" class="form-horizontal" method="POST">
                    <fieldset>
                        <legend class="text-center header">Formulario B&uacute;squeda docentes</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="buscar" name="buscar" type="text" placeholder="Buscar docente por nombre o registro" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit"  name="b_busqueda"class="btn btn-primary btn-lg">Buscar</button>
                                <a href="ingreso.html"><button type="button" name="ingre" class="btn btn-primary btn-lg" >Formulario Ingreso</button></a>
                                <a href="eliminar.html"><button type="button" name="eli" class="btn btn-primary btn-lg" >Eliminar Docente</button></a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div
</form>
<br>  

 
</body>
</html>