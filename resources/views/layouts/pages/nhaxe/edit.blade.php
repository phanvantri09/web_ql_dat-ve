@extends('layouts.master')
@section('content')


<div class="container">
    <h1>Sửa Chuyến Xe</h1>
    @if(session()->has('massage'))

    <div class="alert alert-success">
        {{ session()->get('massage') }}
        @endif
        <form action="{{route('update', $news->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$news->name}}" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Text</label>
                    <input type="text" name="text" class="form-control" value="{{$news->text}}" id="inputPassword4">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">Address Start</label>
                    <select id="inputState" name="addressstart" class="form-control">
                        @if ($news->addressstart == 1)
                        <option selected value="1"> Quảng Nam</option>

                        <option value="2">Quảng Ngãi</option>
                        <option value="3">Quảng Ninh</option>
                        <option value="4">Đà Nẵng</option>
                        <option value="5">Quảng Bình</option>
                        <option value="6">Quảng Trị</option>
                        @endif
                        @if ($news->addressstart == 2)
                        <option value="1"> Quảng Nam</option>
                        <option selected value="2"> Quảng Ngãi</option>

                        <option value="3">Quảng Ninh</option>
                        <option value="4">Đà Nẵng</option>
                        <option value="5">Quảng Bình</option>
                        <option value="6">Quảng Trị</option>
                        @endif
                        @if ($news->addressstart == 3)
                        <option value="1"> Quảng Nam</option>
                        <option value="2"> Quảng Ngãi</option>

                        <option selected value="3">Quảng Ninh</option>
                        <option value="4">Đà Nẵng</option>
                        <option value="5">Quảng Bình</option>
                        <option value="6">Quảng Trị</option>

                        @endif
                        @if ($news->addressstart == 4)
                        <option value="1"> Quảng Nam</option>
                        <option value="2"> Quảng Ngãi</option>

                        <option value="3">Quảng Ninh</option>
                        <option selected value="4">Đà Nẵng</option>
                        <option value="5">Quảng Bình</option>
                        <option value="6">Quảng Trị</option>

                        @endif @if ($news->addressstart == 5)
                        <option value="1"> Quảng Nam</option>
                        <option value="2"> Quảng Ngãi</option>

                        <option value="3">Quảng Ninh</option>
                        <option value="4">Đà Nẵng</option>
                        <option selected value="5">Quảng Bình</option>
                        <option value="6">Quảng Trị</option>

                        @endif
                        @if ($news->addressstart == 6)
                        <option value="1"> Quảng Nam</option>
                        <option value="2"> Quảng Ngãi</option>

                        <option value="3">Quảng Ninh</option>
                        <option value="4">Đà Nẵng</option>
                        <option value="5">Quảng Bình</option>
                        <option selected value="6">Quảng Trị</option>
                        @endif



                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Address End</label>
                    <select id="inputState" name="addressend" class="form-control">
                        @if ($news->addressstart == 1)
                        <option selected value="1"> Thành Phố HCM</option>
                        <option value="2"> Thành Phố HN</option>
                        @endif
                        @if ($news->addressstart == 2)
                        <option  value="1"> Thành Phố HCM</option>
                        <option selected value="2"> Thành Phố HN</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Time Start</label>
                    <input type="time" class="form-control" name="timestart" value="{{$news->timestart}}" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Time End</label>
                    <input type="time" name="timeend" class="form-control" value="{{$news->timeend}}" id="inputPassword4">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Price</label>
                    <input type="text" class="form-control" name="price" value="{{$news->price}}" id="inputEmail4">
                </div>

            </div>

            <button type="submit" class="btn btn-primary"> Submit</button>
        </form>

    </div>

    @endsection