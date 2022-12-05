@extends('layouts.master')

@section('content')

<div class="container">
<h1>Danh sách Chuyến Xe</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col"> Thời Gian Khởi Hành</th>
                <th scope="col"> Thời Gian Kết Thúc</th>
                <th scope="col"> Status</th>

        </thead>
        <tbody>

            @foreach($news as $key => $news)
            <tr>
                <th scope="row">{{$key}}</th>
                <td>{{$news->name}}</td>
                <td>{{$news->timestart}}</td>
                <td>{{$news->timeend}}</td>
                <td><a href="{{route('edit',['id' => $news-> id])}}"> 
                    <button class="btn btn-danger btn-sm">Edit</button>
                    <span><a href="{{ route('delete', ['id' => $news->id]) }}">
                        <button class="btn btn-danger btn-sm">Xóa</button>
                    </a></span>
                </a></td>
                <td> </td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection