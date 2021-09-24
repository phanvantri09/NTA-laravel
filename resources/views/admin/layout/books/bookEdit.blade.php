
@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
        <strong>Basic Form</strong> Elements

    </div>
    <div class="card-body card-block">
        <form action="{{route('admin.updatebook',$id)}}" method="POST" role='form' class="form-horizontal">
            @csrf @method('PUT')
            <input type="hidden" name="idBook" value="{{$id->id}}">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Name Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" value="{{$id->nameBook}}" name="nameBook" placeholder="Enter Name" class="form-control">
                    @error('nameBook')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Amount Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="email-input" value="{{$id->amountBook}}" name="amountBook" placeholder="Enter Amount" class="form-control">
                    @error('amountBook')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Infomation Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="infoBook" id="textarea-input"  rows="9"  class="form-control">{{$id->infoBook}}</textarea>
                    @error('infoBook')
                    <small class="help-block">{{$message}}</small>
                    @enderror 
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Genre Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="genreBook" id="select" class="form-control">
                        <option value="{{$id->genreBook}}">{{$id->genreBook}}</option>
                        <option value="Viễn tưởng">Viễn tưởng</option>
                        <option value="Tình Cảm">Tình Cảm</option>
                        <option value="Tình Cảm">Chiến tranh</option>
                        <option value="Tình Cảm">Trinh thám</option>
                    </select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Author Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" value="{{$id->authorBook}}" name="authorBook" placeholder="Enter Author" class="form-control">
                    @error('authorBook')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Price Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" value="{{$id->priceBook}}" name="priceBook" placeholder="Enter Price" class="form-control">
                    @error('priceBook')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Image Book</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" value="{{$id->imgBook}}" name="imgBook" class="form-control-file">
                    @error('imgBook')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                {{-- <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button> --}}
            </div>
        </form>
    </div>
    
</div>
@stop();