<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Membre</h3>
        </div>
        <form role="form" action="/team/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" name="nom" value="{{$edit->nom}}" class="form-control" id="exampleInputEmail1" placeholder="nom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Prenom</label>
                <input type="text" name="prenom" value="{{$edit->prenom}}" class="form-control" id="exampleInputEmail1" placeholder="prenom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <input type="text" name="role" value="{{$edit->role}}" class="form-control" id="exampleInputEmail1" placeholder="role">
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Logo et titre </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/teamProfil/{{$edit->id}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="mb-3">
                <h6><b>Image de profil et avatar</b></h6>
                <div>
                    <img height="50px" src="{{asset('img/team/'.$edit->src)}}" alt="">
                    <img height="50px" src="{{asset('img/avatar/'.$edit->src_avatar)}}" alt="">
                </div>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Choisir une photo</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="src" value="{{$edit->src}}" class="custom-file-input" id="exampleInputFile">
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