<header>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="get-page.php?page=index">
                        <img src="/img/Логотип1.png" alt="Логотип">
                    </a>
                </div>
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="burger">
                    <span></span>
                </label>
                <div class="menu">
                    <div class="main"> <a href="{{ route('main-page') }}"> Головна </a> </div>
                    <div class="books"> <a href="{{ route('books-page') }}"> Книги </a> </div>
                    <div class="audio"> <a href="{{ route('audio-page') }}"> Аудіо </a> </div>
                    <div class="top"> <a href="{{ route('list-page') }}"> Підбірка </a></div>
                </div>
                <div class="icons">
                    <div class="account">
                        <a href="{{ route('account') }}"> 
                            <img id="account" src="/img/black-account.png" alt="Аккаунт">
                            <img id="others" src="/img/Акаунт.png" alt="Аккаунт">    
                        </a>
                    </div>
                    <div class="saved">
                        <a href="#">
                            <img id="heart" src="/img/Збережене.png" alt="Збережене">
                            <img id="heart-hover" src="/img/heart-hover.png" alt="Збережене">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>