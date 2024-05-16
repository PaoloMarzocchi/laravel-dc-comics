@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-end gap-3 py-3">
            <a class="btn btn-secondary" href="{{route('comics.index')}}">Go Back</a>
        </div>
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('comics.update',$comic)}}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titleId" placeholder="Batgirl #1" value="{{old('title',$comic->title)}}"/>
                <small id="titleId" class="form-text text-muted">Insert Comic Title</small>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" aria-describedby="thumbId" placeholder="https://....." value="{{old('thumb',$comic->thumb)}}"/>
                <small id="thumbId" class="form-text text-muted">Insert Image URL</small>
                @error('thumb')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" aria-describedby="seriesId" placeholder="Batgirl" value="{{old('series',$comic->series)}}"/>
                <small id="seriesId" class="form-text text-muted">Insert Comic Series</small>
                @error('series')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" aria-describedby="typeId" placeholder="comic book" value="{{old('type',$comic->type)}}"/>
                <small id="typeId" class="form-text text-muted">Insert Comic Type</small>
                @error('type')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" aria-describedby="sale_dateId" placeholder="2016-07-27" value="{{old('sale_date',$comic->sale_date)}}"/>
                <small id="sale_dateId" class="form-text text-muted">Insert Comic Sale Date</small>
                @error('sale_date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="priceId" placeholder="$2.99" value="{{old('price',$comic->price)}}"/>
                <small id="priceId" class="form-text text-muted">Insert Comic Price</small>
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class=" @error('description') is-invalid @enderror" id="description" cols="30" rows="10" aria-describedby="descriptionId" placeholder="“Beyond Burnside” Chapter One:....">{{old('description',$comic->description)}}</textarea>
                <small id="descriptionId" class="form-text text-muted">Insert Comic Description</small>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit"class="btn btn-success">Edit</button>
        </form>
    </div>
</section>

@endsection