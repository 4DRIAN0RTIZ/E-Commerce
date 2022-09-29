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
                <td>500</td>
              </tr>
              <tr>
                <th scope="row">Iva</th>
                <td>16%</td>
              </tr>
              <tr>
                <th scope="row">Total</th>
                <td>$ {{($total+500)*.16+$total}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form>
                <div class="form-group">
                  <textarea type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="resize:none;" placeholder="Ingresa tu dirección"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd"><strong>Método de pago:</strong></label><br>
                  <input type="radio" name="payment"><span> Pago Online</span><br>
                  <input type="radio" name="payment"><span> Solo dar las gracias</span><br>
                  <input type="radio" name="payment"><span> Pago a contraentrega</span><br><br>
                </div>
                <button type="submit" class="btn btn-primary">Finalizar compra</button>
              </form>
          </div>
        </div>
    </div>
@endsection
