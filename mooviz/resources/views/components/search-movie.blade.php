<h2>Search Results</h2>
<ul>
    @foreach($results as $result)
        <li>{{ $result->title }}</li>
        <li>{{ $result->overview }}</li>
        <li>{{ $result->release_date }}</li>
        <li>{{ $result->vote_average }}</li>
        <li>{{ $result->vote_count }}</li>
        <img src="{{ $result->poster_path }}" alt=" affiche du film" />
    @endforeach
</ul>