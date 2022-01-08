<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <img class="card-img-top" src="images/logo.jpg" style="width:50px;height:50px" >&nbsp&nbsp
        <a class="navbar-brand" href="/">時尚拿著走</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <f class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">產品</a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item" href="">一般水壺</a></li>--}}
{{--                        <li><a class="dropdown-item" href="">運動水壺</a></li>--}}
{{--                        <li><a class="dropdown-item" href="">保溫杯</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <li class="nav-item"><a class="nav-link "  href="{{ route('product') }}">產品</a></li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    @if(Auth::user()->status == '1')
                        <script>alert('管理者登入成功');window.location.href='{{ route('admin.dashboard.index') }}'</script>
                    @else

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('user.logout') }}">登出</a></li>
                                </ul>
                            </li>
                    @endif
                @else
                             <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登入</a></li>
                             @if (Route::has('register'))
                                 <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">註冊</a></li>
                             @endif

                @endif



            </ul>
        </div>
    </div>
</nav>
