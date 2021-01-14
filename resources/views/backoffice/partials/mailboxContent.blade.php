<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Expéditeur</th>
        <th scope="col">Email</th>
        <th scope="col">Sujet</th>
        <th scope="col">Date</th>
        <th scope="col"> </th>
        <th scope="col"> </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
            <tr>
                <th scope="row">{{$message->id}}</th>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->subject}}</td>
                <td>{{$message->created_at->format('d')}}/{{$message->created_at->format('m')}}/{{$message->created_at->format('y')}}</td>
                <td><a class="btn btn-primary" href="/message/{{$message->id}}"><i class="fas fa-eye"></i></a></td>
                <td>
                    <form action="/message/{{$message->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>