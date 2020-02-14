<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body class="d-flex flex-column h-100">
@include('layout.header')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-5">Balance Financiero</h1> Aca podes controlar los movimientos de tu cuenta
        </div>
    </div>
    <div class="col-md-8 offset-md-2">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Ingreso</th>
                    <th scope="col">Egreso</th>
                    <th scope="col">Saldo</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($balance as $item)
	<tr>
		<th scope="row">{{ date('d-m-Y',strtotime($item->created_add))}}</th>
	    <td>{{$item->descripcion}}</td>
        <td>{{$item->ingreso}}</td>
	    <td>{{$item->egreso}}</td>
	    <td>{{$item->saldo}}</td>

	</tr>
@endforeach
            </tbody>

        </table>
        <!-- <table border="1">
	<tr>
		<th>id</th>
		<th>tipo</th>
	</tr>

</table> -->
    </div>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
