@extends('master')
@section('content')
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
<<<<<<< HEAD
                <td>$ {{$total*.16}}</td>
=======
                <td>$ {{ $total*.16}}</td>
>>>>>>> f749806 (3.0ValidatedData)
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
<<<<<<< HEAD
=======
                  @error('address')
                      <small style="color: red">* {{$message}}</small>
                  @enderror
>>>>>>> f749806 (3.0ValidatedData)
                </div>
                <div class="form-group">
                  <label for="pwd"><strong>Método de pago:</strong></label><br>
                  <input type="radio" value="Pago Online" name="payment"><span> Pago Online</span><br>
                  <input type="radio" value="Solo dar las gracias" name="payment"><span> Solo dar las gracias</span><br>
<<<<<<< HEAD
                  <input type="radio" value="Pago a contraentrega" name="payment"><span> Pago a contraentrega</span><br><br>
                </div>
=======
                  <input type="radio" value="Pago a contraentrega" name="payment"><span> Pago a contraentrega</span><br>
                  @error('payment')
                  <small style="color: red">* {{$message}}</small><br>
              @enderror
                </div>
                <br>
>>>>>>> f749806 (3.0ValidatedData)
                <button type="submit" class="btn btn-primary">Finalizar compra</button>
              </form>
          </div>
        </div>
    </div>
@endsection
