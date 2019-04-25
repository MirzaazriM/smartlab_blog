
@section('content')

        <h2>Blogs</h2>

        <table class="table table-striped table-light">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Created at</th>

            </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                   <tr>
                       <td>{{$blog->heading}}</td>
                       <td>{{$blog->name}} {{$blog->lastname}}</td>
                       <td>{{$blog->created_at}}</td>
                   </tr>
                @endforeach
            </tbody>
        </table>

@endsection