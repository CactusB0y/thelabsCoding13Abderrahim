<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">email</th>
        <th scope="col"> </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($newsletters as $newsletter)
            <tr>
                <th scope="row">{{$newsletter->id}}</th>
                <td>{{$newsletter->email}}</td>
                <td>
                    <form action="/newsletter/{{$newsletter->id}} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash">delete</i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>