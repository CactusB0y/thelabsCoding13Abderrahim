<div style="width: 100%">
    <iframe src="https://maps.google.com/maps?q={{$map->adress}}&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Modification de la map</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/maps/{{$map->id}}" method="POST">
            @csrf
            @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">addresse (rue, commune ou lieu)</label>
              <input type="text" name="adress" value="{{$map->adress}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer une rue, commune ou lieu">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>