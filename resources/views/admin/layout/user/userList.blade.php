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
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Number Phone</th>
                                    <th>Address</th>
                                    <th>Time Create</th>
                                    <th>Time Update</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userData as $user)
                                <tr class="tr-shadow">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->userName}}</td>
                                    <td>
                                        <span class="block-email">{{$user->email}}</span>
                                    </td>
                                    <td class="desc">{{$user->numberPhone}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>
                                        <span class="status--process">{{$user->timeCreate}}</span>
                                    </td>
                                    <td>
                                        <span class="status--process">{{$user->timeUpdate}}</span>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                @endforeach
                            </tbody>
                        </table>
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