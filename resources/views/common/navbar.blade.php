<header>
    <!--Navigatie Menu-->
    <nav>
        <ul>
            <li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/"><img src="/resources/Home-icon.png" width="27px" height="27px" style="color: white" alt="home"></a></li>
            <li class="{{ Request::path() === 'profile' ? 'active' : '' }}"><a href="/profile">Profile</a></li>
            <li class="{{ Request::path() === 'portfolio' ? 'active' : '' }}"><a href="/portfolio">Portfolio</a></li>
            <li class="{{ Request::path() === 'dashboard' ? 'active' : '' }}"><a href="/dashboard">Dashboard</a></li>
            <li class="{{ Request::path() === 'index' ? 'active' : '' }}"><a href="{{ route('articles.index') }}">Blog</a></li>
            <li class="{{ Request::path() === 'faqs' ? 'active' : '' }}"><a href="{{ route('faqs.index') }}">FAQ</a>
            </li>
                @if(Auth::check())
                    <a href="{{ route('logout') }}" class="logout"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Uitloggen</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                @elseif(!Auth::check())
                    <li><a class="{{ Request::path() === 'login' ? 'active' : '' }}" href="/login">Login</a></li>
                @endif
        </ul>
    </nav>
</header>
