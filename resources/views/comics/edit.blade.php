@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', $comic['id']) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{ $comic['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {{-- <input value="{{ $comic['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter comic description"> --}}

                        <textarea class="form-control" id="description" name="description">{!! $comic['description'] !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        {{-- <input value="{{ $comic['type'] }}" type="text" name="type" class="form-control" id="type" placeholder="Enter comic type"> --}}
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Seleziona --</option>
                            <option value="30ms" {{ $comic['type'] == '30ms' ? 'selected' : NULL}}>30ms</option>
                            <option value="1hour" {{ $comic['type'] == '1hour' ? 'selected' : NULL}}>1hour</option>
                            <option value="+1hour" {{ $comic['type'] == '+1hour' ? 'selected' : NULL}}>+1hour</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="thumb">img</label>
                        <input value="{{ $comic['thumb'] }}" type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter comic sale_date">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input value="{{ $comic['price'] }}" type="text" name="price" class="form-control" id="price" placeholder="Enter comic price">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection