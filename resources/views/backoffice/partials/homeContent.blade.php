@if (session('buttonUpdate'))
    <div class="alert alert-success">
        {{ session('buttonUpdate') }}
    </div>
@endif
<div>
    <div class="row">
        <div class="col-6">
          {{-- form pour la navbar --}}
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Boutons navbar</h3>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">button</th>
                  <th scope="col">url</th>
                  <th scope="col"> </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($navbars as $navbar)
                      <tr>
                          <th scope="row">{{$navbar->id}}</th>
                          <td>{{$navbar->button}}</td>
                          <td>{{$navbar->url}}</td>
                          <td>
                              <a class="btn btn-primary" href="navbar/{{$navbar->id}}/edit"><i class="fas fa-edit">edit</i></a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
          {{-- form pour les images de la caroussel --}}
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Caroussel image</h3>
            </div>
            <div class="container mb-1">
              <form role="form" action="/caroussel" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputFile">Choisir une image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="src" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">submit</button>
              </form>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">image</th>
                  <th scope="col"> </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($caroussels as $caroussel)
                  <tr>
                    <th scope="row">{{$caroussel->id}}</th>
                    <td><img height="50px" src="{{asset('img/'.$caroussel->src)}}" alt=""></td>
                    <td>
                      <div class="row">
                          <form role="form" action="/caroussel/{{$caroussel->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash">delete</i></button>
                          </form>
                      </div>
                    </td>
                  </tr>  
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-6">
          {{-- form pour changer le logo ainsi que le titre --}}
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Logo et titre </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/logo/{{$logo->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                  <div class="card-body">
                    <div class="mb-3">
                        <h6><b>Logo actuel</b></h6>
                        <img height="50px" src="{{asset('img/'.$logo->src)}}" alt="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Choisir un logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="src" value="{{$logo->src}}" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
  </div>
</div>