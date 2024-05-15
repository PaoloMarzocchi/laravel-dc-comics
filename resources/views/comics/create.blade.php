@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container">
        <form action="{{route('comics.store')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleId" placeholder="Batgirl #1"/>
                <small id="titleId" class="form-text text-muted">Insert Comic Title</small>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbId" placeholder="https://....."/>
                <small id="thumbId" class="form-text text-muted">Insert Image URL</small>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesId" placeholder="Batgirl"/>
                <small id="seriesId" class="form-text text-muted">Insert Comic Series</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeId" placeholder="comic book"/>
                <small id="typeId" class="form-text text-muted">Insert Comic Type</small>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateId" placeholder="2016-07-27"/>
                <small id="sale_dateId" class="form-text text-muted">Insert Comic Sale Date</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceId" placeholder="$2.99"/>
                <small id="priceId" class="form-text text-muted">Insert Comic Price</small>
            </div>
            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" aria-describedby="descriptionId" placeholder="“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson...."></textarea>
                <small id="descriptionId" class="form-text text-muted">Insert Comic Description</small>
            </div>

            <button type="submit"class="btn btn-success">Add Comic</button>
        </form>
    </div>
</section>

@endsection