@extends('dashboard.index')

@section('data')
    <div class="row">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center">
                        {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            <img class="img-preview">
                        </div> --}}
                        <div class="col-lg-9">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Tambah Data Kajian</h1>
                                </div>
                                <form action="/studies" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="title" class="form-label">Judul Kajian</label>

                                        <input type="text"
                                            class="form-control form-control-user @error('title') is-invalid @enderror"
                                            id="title" placeholder="Ketikkan Judul Kajian..." name="title" autofocus
                                            value="{{ old('title') }}">

                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug" class="form-label">Slug</label>

                                        <input type="text" name="slug" id="slug"
                                            class="form-control form-control-user" value="{{ old('slug') }}">
                                    </div>
                                    <div class="form-group">
                                        <img class="img-preview" width="300">
                                        <div class="input-group mt-2 mb-3">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                id="image" name="image" onchange="previewImage()"
                                                value="{{ old('image') }}">
                                            <label class="input-group-text" for="image">Upload</label>

                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-text">Deskripsi</span>
                                            <textarea class="form-control @error('description') is-invalid @enderror" aria-label="With textarea" name="description"
                                                id="description">{{ old('description') }}</textarea>

                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
