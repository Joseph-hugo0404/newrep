@extends('layouts.app')
@section('content')

<div class="d-flex flex-row">

    <div class="container col-sm m-1 p-2">
        <img class="img-fluid" src="{{asset('res/img1.png')}}" alt="">
        <div class="container card-text">
            <strong>Brand</strong>: ASUS
        </div>
        <div class="container">
            <strong>Description</strong>: 16GB ram 500GB ssd
        </div>
        <div class="container">
            <strong>Price</strong>: $240.12
        </div>
        <div class="container">
            <strong>Datemanufactured</strong>: 09-20-21
        </div>
    </div>
    <form class="p-5" action="/congrats" method="get">
        @csrf

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Credit card number</label>
            <input type="text" class="form-control" id="card_number" placeholder="card number">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Pin number</label>
            <input type="password" class="form-control" id="pin" placeholder="pin">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>
                  <option value="manila">Manila</option>
                  <option value="manila">Cebu</option>
                  <option value="manila">Bohol</option>
                  <option value="manila">Davao</option>
              </option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Buy now</button>
      </form>

</div>


@endsection




