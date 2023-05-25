@extends('layouts.app')

@section('content')

<section id="trains">
    <div class="container pt-5 pb-3">
        <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4 pb-4">
            @foreach($trains as $train)
            <div class="col h-100">
                <div class="train card shadow h-100">
                    <img class="card-img-top" src="{{ $train->poster }}" alt="{{ $train->title }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $train->title }}</h4>
                    </div>
                    <!-- /.card-body -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="fw-bold">Original Titile: </span>
                            <span>{{ $train->original_title }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Nationality: </span>
                            <span>{{ $train->nationality }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Release date:</span>
                            <span>{{ $train->date }}</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Vote: </span>
                            <span>{{ $train->vote }}</span>
                        </li>
                    </ul>
                    <!-- /.list-group -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            @endforeach
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#trains -->

@endsection