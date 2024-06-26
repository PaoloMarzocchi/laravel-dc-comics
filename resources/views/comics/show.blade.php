@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-end gap-3 py-3">
            <a class="btn btn-secondary" href="{{route('comics.index')}}">Go Back</a>
            <a class="btn btn-dark" href="{{route('comics.edit',$comic)}}">Edit</a>
        </div>
        <div class="row">
            <div class="col">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="col">
                <h2>{{$comic->title}}</h2>
                <ul class="list-unstyled">
                    <li>
                        <p>
                            <strong>Description:</strong><br>
                            {{$comic->description}}
                        </p>
                    </li>
                    <li>
                        <strong>Series: </strong>{{$comic->series}}
                    </li>
                    <li>
                        <strong>Type: </strong>{{$comic->type}}
                    </li>
                    <li>
                        <strong>Sale date: </strong>{{$comic->sale_date}}
                    </li>
                    <li>
                        <strong>Price: </strong>{{$comic->price}}
                    </li>
                </ul>
                
                
                
            </div>
        </div>
    </div>
</section>

@endsection