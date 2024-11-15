<ul>
    @foreach ($books as $book)
        <li>TITOLO: {{ $book->name }} - ANNO: {{ $book->years }}</li>
    @endforeach
</ul>
