@if (session('buttonUpdate'))
    <div class="alert alert-success">
        {{ session('buttonUpdate') }}
    </div>
@endif
<div>
    <div class="row">
        <div class="col-6">
          {{-- code pour changer l'image et le titre de la vidéo --}}
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">banniere video & url</h3>
            </div>
            <div class="mt-1 ml-5">
              <img height="50px" width="50px" src="{{asset('img/'.$abouts->video_src)}}" alt="">
            </div>
            <form role="form" action="/imagevideo/{{$abouts->id}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputFile">Choisir une bannière pour la vidéo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="video_src" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            <form role="form" action="/urlvideo/{{$abouts->id}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">url de la vidéo</label>
                  <input type="texte" name="video_url" value="{{$abouts->video_url}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-6">
              {{-- form pour changer le titre de la presentation ainsi que les colonne de texte --}}
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">titre, texte, bouton about</h3>
                </div>
                <form role="form" action="/about/{{$abouts->id}} " method="POST">
                  @csrf
                  @method('PATCH')
                  <div class="card-body">
                    <div class="form-group">
                      <label>texte gauche</label>
                      <textarea class="form-control" name="col_gauche" rows="4" placeholder="Enter du texte">{{$abouts->col_gauche}}</textarea>
                    </div>
                    <div class="form-group">
                      <label>texte droite</label>
                      <textarea class="form-control" name="col_droite" rows="4" placeholder="Enter du texte">{{$abouts->col_droite}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">texte bouton</label>
                      <input type="text" name="btn_nom" value="{{$abouts->btn_nom}}" class="form-control" id="exampleInputEmail1" placeholder="Enter un text pour le bouton">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">url bouton</label>
                      <input type="text" name="btn_lien" value="{{$abouts->btn_lien}}" class="form-control" id="exampleInputEmail1" placeholder="Enter un lien pour le bouton">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
  </div>
</div>