@extends('app')

@section('title', '| Basket')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <h1 class="text-center mb-5">Basket</h1>
            <div class="row row-cols-2 justify-content-md-center">
                @foreach ($data as $d)
                    <div class="card mb-3 col m-1" style="max-width: 540px;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{$d->image_path}}" class="card-img-top" alt="..." height="150vh"">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-evenly ">
                                <h5 class="card-title">{{$d->name}}</h5>
                                <div class="h-50 overflow-auto mb-2">
                                    <p class="card-text fw-bold" style="text-align: justify">Rp.{{$d->price}}</p>
                                </div>
                                <div class="btn-group" role="group" aria-label="Basic example" style="width: 40%">
                                    <form action="/basket/{{$d->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <button class="btn btn-dark text-center" type="submit">-</button>
                                    </form>
                                    <input type="text" value="{{$d->qty}}" class="text-center" style="width: 33%">
                                    <form action="/basket/{{$d->id}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-dark text-center">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
