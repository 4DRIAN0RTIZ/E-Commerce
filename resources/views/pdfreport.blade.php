<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace !important;
            letter-spacing: -0.3px;
        }

        .invoice-wrapper {
            width: 700px;
            margin: auto;
        }

        .logo {
            font-size: 50px;
        }

        .sidebar-collapse .brand-link .brand-image {
            margin-top: -33px;
        }

        .content-wrapper {
            margin: auto !important;
        }

        .billing-company-image {
            width: 50px;
        }

        .billing_name {
            text-transform: uppercase;
        }

        .billing_address {
            text-transform: capitalize;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 10px;
        }

        td {
            padding: 10px;
            vertical-align: top;
        }

        .row {
            display: block;
            clear: both;
        }

        .text-right {
            text-align: right;
        }

        address {
            font-style: normal;
        }
    </style>
</head>

<body>
    <div class="row invoice-wrapper">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <td>
                                <img src="https://i.ibb.co/PGHR0tp/logo.png" width="50px" height="50px">
                            <td>
                            <td class="text-right">
                                <p><strong>Emisión: </strong> {{ $date }}</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <br><br>
            <div class="row invoice-info">
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <td>
                                <div class="">
                                    <address>
                                        <strong>La Consentida</strong><br>
                                        <strong>Cliente: {{ $userName }}</strong><br>
                                        <strong>Correo: {{ $userMail }}</strong>
                                    </address>
                                </div>
                            </td>
                            <td>
                            </td>
                            <td>
                                {{--  <div class="text-right">

@foreach ($orders as $num)

<b>Orden N {{ $num->id }}</b><br>
@endforeach


                                </div> --}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Producto</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>

                                    <td>{{ $item->order_id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="text-right">${{ $item->price }}</td>
                                </tr>
                                <tr>
                            @endforeach
                            <td colspan="3" class="text-right">Sub Total</td>
                            <td class="text-right"><strong>$ {{ $total }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right">IVA (16%)</td>
                                <td class="text-right"><strong>${{ $total * 0.16 }}</strong></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right">Total a pagar</td>
                                <td class="text-right"><strong>${{ $total * 0.16 + $total }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- /.col -->
            </div>
            <br><br><br>
            <div>
                <div><img
                        src="data:image/png;base64,{{ base64_encode(QrCode::size(100)->generate('This its a test')) }}"</div>
                    <small><small>NOTA: Para este comprobante no se necesita firma.</small></small>
                </div>
            </div>
        </div>
</body>

</html>
{{-- <div class="col-sm-10">
                <div class="trending-wrapper">
                    @foreach ($orders as $item)
                        <div class="row searched-item cart-list-divisor">
                            <div class="col-sm-2">

                                <h6>Nombre del artículo: {{ $item->name }}</h6>
                                <h6>Precio: {{ $item->price }}</h6>
                                <h6>Método de pago: {{ $item->payment_method }}</h6>
                                <h6>Estatus del pago: {{ $item->payment_status }}</h6>
                                <h6>Envío a: {{ $item->address }}</h6>
                                <h6>Estatus de la entrega: {{ $item->status }}</h6>

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div> --}}
