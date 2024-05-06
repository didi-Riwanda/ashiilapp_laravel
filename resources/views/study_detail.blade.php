@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="section-title mt-2">
            <small>Kajian</small>
            <h3>Majelis Harian Markaz Sunnah Nusantara Al Hijrah</h3>
        </div>

        {{-- @dd($data) --}}

        @foreach ($data['fileurl'] as $d)
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $d }}" width="500" class="image rounded">
                </div>

                <div class="col-md-6">
                    <h4>{{ $data['title'] }}</h4>
                    {!! $data['content'] !!}
                </div>
            </div>
        @endforeach


    </div>
@endsection
