@extends('index') @section('content')
<div class="jumbotron" id="grad">
    <div class="container">
        <h1 class="display-5">Pago de Servicios</h1> Paga todo lo que necesites desde la comodidad de tu casa.
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{ route('sevicios.pago')}}" method="post">
                @method('POST') @csrf
                <div class="form-group">
                    <label for="opciones">Elegir un servicio</label>
                    <select multiples class="form-control" id="opciones" name="opciones">
                        @foreach ($servicios as $item)
                        <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Importe</label>
                    <input type="name" class="form-control" id="inputName" name="importe" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Pagar Servicio
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

    @endsection