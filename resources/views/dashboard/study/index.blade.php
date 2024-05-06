@extends('dashboard.index')

@section('data')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Add Data -->
    <div class="my-2">
        <a href="/studies/create" class="btn btn-primary">+ Tambah</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Kajian dan Poster Dakwah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Kajan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Kajan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($studies as $study)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $study->title }}</td>
                                <td>
                                    @if ($study->image)
                                        <img src="{{ asset('storage/' . $study->image) }}" alt="{{ $study->title }}"
                                            width="100">
                                    @else
                                        <img src="https://source.unsplash.com/300x300/?{{ $study->title }}"
                                            alt="{{ $study->title }}" width="100">
                                    @endif
                                </td>
                                <td>
                                    <a href="/studies/{{ $study->slug }}" class="btn btn-primary">Detail</a>
                                    <a href="/studies/{{ $study->slug }}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/studies/{{ $study->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are You Sure?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
