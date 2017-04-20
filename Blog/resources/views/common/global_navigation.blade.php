<nav class="nav__global">
    <ul>
        <li class="nav__link"><a href="{{ route('about') }}" class="nav__link_text">About</a></li>
        <li class="nav__link"><a href="{{ route('posts.index') }}" class="nav__link_text">Post</a></li>
        <li class="nav__link"><a href="{{ route('photo') }}" class="nav__link_text">Photo</a></li>
        <li class="nav__link"><a href="{{ route('users') }}" class="nav__link_text">Traveler</a></li>
        <!--
            .nav__login_item--on
            .nav__login_item--off
        -->
        @if (Auth::check())
        <li class="nav__link nav__login_item--off">
            <form action="{{ route('logout') }}" method="post">
                {{ csrf_field() }}
                <button type="submit" class="button__login_text nav__link_text">Logout</button>
            </form>
        </li>
        <li class="nav__link link__user">
            <a href="{{ route('users.show', ['id'=>Auth::user()->id]) }}" class="nav__link_user" style="background-image:url('{{ Storage::url(Auth::user()->profile_image) }}');"></a>
        </li>
        @else
        <li class="nav__link nav__login_item--on">
            <button type="button" class="button__login_text nav__link_text">Login</button>
            <div id="form__login">
                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <label for="user_id">아이디</label>
                    <input type="email" id="user_id" class="field field__id" placeholder="아이디를 입력해 주세요." name="email" value="{{ old('email') }}" required autofocus/>

                    <label for="user_password">비밀번호</label>
                    <input type="password" id="user_password" class="field field__password" placeholder="패스워드를 입력해 주세요." name="password" required/>
                    <button type="submit" class="button__login">LOGIN</button>
                </form>
            </div>
        </li>
        <li class="nav__link"><a href="{{ route('register') }}" class="nav__link_text">register</a></li>
        @endif
    </ul>
</nav>
