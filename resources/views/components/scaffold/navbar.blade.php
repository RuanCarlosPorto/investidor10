<div class='navbar'>
    <div class="logo"><a href="{{ route('home') }}">LOGO</a></div>
    <div class="search">
        <a href="{{ route('news.create.view') }}">Cadastrar Noticias</a>
        <a href="{{ route('about') }}">About</a>
        <form action="{{ route('home') }}" method="GET">
            <x-forms.search-input name="search" :value="$_GET['search']"/>
        </form>
    </div>
</div>

<style>
    .navbar {
        background-color: grey;
        width: 100%;
        padding: 1rem;
        color: white;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    .navbar a {
        text-transform: uppercase;
        margin-right: 2rem;
    }

    .navbar .logo {
        font-weight: bold;
        font-size: 23px
    }

    .navbar .search {
        display: flex;
        align-items: center;
    }
</style>