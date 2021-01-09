<div class="container">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Team</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/team" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nom</label>
              <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Entrer nom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" placeholder="Entrer prenom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <input type="text" name="role" class="form-control" id="exampleInputEmail1" placeholder="Entrer role">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Choisir une image de profil</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="src" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>