<div class="content">
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Testimonial</h3>
            </div>
            <form role="form" action="/testimonial/{{$edit->id}}" method="POST">
                @csrf
                @method('PATCH')
              <div class="card-body">
                <div class="form-group">
                    <label>Auteur</label>
                    <select name="team_id" class="form-control">
                        @foreach ($teams as $team)
                            <option value="{{$team->id}}">{{$team->prenom}} {{$team->nom}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Testimonial</label>
                    <textarea name="testimonial" class="form-control" rows="3" placeholder="Entrer du texte ...">{{$edit->testimonial}}</textarea>
                  </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
</div>