<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/blogHoussain/public">Houssain</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::is('/') ? 'active' : ""}}"><a class="nav-link" href="/blogHoussain/public">Home</a></li>
            <li class="nav-item {{Request::is('article') ? 'active' : ""}}"><a class="nav-link" href="article">Articles</a></li>
            <li class="nav-item {{Request::is('gallerie') ? 'active' : ""}}"><a class="nav-link" href="gallerie">Gallerie</a></li>
            <li class="nav-item {{Request::is('contact') ? 'active' : ""}}"><a class="nav-link" href="contact">Contact</a></li>
        </ul>
    </div>
</nav>