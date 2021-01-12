<div class="mb-5">
    <div class="row">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">ajouter un service</h3>
                </div>
                <form role="form" action="/service" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Titre</label>
                      <input type="text" name="titre" class="form-control" id="exampleInputEmail1" placeholder="Entrer un titre">
                    </div>
                    <div class="form-group">
                      <label>Texte</label>
                      <textarea class="form-control" name="text" rows="2" placeholder="Entrer un texte ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Select</label>
                        <select name="icone_id" class="form-control">
                            @foreach ($icons as $icon)
                                <option value="{{$icon->id}}">{{$icon->image}}</option>
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
        <div class="col-6">
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">ajouter un service prime</h3>
                </div>
                <form role="form" action="/serviceprime" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Titre</label>
                      <input type="text" name="titre" class="form-control" id="exampleInputEmail1" placeholder="Entrer un titre">
                    </div>
                    <div class="form-group">
                      <label>Texte</label>
                      <textarea class="form-control" name="text" rows="2" placeholder="Entrer un texte ..."></textarea>
                    </div>
                    <div class="form-group">
                        <label>Select</label>
                        <select name="icone_id" class="form-control">
                            @foreach ($iconprimes as $icon)
                                <option value="{{$icon->id}}">{{$icon->image}}</option>
                            @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>
</div>
<div>
    <div class="row">
        <div class="col-6">
            <h2>Services</h2>
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
                </tbody>
              </table>
        </div>
        <div class="col-6">
            <h2>Services Primes</h2>
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
                    @foreach ($servicePrimes as $servicePrime)
                        <tr>
                            <th scope="row">{{$servicePrime->id}}</th>
                            <td>{{$servicePrime->titre}}</td>
                            <td>{{Str::limit($servicePrime->text, 50, '...') }}</td>
                            <td><a class="btn btn-primary" href="/serviceprime/{{$servicePrime->id}}/edit"><i class="fas fa-pen">edit</i></a></td>
                            <td>
                                <form role="form" action="/serviceprime/{{$servicePrime->id}}" method="POST">
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
        {{  $services->fragment('service')->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
