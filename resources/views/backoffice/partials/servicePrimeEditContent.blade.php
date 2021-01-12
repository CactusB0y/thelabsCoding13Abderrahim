<div class="container">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Service</h3>
        </div>
        <form role="form" action="/serviceprime/{{$edit->id}}" method="POST">
          @csrf
          @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Titre</label>
              <input type="text" name="titre" value="{{$edit->titre}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un titre">
            </div>
            <div class="form-group">
                <label>Texte</label>
                <textarea name="text" class="form-control" rows="2" placeholder="Entrer un texte ...">{{$edit->text}}</textarea>
            </div>
            <div class="form-group">
                <label>Selectionner une icone</label>
                <select name="icone_id" class="form-control">
                    @foreach ($icons as $icon)
                        <option {{ $icon->id == $edit->icone_id ? 'selected' : '' }} value="{{$icon->id}}">{{$icon->image}}</option>  
                    @endforeach
                </select>
              </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>