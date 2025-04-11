<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">PHP Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="{{ url('/') }}" class="nav-link active" aria-current="page">Домой</a>
                <a href="{{ route('about') }}" class="nav-link">
                    О блоге</a>
                <a href="{{  route('articles.index') }}" class="nav-link">
                    Статьи</a>
            </div>
        </div>
    </div>
</nav>