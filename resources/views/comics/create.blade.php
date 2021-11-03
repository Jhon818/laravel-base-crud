@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Entertype">
                    </div>
                    <div class="form-group">
                        <label for="type">thumb</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter">
                    </div>
                    <div class="form-group">
                        <label for="type">price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter">
                    </div>
                    <div class="form-group">
                        <label for="type">series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter">
                    </div>
                    <div class="form-group">
                        <label for="type">sale date</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection