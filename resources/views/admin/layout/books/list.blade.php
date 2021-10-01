@extends('admin.index')
@section('content')
<!-- MAIN CONTENT-->
<h3 class="title-5 m-b-35">List Books</h3>
<table class="table table-data2">
    <thead>
        <tr>
            <th>...</th>
            <th>Name</th>
            <th>Genre</th>
            <th>Amount</th>
            <th>Infomation</th>
            <th>Author</th>
            <th>Price/1</th>
            <th>Image</th>
            <th>Infomation</th>
            <th>Time Update</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookData as $book)
        <tr class="tr-shadow">
            <td>{{$book->id}}</td>
            <td>{{$book->nameBook}}</td>
            <td>{{$book->genreBook}}</td>
            <td>{{$book->amountBook}}</td>
            <td>{{$book->infoBook}}</td>
            <td>{{$book->authorBook}}</td>
            <td>{{$book->priceBook}}</td>   
            <td><img src="{{ asset("/imgUploads/$book->imgBook")}}" alt=""></td>           
            <td>
                <span class="status--process">{{$book->created_at}}</span>
            </td>
            <td>
                <span class="status--process">{{$book->updated_at}}</span>
            </td>
            <td>
                <div class="table-data-feature">
                    <a  href="{{route('admin.editBook',$book->id)}}" class="item btnEdit" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    <a href="{{route('admin.deleteBook',$book->id)}}" class="item btnDelete"  data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="zmdi zmdi-delete"></i>
                    </a>
                </div> 
            </td>
        </tr>
        <tr class="spacer"></tr>
        @endforeach
    </tbody>
</table>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<div>
    {{$bookData->appends(request()->all())->links()}}
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
@stop();

