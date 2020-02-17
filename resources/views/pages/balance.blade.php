@extends('index')


@section('content')
    <div class="jumbotron" id="grad">
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
                </tr>
            </thead>
            <tbody>

                @foreach ($balance as $item)
	<tr>
		<th scope="row">{{ date('d-m-Y',strtotime($item->created_add))}}</th>
	    <td>{{$item->descripcion}}</td>
        <td>{{$item->ingreso}}</td>
	    <td>{{$item->egreso}}</td>

	</tr>
@endforeach
            </tbody>

        </table>
    
    </div>

@endsection