<div class="container">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Titre</h3>
        </div>
        <form role="form" action="/titre/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">bouton</label>
              <p>"mettre des parenthese autour des mots a surligner en vert"</p>
              <input type="text" name="titre" value="{{$edit->titre}}" class="form-control" id="exampleInputEmail1" placeholder="bouton">
            </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
        </form>
      </div>
</div>