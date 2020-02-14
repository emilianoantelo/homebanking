<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse">
                <a class="navbar-brand" href="home.html">Home Banking</a>
                <ul class="navbar-nav mr-auto">
                    <!--       class active resalta la opción seleccionada -->
                    <li class="nav-item ">
                        <a class="nav-link" href="home.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="balance.html">Balance</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="pago-servicios.html">Pago de Servicios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="inversiones.html">Inversiones</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-5">Pago de Servicios</h1> Paga todo lo que necesites desde la comodidad de tu casa.
        </div>
    </div>
    <div class="col-md-8 offset-md-2">
        <form>
            <div class="form-group ">
                <label for="exampleInputEmail1">Nombre de Servicio</label>
                <input type="name" class="form-control" id="inputName" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Numero de Referencia</label>
                <input type="password" class="form-control" id="inputReference">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Importe</label>
                <input type="number" class="form-control" id="inputImport">
            </div>
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Pagar Servicio
                </button>
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Pagar Servicio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ¿Esta seguro que quiere realizar la operacion?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" onclick='enviarInformacion()'>Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script>
   let nombreDeServicio= $('#inputName').val()
   let importeDeServicio= $('#inputImport').val()
   let numeroDeReferencia=$('#inputReference').val()
   let data={
       nombreDeServicio,
       importeDeServicio,
       numeroDeReferencia
   }
   function enviarInformacion (){
    $.post('/pagoDeServicios', data)

   }
   </script>


</body>

</html>
