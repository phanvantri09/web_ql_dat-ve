@extends('layouts.master')
@section('content')



<div class="container">
  <h1>Thêm Chuyến Xe</h1>
  @if(session()->has('success'))

<div class="alert alert-success">
    {{ session()->get('success') }}
    @endif
  <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf @method('POST')
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Name</label>
        <input type="text" class="form-control" name="name" id="inputEmail4" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Text</label>
        <input type="text" name="text" class="form-control" id="inputPassword4" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputState">Address Start</label>
        <select id="inputState" name="addressstart" class="form-control" required>

          <option value="1">Quảng Nam</option>
          <option value="2">Quảng Ngãi</option>
          <option value="3">Quảng Ninh</option>
          <option value="4">Đà Nẵng</option>
          <option value="5">Quảng Bình</option>
          <option value="6">Quảng Trị</option>


        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="inputState">Address End</label>
        <select id="inputState" name="addressend" class="form-control" required>

          <option value="1"> Thành Phố HCM</option>
          <option value="2"> Thành Phố HN</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Time Start</label>
        <input type="datetime-local" class="form-control" name="timestart" id="inputEmail4" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Time End</label>
        <input type="datetime-local" name="timeend" class="form-control" id="inputPassword4"required >
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Price</label>
        <input type="text" class="form-control" name="price" id="inputEmail4" required>
      </div>

    </div>

    <button type="submit" class="btn btn-primary"> Submit</button>
  </form>

</div>

@endsection
