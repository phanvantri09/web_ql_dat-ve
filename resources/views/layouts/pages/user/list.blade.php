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
                <th scope="col"> Số tiền</th>
                <th scope="col"> Vị trí</th>
                <th scope="col"> trạng thái</th>
                <th scope="col"> Hủy vé</th>

        </thead>
        <tbody>
            @if (!empty($booksactive))
            @foreach($booksactive as $key => $booknew)
            <tr>
                <th scope="row">{{$key}}</th>
                <td>{{Auth::user()->name}}</td>
                @foreach ($news as $new)
                    @if ($new->id == $booknew->id_news)
                        <td>{{$new->timestart}}</td>
                        <td>{{$new->timeend}}</td>
                        <td>{{$new->price}} VNĐ</td>
                    @endif
                @endforeach
                <td>Số: <b>{{$booknew->location}}</b></td>
                <td><button class="btn btn-primary  btn-sm">Chưa Duyệt</button></td>
                <td>
                    {{-- <button class="btn btn-danger btn-sm">Edit</button> --}}

                {{-- <a href="{{ route('deleteticket', ['id' => $booknew->id]) }}">
                    <button class="btn btn-danger btn-sm">Đã duyệt</button>
                </a> --}}
            </td>
            </tr>
            @endforeach
            @endif
            @if (!empty($booksactive))
            @foreach($newbooks as $key => $booknew)
            <tr>
                <th scope="row">{{$key}}</th>
                <td>{{Auth::user()->name}}</td>
                @foreach ($news as $new)
                    @if ($new->id == $booknew->id_news)
                        <td>{{$new->timestart}}</td>
                        <td>{{$new->timeend}}</td>
                        <td>{{$new->price}} VNĐ</td>
                    @endif
                @endforeach
                <td>Số: <b>{{$booknew->location}}</b></td>
                <td><button class="btn btn-success btn-sm">Đã duyệt</button></td>
                <td>
                    {{-- <button class="btn btn-danger btn-sm">Edit</button> --}}

                <a href="{{ route('deleteticket', ['id' => $booknew->id]) }}">
                    <button class="btn btn-danger btn-sm">Hủy vé</button>
                </a>
            </td>
            </tr>
            @endforeach
            @endif

            @if (!empty($booksactive))
            @foreach($booksaold as $key => $booknew)
            <tr>
                <th scope="row">{{$key}}</th>
                <td>{{Auth::user()->name}}</td>
                @foreach ($news as $new)
                    @if ($new->id == $booknew->id_news)
                        <td>{{$new->timestart}}</td>
                        <td>{{$new->timeend}}</td>
                        <td>{{$new->price}} VNĐ</td>
                    @endif
                @endforeach
                <td>Số: <b>{{$booknew->location}}</b></td>
                <td><button class="btn btn-secondary btn-sm">Hoàn thành</button></td>
                <td>
                    {{-- <button class="btn btn-danger btn-sm">Edit</button> --}}

                {{-- <a href="{{ route('deleteticket', ['id' => $booknew->id]) }}">
                    <button class="btn btn-danger btn-sm">Đã duyệt</button>
                </a> --}}
            </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection
