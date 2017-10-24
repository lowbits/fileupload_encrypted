@extends('layouts.app')


@section('content')



        <section class="section">
            <div class="container">
                <h1 class="title">
                    Alle Dateien
                </h1>

                @foreach($uploads as $upload)
                        <p>Upload id: {{$upload->id}}</p>
                        <p>Role id: {{$upload->role_id}}</p>
                        <p>Pre Date: {{$upload->pre_date}}</p>
                        <p>Post Date: {{$upload->post_date}}</p>
                    @foreach($upload->files as $file)
                        <a href="{{$file->path}}">Filename</a>
                    @endforeach




                @endforeach

            </div>
        </section>
@endsection

@section('scripts')


@endsection