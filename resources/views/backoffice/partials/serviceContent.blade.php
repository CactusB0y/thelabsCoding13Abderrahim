<div class="container">
    <h1>Services</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Text</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <th scope="row">{{$service->id}}</th>
                    <td>{{$service->titre}}</td>
                    <td>{{Str::limit($service->text, 50, '...') }}</td>
                    <td><a class="btn btn-primary" href="/service/{{$service->id}}/edit"><i class="fas fa-pen">edit</i></a></td>
                    <td>
                        <form role="form" action="/service/{{$service->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash">delete</i></button>
                        </form>
                    </td>
                </tr> 
            @endforeach
            {{  $services->fragment('services')->links('vendor.pagination.bootstrap-4') }}
        </tbody>
      </table>
</div>