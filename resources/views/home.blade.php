@extends('index')

@section('content')
    <div class="jumbotron" id="grad">
        <div class="container" >
            <h1 class="display-5">Bienvenido a EmiBank, que querés hacer hoy?</h1> En este sitio poder operar con tu cuenta mirando el balance, haciendo transferencias, pagando servicios y armando inversiones!
        </div>
    </div>
    <div class="container">
        <div class="card-deck mb-3 text-center" >
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                <img class="img_home" src="images/balance.jpg">
                    <h3 class="card-title pricing-card-title" >Balance </h3>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Mira como vienen sus cuentas Ingresos y Egresos</li>
                    </ul>

                    <a href="{{ url('pages/balance')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Ver Situación Económica</a>

                  </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                <img class=img_home src="images\pago_servicios.jpg">
                    <h3 class="card-title pricing-card-title">Pago de Servicios</h3>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Paga todo lo que necesites desde la comodidad de tu casa</li>
                    </ul>
                    <a  href="{{ url('pages/pago_servicios')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Pagar Servicios</a>

                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                <img class=img_home src="images/inversiones.jpg">
                    <h3 class="card-title pricing-card-title">Inversiones</h3>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Dumplica tus ahorros en el mercado financiero</li>
                    </ul>
                    <a href="{{ url('pages/inversiones')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Invertí</a>

                </div>
            </div>
        </div>
    </div>



@endsection

