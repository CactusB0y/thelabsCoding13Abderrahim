<div>
    <div class="row">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Ajout d'un tag</h3>
                </div>
                <form role="form" action="/tag" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tag</label>
                      <input type="text" name="tag" class="form-control" id="exampleInputEmail1" placeholder="Entrer un tag">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
        <div class="col-6">
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Ajout d'une categorie</h3>
                </div>
                <form role="form" action="/categorie" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Categorie</label>
                      <input type="text" name="categorie" class="form-control" id="exampleInputEmail1" placeholder="Entrer une categorie">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">tag</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <th scope="row">{{$tag->id}}</th>
                            <td>{{$tag->tag}}</td>
                            <td><a class="btn btn-primary" href="/tag/{{$tag->id}}/edit"><i class="fas fa-pen">edit</i></a></td>
                            <td>
                                <form action="/tag/{{$tag->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-6">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">categorie</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                        <tr>
                            <th scope="row">{{$categorie->id}}</th>
                            <td>{{$categorie->categorie}}</td>
                            <td><a class="btn btn-primary" href="/categorie/{{$categorie->id}}/edit"><i class="fas fa-pen">edit</i></a></td>
                            <td>
                                <form action="/categorie/{{$categorie->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>