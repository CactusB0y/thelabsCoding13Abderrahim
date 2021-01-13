<div>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/article/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">titre</label>
              <input type="text" name="titre" value="{{$edit->titre}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un titre">
            </div>
            <div class="form-group">
                <label>texte</label>
                <textarea name="texte" class="form-control" rows="5" placeholder="Entrer du texte ...">{{$edit->texte}}</textarea>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>tag</label>
                        <select multiple="" name="tab[]" class="form-control">
                            @foreach ($tags as $tag)
                                <option  value="{{$tag->id}}" {{ in_array($tag->id, old('tab') ?: []) ? 'selected' : '' }}>{{$tag->tag}}</option> 
                            @endforeach
                        </select>
                      </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>catégorie</label>
                        <select multiple="" name="tab2[]" class="form-control">
                            @foreach ($categories as $categorie)
                            <option  value="{{$categorie->id}}" {{ in_array($categorie->id, old('tab2') ?: []) ? 'selected' : '' }}>{{$categorie->categorie}}</option> 
                        @endforeach
                        </select>
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