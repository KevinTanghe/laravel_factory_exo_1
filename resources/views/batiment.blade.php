@extends('main')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            @foreach ($batiment as $item)
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <p class="card-text">{{$item->description}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
