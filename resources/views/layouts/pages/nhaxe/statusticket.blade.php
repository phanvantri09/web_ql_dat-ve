
@extends('layouts.master')

@section('content')

<div class="container">
<h1>Danh sách Chuyến Xe</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Trạng thái</th>
                <th scope="col"> Vị trí</th>
                <th scope="col"> </th>

        </thead>
        <tbody>
            @if (!empty($news))

            @foreach($ticket as $key => $news)
            <tr>
                <th scope="row">{{$key}}</th>
                @if ($news->status == 0 )
                <td>Chưa đặt</td>
                <td>Số : <b>{{$news->location}}</b> </td>
                <td>
                    {{-- <a href="{{route('statusticket',['id' => $news-> id])}}">
                        <button class="btn btn-success btn-sm">Trạng thái vé</button>
                    </a>
                    <a href="{{route('edit',['id' => $news-> id])}}">
                        <button class="btn btn-primary btn-sm">Edit</button>
                    </a>
                    <a href="{{ route('delete', ['id' => $news->id]) }}">
                        <button class="btn btn-danger btn-sm">Xóa</button>
                    </a> --}}
                </td>
                @elseif ($news->status == 1 )
                <td>Có người đặt</td>
                <td>Số : <b>{{$news->location}}</b> </td>
                <td>@foreach ($user as $item)
                    @if ($item->id == $news->id_user)
                        {{$item->email}}
                    @endif
                @endforeach </td>
                <td>
                    <a href="{{route('activeTicket',['id' => $news-> id])}}">
                        <button class="btn btn-success btn-sm">Chấp nhận vé</button>
                    </a>


                </td>
                @else
                <td><button class="btn btn-primary btn-sm">Vé đã được chấp nhận</button></td>
                <td>Số : <b>{{$news->location}}</b> </td>
                <td>@foreach ($user as $item)
                    @if ($item->id == $news->id_user)
                        {{$item->email}}
                    @endif
                @endforeach </td>
                <td>
                    <a href="{{route('deleteticket',['id' => $news-> id])}}">
                        <button class="btn btn-danger btn-sm">Hủy vé của người này</button>
                    </a>
                </td>
                @endif

            </tr>
            @endforeach
            @endif

        </tbody>
    </table>
</div>
@endsection
