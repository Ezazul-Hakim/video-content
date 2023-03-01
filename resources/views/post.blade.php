<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('File Upload') }}
        </h2>
    </x-slot>

    <div style="margin-left:10px ">
        <form method="post" enctype="multipart/form-data">

            @csrf
            <label for="product" class="col-sm- col-form-label col-form-label-lg-6">File name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="product" name="product"><br>
            </div>
            <label for="file" class="col-sm- col-form-label col-form-label-lg-6">File:</label><br>
            <div class="col-sm-10">
                <input type="file" id="file" name="file">
            </div>

            <div style="margin-top: 10px">
                <button class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
</x-app-layout>
