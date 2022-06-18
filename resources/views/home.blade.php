<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Home</title>
</head>

<body>



    <section class="hero is-info is-fullheight">

        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div id="navbarMenuHeroA" class="navbar-menu">
                        <div class="navbar-start">
                            <a class="navbar-item {{ Request::path() === '/' ? 'is-active' : '' }}" href="/">
                                Home
                            </a>
                            <a class="navbar-item {{ Request::path() === 'hbo' ? 'is-active' : '' }}" href="/hbo">
                                HBO
                            </a>
                            <div class="navbar-item has-dropdown is-hoverable ">
                                <a class="navbar-link {{ Request::path() === 'profile' ? 'is-active' : '' }}" href="/profile">
                                    Profile
                                </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item {{ Request::path() === 'photos' ? 'is-active' : '' }}"
                                        href="/photos">
                                        Photo's
                                    </a>
                                </div>
                            </div>
                            <a class="navbar-item {{ Request::path() === 'grades' ? 'is-active' : '' }}" href="/grades">
                                Grades
                            </a>
                            <a class="navbar-item {{ Request::path() === 'motivation' ? 'is-active' : '' }}" href="/motivation">
                                Motivation
                            </a>
                            <a class="navbar-item {{ Request::path() === 'profession' ? 'is-active' : '' }}" href="/profession">
                                Profession
                            </a>
                            <a class="navbar-item {{ Request::path() === 'articles' ? 'is-active' : '' }}" href="/articles">
                                Articles
                            </a>
                            <a class="navbar-item {{ Request::path() === 'faq' ? 'is-active' : '' }}" href="/faq">
                                FAQ
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <span class="navbar-item">
                                    <a class="button is-focused">
                                    <span :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </span>
                                    </a>
                                  </span>
                            </form>
                        </div>
                    </div>
            </nav>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <button class="button is-info is-light">
                    <a href="/articles">Article CRUD</a>
                </button>
            </div>
        </div>

    </section>

</body>

</html>
