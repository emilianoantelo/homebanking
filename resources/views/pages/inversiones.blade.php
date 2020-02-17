@extends('index')


@section('content')
    <div class="jumbotron" >
        <div class="container" id="grad_inv">
            <h1 class="display-5">Inversiones</h1> Duplica tus ahorros en el mercado financiero.
        </div>
    </div>
    <div class="container">
    <h1>{{$salario ?? ''}}</h1>
    <div class="row">
        @foreach ($inversiones as $item)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card  border-success mb-3">
                <h5 class="card-header text-center text-muted">
                    Acciones
                </h5>
                <div class="card-body text-center">
                    <h5 class="card-title">{{$item->empresa}}</h5>
                    <p class="card-text">Valor unitario ${{ $item->valor_de_accion }}</p>
                    <p class="card-text">Cantidad de acciones compradas {{ $item->acciones }}</p>
                    <p class="card-text">Por un total de ${{ $item->total }}</p>
                    <a href="{{ route('inversiones.vender', ['id' => $item->id]) }}"
                        class="btn btn-block btn-info text-white">Vender</a>
                    <a href="{{ route('inversiones.comprar', ['id' => $item->id]) }}"
                        class="btn btn-block btn-success">Comprar</a>
                </div>
                <div class="card-footer text-center text-muted">
                    <h6 class="card-subtitle mb-2 text-muted">{{ date('d-m-Y', strtotime($item->created_at)) }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection