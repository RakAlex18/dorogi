<!--ВЕРХНЯЯ НАВИГАЦИОННАЯ ПАНЕЛЬ-->
<nav id='menu' class="menu navbar navbar-expand-lg">
    <a class="navbar-brand" href="../index.php" style="color: #ef6c00">Avtodorogi.by</a> <!--изменил цвет брэнда-->
    <!--изменил цвет тогглера-->
    <button style="background-color: #ef6c00" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('news.page') }}">Новости <span class="sr-only">(current)</span></a>
            </li>
            @foreach($category as $cat)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-toggle-split" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $cat->title }}
                    </a>
                    @if($cat->sub_categories)
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($cat->sub_categories as $subcat)
                                @if($subcat->title !='Проектирование')
                                    <a class="dropdown-item" href="#">{{$subcat->title}}</a>
                                @else
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">{{$subcat->title}}</a>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
        <form action="../search.php" method="post" class="search form-inline my-2 my-lg-0">
            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Поиск..." aria-label="Search">
            <button name="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
        </form>
    </div>
</nav>