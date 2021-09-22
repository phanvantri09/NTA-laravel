@extends('admin.index')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">List Users</h3>
                    
                    <div class="table-responsive table-responsive-data2">
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
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{$bookData->appends(request()->all())->links()}}
                        </div>
                    </div>
                    <!-- END DATA TABLE -->

                </div>
            </div>
        </div>
    </div>
</div>

<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
@stop();