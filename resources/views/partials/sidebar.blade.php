<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    <div class="sidebar-module">
        <h4>Last 5 movies</h4>
        <ol class="list-unstyled">
            @foreach($movies as $movie)
                <li>
                    <a href="#">
                        {{ $movie->title }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>
</div><!-- /.col-sm-3 .offset-sm-1 .blog-sidebar -->