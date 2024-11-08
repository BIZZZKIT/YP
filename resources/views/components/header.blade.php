<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Нарушениям.нет</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('statementpage')}}">Сформировать заявление</a>
                    </li>
                </ul>
                @auth()
                    <form class="d-flex" action="{{route('logout')}}">
                        <button class="btn btn-danger" type="submit">Выйти</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
</div>
