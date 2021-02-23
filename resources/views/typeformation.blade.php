@extends('main')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($typeformation as $item)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                    </div>
                </div>
                @if ($loop->iteration %3 == 0)
                    </div>
                    <div class="row">
                @endif
            @endforeach
        </div>
    </div>
@endsection