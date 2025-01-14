<div>
    <input type="text" wire:model.live="search" >
    <button class="btn btn-success" wire:click="invert">
        @if($order == 'asc') decrescente @else crescente @endif
    </button>
    <table class="table border table-dark table-striped shadow">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titolo</th>
            <th scope="col">sottotitolo</th>
            <th scope="col">contenuto</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->subtitle}}</td>
                    <td>{{$article->content}}</td>
                    <td>
                        <button wire:click="deleteArticle({{$article->id}})" class="btn btn-danger">Elimina</button>
                        <a href="{{route('article.edit', $article->id)}}" class="btn btn-primary">Modifica</a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
      </table>
</div>
