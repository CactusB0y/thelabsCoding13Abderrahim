@if (session('buttonUpdate'))
    <div class="alert alert-success">
        {{ session('buttonUpdate') }}
    </div>
@endif
<div>
    <div class="row">
        <div class="col-6">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">button</th>
                    <th scope="col">url</th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($navbars as $navbar)
                        <tr>
                            <th scope="row">{{$navbar->id}}</th>
                            <td>{{$navbar->button}}</td>
                            <td>{{$navbar->url}}</td>
                            <td>
                                <a href="navbar/{{$navbar->id}}/edit"><i class="fas fa-edit">edit</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-6">
            
        </div>
    </div>

</div>