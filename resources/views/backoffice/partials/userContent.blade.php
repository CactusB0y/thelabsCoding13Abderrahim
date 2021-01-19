<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">src</th>
            <th scope="col">role</th>
            <th scope="col">description</th>
            <th scope="col">email</th>
            <th> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->prenom}}</td>
                    <td><img height="50px" src="{{asset('img/avatar/'.$user->src)}}" alt=""></td>
                    <td>{{$user->roles->role}}</td>
                    <td>{{$user->description}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="/teamcreate/{{$user->id}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary" ><i class="fas fa-check"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>