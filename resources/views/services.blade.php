<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
<body>
@include('layout.header')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="nameService">Nombre del Servicio</label>
                    <select id="nameService" class="form-control">
                        <option selected>Elige un servicio</option>
                        <option value="VISA">VISA</option>
                        <option value="ABL">ABL</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="moneyService">Importe</label>
                    <input type="number" class="form-control" id="moneyService">
                </div>

                <div class="form-group text-right">
                    <button type="button" class="btn btn-primary" id="payService">Pagar Servicio</button>
                </div>
            </form>
        </div>
    </div>
</div>

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#payService").click( function(){
                var data = {
                    money: $("#moneyService").val(),
                    service: $("#nameService").val()
                }
                $.post('services/pay', data, function(response){
                    alert(Object.values(data));
                });
            });
        }); 
    </script>
    
    </body>
    </html>