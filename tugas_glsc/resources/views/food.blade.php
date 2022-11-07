@extends('app')

@section('title', '| Food')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <h1 class="text-center mb-3">Food</h1>
            <div class="d-flex">
                @foreach ($data as $d)
                    <div class="card" style="width: 18rem;">
                        <img src="{{$d->image_path}}" class="card-img-top" alt="..." height="250vh">
                        <div class="card-body">
                            <h5 class="card-title">{{$d->name}}</h5>
                            <div class="h-50 overflow-auto mb-2">
                                <p class="card-text" style="text-align: justify">{{$d->desc}}</p>
                            </div>
                            <p class="card-text fw-bold">{{$d->price}}</p>
                            @if($d->rating < 4)
                            <span class="badge text-bg-danger text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                {{$d->rating}}
                            </span>
                            @elseif($d->rating >= 4 )
                                <i class="bi bi-star-fill"></i>
                                <span class="badge text-bg-primary text-center" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    {{$d->rating}}
                                </span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
