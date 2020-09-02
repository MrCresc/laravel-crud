<h1>Informazioni</h1>

<hr>
  <ul>
    <li><h3>Titolo: {{$movie->title}}</h3></li>
    <li><h3>Descrizione: {{$movie->description}}</h3></li>
    <li><h3>Anno: {{$movie->year}}</h3></li>
    <li><h3>Voto: {{$movie->rating}}</h3></li>
  </ul>
<hr>

<a href="{{route('movies.index')}}">Torna indietro</a>
