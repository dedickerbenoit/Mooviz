<!-- Here is the result of your research. 
You can see that the results are displayed in a list.
There is a button to return to the home page. -->
<div class="col-span-5 mx-4 ">
    <h2 class="text-2xl font-bold text-gray-400">Search Results</h2>
    <div class="mx-auto grid grid-cols-2 px-20 border-2 rounded-lg w-1/2 py-2 shadow-2xl">
        @foreach($results as $result)
        <div class="space-y-4">
            <p> Title: {{ $result->title }} </p>
            <p> Overview: {{ $result->overview }} </p>
            <p> Release date: {{ $result->release_date }} </p>
            <p> Vote average: {{ $result->vote_average }} </p>
            <p> Vote count: {{ $result->vote_count }} </p>
            <button class="w-fit l-1 py-2 px-4 rounded-lg border hover:border-red-400">
                <a href="/">
                    Home page
                </a>
            </button>
        </div>
        <div>
            <img src="{{ $result->poster_path }}" alt=" affiche du film" class="h-full rounded-lg" />
        </div>
        @endforeach
    </div>
</div>