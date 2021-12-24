@extends('layouts.app')

@section('content')
    <div class="content-middle">

        <div class="panel panel-default">

            <div class="panel-heading">Редактировать товар</div>


            <form action="{{route('categories.save', ['id' => $category->id])}}" method="post">
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <td>Название</td>
                        <td>
                            <input type="text" name="title" value="{{$category->title}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Описание</td>
                        <td>
                            <input type="text" name="description" value="{{$category->description}}">
                        </td>
                    </tr>
                </table>
                <input type="submit" value="сохранить">
            </form>


        </div>


    </div>
@endsection
