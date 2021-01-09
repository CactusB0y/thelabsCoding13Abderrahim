<div class="container">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/ready/{{$ready->id}}" method="POST">
            @csrf
            @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">titre</label>
              <input type="text" name="titre" value="{{$ready->titre}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un titre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">sous titre</label>
                <input type="text" name="sous_titre" value="{{$ready->sous_titre}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un sous titre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">texte bouton</label>
                <input type="text" name="bouton_nom" value="{{$ready->bouton_nom}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un text pour le bouton">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">url bouton</label>
                <input type="text" name="bouton_url" value="{{$ready->bouton_url}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un url pour le bouton">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>