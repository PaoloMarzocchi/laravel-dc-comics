@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="table-responsive">
            <table
                class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Series</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($comics as $comic)
                    <tr class="">
                        <td scope="row">
                            <img width="100" src="{{$comic->thumb}}" alt="">
                        </td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->price}}</td>
                        <td>View/Edit/Delete</td>
                    </tr>
                    @empty
                    <tr class="">
                        <td scope="row">Nothing Found</td>
                        <td>Nothing Found</td>
                        <td>Nothing Found</td>
                        <td>Nothing Found</td>
                        <td>Nothing Found</td>
                        <td>Nothing Found</td>
                        <td>Nothing Found</td>
                    </tr>
                    @endforelse
                    
                    
                </tbody>
            </table>
        </div>
        
    </div>
</section>

@endsection