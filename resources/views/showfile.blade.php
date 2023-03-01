<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>
</head>
<body>
<table class="table table-bordered">
    <thead>
    <tr>

        <th scope="col">File Name</th>
        <th scope="col">File</th>
        <th scope="col">Upload Date</th>

    </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
    <tr>

        <td>{{$item->name}}</td>
        <td>{{$item->file}}</td>
        <td><p>{{ $item->created_at->format('d-m-y') }}</p></td>


    </tr>
        @endforeach
    </tbody>
</table>
{{--<table class="table table-bordered">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">Name</th>--}}
{{--        <th scope="col">Video</th>--}}
{{--        <th scope="col">Upload</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach ($data as $item)--}}
{{--        <tr>--}}
{{--            <td>{{ $item->name }}</td>--}}
{{--            <td>--}}
{{--                @foreach ($item->getMedia('videos') as $media)--}}
{{--                    <video controls>--}}
{{--                        <iframe src="{{ $media->getUrl() }}" type="{{ $media->mime_type }}"></iframe>--}}
{{--                    </video>--}}
{{--                    <p>{{ $item->name }}</p>--}}
{{--                @endforeach--}}
{{--            </td>--}}
{{--            <td>--}}
{{--                <p>{{ $item->created_at->format('d-m-y') }}</p>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}

</body>
</html>
