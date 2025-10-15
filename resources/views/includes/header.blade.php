<nav class="navbar navbar-expand-lg sticky-top bg-opacity-75"
    style="background-color: rgba(255, 255, 255, 0.7); backdrop-filter: blur(5px);  box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <div class="container pt-2 pb-2">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-2 me-0" href="{{ route('main') }}"><img src="{{asset('images/logo_cat.png')}}"
                    width="75" alt="Логотип"></a>
            <ul class="navbar-nav col-lg-7 justify-content-lg-center">
                <li class="nav-item">
                    <h3><a class="nav-link active mynew" aria-current="page" style="color: red"
                            href="{{ route('main') }}">Главная</a></h3>
                </li>
                <li class="nav-item">
                    <h3><a class="nav-link active mynew" aria-current="page" style="color: orange" href="#">О нас</a>
                    </h3>
                </li>
                <li class="nav-item">
                    <h3><a class="nav-link active mynew" aria-current="page" style="color: green" href="#">Книги</a>
                    </h3>
                </li>
                <li class="nav-item">
                    <h3><a class="nav-link active mynew" aria-current="page" style="color: #9a5096" href="#">Мы в
                            соцсетях</a></h3>
                </li>
                <li class="nav-item">
                    <h3><a class="nav-link active mynew" aria-current="page" style="color: black"
                            href="{{ route('test') }}">Test</a></h3>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                            <a class="dropdown-item" href="#">Another action</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                @if(isset(auth()->user()->id))
                <a class="textdecornone" href="{{ route('dashboard') }}"><i class="bi bi-cart-plus-fill fs-4"></i> {{auth()->user()->name}}</a>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="btn btn-link btn-sm" type="submit"><i class="bi bi-box-arrow-right fs-5"></i></button>
                </form>
                @else
                <button class="btn btn-danger mybtn">Оставить заявку</button>
                <a href="{{ route('login-main') }}" class="btn btn-primary" role="button">Войти</a>
                @endif

            </div>
        </div>
    </div>
</nav>