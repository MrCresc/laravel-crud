<h1>Ciao, qui di seguito troverai i film presenti nel DB</h1>
<ul>
  @foreach ($movies as $movie)
    <hr>
    <li><h3>Titolo: {{$movie->title}}</h3></li>
    {{-- <li><h3>Descrizione: {{$movie->description}}</h3></li>
    <li><h3>Anno: {{$movie->year}}</h3></li>
    <li><h3>Voto: {{$movie->rating}}</h3></li> --}}
    <a href="{{route('movies.index')}}/{{$movie->id}}">Vai alle info</a>
    <hr>
  @endforeach
</ul>
