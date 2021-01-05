@if (session('buttonUpdate'))
    <div class="alert alert-success">
        {{ session('buttonUpdate') }}
    </div>
@endif
<div>
    <div class="row">
        <div class="col-6">
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
                                <a href="navbar/{{$navbar->id}}/edit"><i class="fas fa-edit">edit</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-6">
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Logo</h3>
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
                          <input type="file" name="src" class="custom-file-input" id="exampleInputFile">
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