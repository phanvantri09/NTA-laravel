
@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <strong>Add Books</strong> Elements
    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.add')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
           @csrf 
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Name Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="nameBook" placeholder="Enter Name" class="form-control">
                    @error('nameBook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Amount Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="email-input" name="amountBook" placeholder="Enter Amount" class="form-control">
                    @error('amountBook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Infomation Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="infoBook" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                    @error('infoBook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Genre Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="genreBook" id="select" class="form-control">
                        <option value="0">Trinh thám</option>
                        <option value="1">Viễn tưởng</option>
                        <option value="2">Tình Cảm</option>
                        <option value="3">Chiến tranh</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Author Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="authorBook" placeholder="Enter Author" class="form-control">
                    @error('authorBook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Price Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="priceBook" placeholder="Enter Price" class="form-control">
                    @error('priceBook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Image Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="imgBook" class="form-control-file">
                    @error('imgBook')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
            </div>
        </form>
    </div>
    
</div>
@stop();