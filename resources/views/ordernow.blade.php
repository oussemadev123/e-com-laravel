@extends('master')
@section('content')
<div class="custom-product">
  <div class="col-sm-10">
    <table class="table">
        <tbody>
          <tr>
            <th scope="row">Amount</th>
            <td>$ {{ $total }}</td>

          </tr>
          <tr>
            <th scope="row">Tax</th>
            <td>$ 0</td>
          </tr>
          <tr>
            <th scope="row">Delivery</th>
            <td>$ 10</td>
          </tr>
          <tr>
            <th scope="row">Total Amount</th>
            <td>$ {{ $total+10 }}</td>
          </tr>

        </tbody>
      </table>
      <hr>
      <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
              <textarea name="adress" class="form-control" placeholder="Enter Your adress"></textarea>
            </div>
            <div class="form-group">
              <label for="">Payment Method</label><br><br>
              <input type="radio" value="cash" name="payment"> <span>online payment</span><br><br>
              <input type="radio" value="cash" name="payment"> <span>EMI payment</span><br><br>
              <input type="radio" value="cash" name="payment"> <span>payment on delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
  </div>
</div>
@endsection
