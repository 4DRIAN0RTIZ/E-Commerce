@extends('master')
@section('content')
  @php
    require base_path('vendor/autoload.php');
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));
    $preference = new MercadoPago\Preference();
    $item = new MercadoPago\Item();
    $item->title = 'Mi producto';
    $item->quantity = 1;
    $item->unit_price = ($total*.16)+($total+500);
    $preference->items = array($item);
    $preference->save();
  @endphp
      {{-- // SDK MercadoPago.js V2 --}}
    <script src="https://sdk.mercadopago.com/js/v2"></script>
 
    <div class="container custom-product">
        <div class="col-sm-10">
            <table class="table">
            <tbody>
              <tr>
                <th scope="row">Monto</th>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <th scope="row">Envío</th>
                <td>$ 500</td>
              </tr>
              <tr>
                <th scope="row">Iva</th>
                <td>$ {{ $total*.16}}</td>
              </tr>
              <tr>
                <th scope="row">Total</th>
                <td>$ {{($total*.16)+($total+500)}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="resize:none;" placeholder="Ingresa tu dirección"></textarea>
                  @error('address')
                      <small style="color: red">* {{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="pwd"><strong>Método de pago:</strong></label><br>
                  <input type="radio" value="Pago Online" name="payment"><span> Pago Online</span><br>
                  <input type="radio" value="Solo dar las gracias" name="payment"><span> Solo dar las gracias</span><br>
                  <input type="radio" value="Pago a contraentrega" name="payment"><span> Pago a contraentrega</span><br>
                  @error('payment')
                  <small style="color: red">* {{$message}}</small><br>
              @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Finalizar compra</button>
              </form>
              
                <div class="cho-container"></div>
                <script>
                    const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
                      locale: 'es-MX'
                        });

                  mp.checkout({
                  preference: {
                    id: '{{ $preference->id }}'
                  },
                  render: {
                  container: '.cho-container',
                  label: 'Pagar',
                  }
                  });
                </script>

          </div>
        </div>
    </div>
@endsection
