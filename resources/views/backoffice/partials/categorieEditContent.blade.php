<div>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <form role="form" action="/categorie/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Categorie</label>
              <input type="text" name="categorie" value="{{$edit->categorie}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer une categorie">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>