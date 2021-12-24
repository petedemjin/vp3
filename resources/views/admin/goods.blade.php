@extends('layouts.app')

@section('content')
    <div class="content-middle">
        Список товаров

        <div class="panel panel-default">

            <div class="panel-heading"></div>
            <table class="table table-bordered" border="1" style="width: 100%;">
                @foreach($goods as $good)
                    <tr>
                        <td>{{$good->id}}</td>
                        <td>{{$good->title}}</td>
                        <td>{{$good->price}}</td>
                        <td>{{$good->description}}</td>
                        <td>
                            <a href="{{route('goods.edit', ['id' => $good->id])}}">edit</a>
                            <a href="{{route('goods.delete', ['id' => $good->id])}}">delete</a>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </div>
@endsection
