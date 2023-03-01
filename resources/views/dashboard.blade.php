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
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{--    <div class="py-12">--}}
    {{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
    {{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
    {{--                <div class="p-6 text-gray-900">--}}
    {{--                    {{ __("You're logged in!") }}--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>  --}}

    <form class="col-6">
        <div style="margin-top: 10px; margin-left: 10px" class="input-group input-group-lg">
            <input type="search" name="search" class="form-control" placeholder="Search By Date" value="{{$search}}"/>
        </div>
        <div style="margin-top: 10px;margin-left: 10px">
            <button class="btn btn-primary">Search</button>
        </div>
    </form>
    <table style="text-align: center" class="table table-striped">
        <thead>
        <tr>
            <th scope="col">User Name</th>
            <th scope="col">File Name</th>
            <th scope="col">File</th>
            <th scope="col">Upload Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>

                <td>{{$post->user->name}}</td>
                <td>{{$post->file_name}}</td>
                <td>{{$post->file}}</td>
                <td>{{$post->created_at->format('Y-m-d H:i:s')}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
</x-app-layout>
