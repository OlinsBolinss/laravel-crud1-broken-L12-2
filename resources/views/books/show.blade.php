<form action="/books/{{ $singleBook->id }}/destroy" method="post">
    @csrf
    @method('delete')
     
     
    <ul> 
<h2>{{ title }}</h2>
<h3>{{ author }}</h3>
<p>{{ released_at }}</p>
<input type="submit" value="Dzēst">

</ul>
<a href="/books">All books</a>
   
</form>
