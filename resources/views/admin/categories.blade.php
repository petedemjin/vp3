@extends('layouts.app')

@section('content')
    <div class="content-middle">
        Список категорий

        <div class="panel panel-default">

            <div class="panel-heading"></div>
            <table class="table table-bordered" border="1" style="width: 100%;">
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            <a href="{{route('categories.edit', ['id' => $category->id])}}">edit</a>
                            <a href="{{route('categories.delete', ['id' => $category->id])}}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </div>
@endsection
