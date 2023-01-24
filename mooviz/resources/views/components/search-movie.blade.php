<!-- Here is the result of your research. 
You can see that the results are displayed in a list.
There is a button to return to the home page. -->
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
    <button class="w-fit mx-auto text-xl px-6 py-4">
        <a href="/">
            Home page
        </a>
    </button>
</ul>