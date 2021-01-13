<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">texte</th>
            <th scope="col">src</th>
            <th scope="col">auteur</th>
            <th scope="col">tag</th>
            <th scope="col">categorie</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                @if ($article->confirmed == false)
                    <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->titre}}</td>
                        <td> {{Str::limit($article->texte, 60, '...') }}</td>
                        <td><img height="50px" src="{{asset('img/blog/'.$article->src)}}" alt=""></td>
                        <td>{{$article->users->name}} {{$article->users->prenom}}</td>
                        <td>
                            @foreach ($article->tags as $tags)
                                <p>{{$tags->tag}}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($article->categories as $cat)
                                <p>{{$cat->categorie}}</p>
                            @endforeach
                        </td>
                        <td>
                            <form action="/validation/{{$article->id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary" ><i class="fas fa-check"></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="/article/{{$article->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fas fa-times"></i></button>
                            </form>
                        </td>
                    </tr>  
                @endif
            @endforeach
        </tbody>
      </table>
</div>