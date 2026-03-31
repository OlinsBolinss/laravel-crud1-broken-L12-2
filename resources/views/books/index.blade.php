<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($books as $books)
        <li>
            <h2>{{ $books->title }}</h2>
            <div>
                <a href="/books/{{ $books->id }}">Show</a>
                <a href="/books/{{ $books->id }}/edit">Edit</a>
            </div>
        </li>
    @endforeach
</ul> 