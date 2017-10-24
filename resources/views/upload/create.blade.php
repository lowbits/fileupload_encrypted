@extends('layouts.app')


@section('content')



    <section class="section">
        <div class="container">
            <h1 class="title">
                Hello World
            </h1>

            <button id="submit-all">Submit all files</button>
            <form action="api/files/upload" class="dropzone" id="my-dropzone">
                {{csrf_field()}}

            </form>

        </div>
    </section>

    <section class="section">
        <div class="container">
            <h1 class="title">Neuer Upload</h1>

            <form action="/api/files/addUpload" method="post">
                {{csrf_field()}}
            </form>
        </div>
    </section>
@endsection

@section('scripts')

    <script id="addFiles" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>

    <script>
        Dropzone.options.myDropzone = {

            // Prevents Dropzone from uploading dropped files immediately
            autoProcessQueue: false,

            init: function() {
                var submitButton = document.querySelector("#submit-all")
                myDropzone = this; // closure

                submitButton.addEventListener("click", function() {
                    myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                });

                // You might want to show the submit button only when
                // files are dropped here:
                this.on("addedfile", function() {
                    // Show submit button here and/or inform user to click it.
                });

            }
        };
    </script>
@endsection