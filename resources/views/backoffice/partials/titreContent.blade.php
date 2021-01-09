@if (session('buttonUpdate'))
    <div class="alert alert-success">
        {{ session('buttonUpdate') }}
    </div>
@endif
<div>
    <div class="row">
        <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($titres as $titre)
                        <tr>
                            <th scope="row">{{$titre->id}}</th>
                            <td>{{$titre->titre}}</td>
                            <td>
                                <a class="btn btn-primary" href="/titre/{{$titre->id}}/edit"><i class="fas fa-edit">edit</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <div class="row">
        <div class="container mt-5">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">src</th>
                    <th scope="col">Avatar</th>
                    <th scope="col"> </th>
                    <th scope="col"><a class="btn btn-success" href="/team/create">Ajouter un membre</a></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <th scope="row">{{$team->id}}</th>
                            <td>{{$team->nom}}</td>
                            <td>{{$team->prenom}}</td>
                            <td><img height="50px" src="{{asset('img/team/'.$team->src)}}" alt=""></td>
                            <td><img height="50px" src="{{asset('img/avatar/'.$team->src_avatar)}}" alt=""></td>
                            <td>
                                <a class="btn btn-primary" href="/team/{{$team->id}}/edit"><i class="fas fa-edit">edit</i></a>
                            </td>
                            <td>
                                <form role="form" action="/team/{{$team->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"> delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Modification du membre principal</h3>
                </div>
                <form role="form" action="/main/{{$choice->id}}" method="POST">
                    @csrf
                  <div class="card-body">
                      <div class="d-flex mb-5">
                          <img class="mr-5" height="50px" src="{{asset('img/team/'.$choice->teams->src)}}" alt="">
                          <p><b>{{$choice->teams->nom}} {{$choice->teams->prenom}}</b></p>
                      </div>
                      <div class="form-group">
                        <label>Selectionner un membre principal</label>
                        <select name="team_id" class="form-control">
                            @foreach ($teams as $team)
                                <option value="{{$team->id}}">{{$team->prenom}} {{$team->nom}}</option>  
                            @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <a class="btn btn-success mb-3" href="/testimonial/create">Ajouter un testimonial</a>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Testimonials</th>
                    <th scope="col">auteur</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $testimonial)
                        <tr>
                            <th scope="row">{{$testimonial->id}}</th>
                            <td>{{$testimonial->testimonial}}</td>
                            <td>{{$testimonial->teams->nom}} {{$testimonial->teams->prenom}}</td>
                            <td>
                                <a class="btn btn-primary" href="/testimonial/{{$testimonial->id}}/edit"><i class="fas fa-edit">edit</i></a>
                            </td>
                            <td>
                                <form role="form" action="/testimonial/{{$testimonial->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>