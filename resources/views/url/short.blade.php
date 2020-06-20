<h1>Short URL</h1>

<form action="{{ url('/short')}}" method="post">

    {{ csrf_field() }}    

    <input type="text" name="url" id="url">

    <br>

    <button type="submit">Short URL</button>

    
</form>