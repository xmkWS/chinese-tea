<header class="border-b border-white border-opacity-25">
    <div class="container py-5 flex flex-wrap items-center justify-between gap-7">
        <div class="flex gap-10">
            <a href="{{ route('index.index') }}" class="text-2xl text-white">Chinese Tea.</a>
        <ul class="flex flex-wrap items-center gap-14">
            <li><a class="h-5 hover:border-b border-white pb-2 uppercase" href="{{ route('index.index') }}">Main Page</a></li>
            <li><a class="h-5 hover:border-b border-white pb-2 uppercase" href="{{ route('index.catalog') }}">Catalog</a></li>
            <li><a class="h-5 hover:border-b border-white pb-2 uppercase" href="#">About Us</a></li>
            
            @if(auth()->user() && auth()->user()->role_id === 2)
            <li><a class="h-5 hover:border-b border-white pb-2" href="{{ route('index.admin')}}">Admin Panel</a></li>
            @endif
        </ul>
        </div>
        <div class="flex flex-wrap items-center gap-7">
            @auth
            <form action="{{ route('auth.logout')}}" method="post">
            @csrf
            <button type="submit" class="button">Exit</button>
            </form>
            @endauth
            
            @guest
                <a href="{{ route('auth.loginPage') }}" class="button">Sign In</a>
                <a href="{{ route('auth.registerPage') }}" class="button-fill">Sign Up</a>
            @endguest
        </div>
    </div>
</header>
