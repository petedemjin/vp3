@extends('layouts.app')

@section('content')
    <div class="content-middle">

        <div class="panel panel-default">

            <div class="panel-heading">Редактировать товар</div>


            <form action="{{route('goods.save', ['id' => $good->id])}}" method="post">
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <td>Название</td>
                        <td>
                            <input type="text" name="title" value="{{$good->title}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Цена</td>
                        <td>
                            <input type="text" name="price" value="{{$good->price}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Описание</td>
                        <td>
                            <input type="text" name="description" value="{{$good->description}}">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="сохранить">
            </form>


        </div>


    </div>
@endsection
