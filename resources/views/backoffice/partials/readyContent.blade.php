<div class="container">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Ready</h3>
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
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">texte bouton</label>
                  <input type="text" name="bouton_nom" value="{{$ready->bouton_nom}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un text pour le bouton">
              </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">url bouton</label>
                  <input type="text" name="bouton_url" value="{{$ready->bouton_url}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un url pour le bouton">
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
<div class="container">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Contact Us</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/contact/{{$contact->id}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Titre</label>
              <input type="text" name="titre" value="{{$contact->titre}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un titre">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Sous Titre</label>
              <input type="text" name="sous_titre" value="{{$contact->sous_titre}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un sous titre">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>texte</label>
          <textarea class="form-control" name="texte" rows="3" placeholder="Entrer un texte ...">{{$contact->texte}}</textarea>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Rue</label>
              <input type="text" name="rue" value="{{$contact->rue}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer une rue">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Code Postal</label>
              <input type="number" name="code_postal" value="{{$contact->code_postal}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un code postal">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Région</label>
              <input type="text" name="region" value="{{$contact->region}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer une région">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Téléphone</label>
              <input type="text" name="tel" value="{{$contact->tel}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un numéro de téléphone">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" value="{{$contact->email}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un email">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
<div class="container">
  <div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Footer</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/footer/{{$footer->id}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Texte</label>
          <input type="text" name="texte" value="{{$footer->texte}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un texte">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Nom du lien</label>
              <input type="text" name="nom_lien" value="{{$footer->nom_lien}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un nom pour le lien">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Lien</label>
              <input type="text" name="lien" value="{{$footer->lien}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un lien">
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