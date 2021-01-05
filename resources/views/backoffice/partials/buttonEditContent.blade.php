<div class="container">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Infos</h3>
        </div>
        <form role="form" action="/navbar/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">bouton</label>
              <input type="text" name="button" value="{{$edit->button}}" class="form-control" id="exampleInputEmail1" placeholder="bouton">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">url</label>
                <input type="text" name="url" value="{{$edit->url}}" class="form-control" id="exampleInputEmail1" placeholder="url">
              </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
        </form>
      </div>
</div>