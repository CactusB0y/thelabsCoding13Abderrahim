<div>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <form role="form" action="/tag/{{$edit->id}}" method="POST">
            @csrf
            @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tag</label>
              <input type="text" name="tag" value="{{$edit->tag}}" class="form-control" id="exampleInputEmail1" placeholder="Entrer un tag">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>