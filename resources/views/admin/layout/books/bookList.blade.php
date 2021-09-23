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
            <td>
                <span class="status--process">{{$book->timeCreate}}</span>
            </td>
            <td>
                <span class="status--process">{{$book->timeUpdate}}</span>
            </td>
            <td>
                <div class="table-data-feature">
                    <a  href="{{route('admin.editbook',$book->id)}}" class="item btnEdit" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    <a href="{{route('admin.deletebook',$book->id)}}" class="item btnDelete"  data-toggle="tooltip" data-placement="top" title="Delete">
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
@section('alertDelete')
<Script>
    $('.btnDelete').click(function(ev){
        ev.preventDefault();
        var _href= $(this).attr('href');
        $('form#formDelete').attr('action',_href);
        if(confirm('Do you want delete?')){
            $('form#formDelete').submit();
        }
    })
</Script>
@stop()
