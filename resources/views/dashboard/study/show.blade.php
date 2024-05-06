@extends('dashboard.index')

@section('data')
    <div class="row">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="row justify-content-center">
                <div class="card shadow mb-4" style="width: 40rem;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ $study->title }}</h6>
                    </div>
                    <div class="card-body">
                        @if ($study->image)
                            <img src="{{ asset('storage/' . $study->image) }}" alt="{{ $study->title }}" class="card-img-top">
                        @else
                            <img src="https://source.unsplash.com/300x300/?{{ $study->title }}" alt="{{ $study->title }}"
                                class="card-img-top">
                        @endif

                        <p class="mt-3">{{ $study->description }}</p>
                    </div>
                </div>
                <div class="card shadow mb-4 mx-3">
                    <div class="card-body">
                        <div class="d-block mb-3">
                            <a href="/studies/{{ $study->slug }}/edit" class="btn btn-success">Edit</a>
                        </div>

                        <form action="/studies/{{ $study->slug }}" method="post" class="d-block mb-3">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <div class="d-block">
                            <a href="/studies" class="btn btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
