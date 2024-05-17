@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <h2>Comics</h2>
            <a class="btn btn-success" href="{{route('comics.create')}}">Add comic</a>
        </div>
        {{$comics->links('pagination::my-custom')}}
        <div class="table-responsive">
            <table class="table table-success table-bordered table-striped">
                <thead>
                    <tr class="text-center">
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
                    <tr class="text-center">
                        <td scope="row">
                            <img width="100" src="{{$comic->thumb}}" alt="">
                        </td>
                        <td>{{$comic->title}}</td>
                        <td width="160">{{$comic->sale_date}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->price}}</td>
                        <td width="180s">
                           <a class="btn btn-secondary" href="{{route('comics.show',$comic)}}">👁</a>
                           <a class="btn btn-dark" href="{{route('comics.edit',$comic)}}">🖊</a> 
                           <!-- Modal trigger button -->
                           <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalId-{{$comic->id}}">
                            🗑
                           </button>
                           
                           <!-- Modal Body -->
                           <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                           <div class="modal fade" id="modalId-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitleId">
                                            Deleting {{$comic->title}}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">Attention! You are deleting this comic, this action is irreversible. Do you want to continue?</div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            No, Go back
                                        </button>
                                        <form class="d-inline" action="{{route('comics.destroy',$comic)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Yes, Delete it</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           </div>
                           
                           <!-- Optional: Place to the bottom of scripts -->
                           <script>
                            const myModal = new bootstrap.Modal(
                                document.getElementById("modalId"),
                                options,
                            );
                           </script>
                           
                           {{-- <form class="d-inline" action="{{route('comics.destroy',$comic)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-primary">Yes, Delete it</button>
                            </form> --}}
                        </td>
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
        {{$comics->links('pagination::my-custom')}}
    </div>
</section>

@endsection