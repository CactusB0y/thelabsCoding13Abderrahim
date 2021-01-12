<div>
    <div class="row">
        <h5>les codes des icones sont disponibles dans le lien suivant:</h5>
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">ajouter une icone</h3>
                </div>
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
        <div class="col-6">

        </div>
    </div>
</div>
<div>
    <div class="row">
        <div class="col-6">
            <h2>Icones</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icone</th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($icons as $icon)
                        <tr>
                        <th scope="row">{{$icon->id}}</th>
                            <td>{{$icon->image}}</td>
                            <td>
                                <form role="form" action="/icon/{{$icon->id}}" method="POST">
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
            <h2>Icones Primes</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icone</th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($iconsPrimes as $icon)
                        <tr>
                        <th scope="row">{{$icon->id}}</th>
                            <td>{{$icon->image}}</td>
                            <td>
                                <form role="form" action="/iconPrime/{{$icon->id}}" method="POST">
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