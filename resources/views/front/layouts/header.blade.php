<header>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div class="moboileVeiw">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand m-auto" href="index.php"><img class="w-100"
                                                                             src="{{ asset($setting->logo) }}"
                                                                             alt="{{ asset($setting->logo) }}"></a>
                    </li>
                    <li class="nav-item">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                                aria-expanded="false" aria-label="Toggle navigation">
                <span>
                  <i class="fas fa-bars"></i>
                </span>
                        </button>
                    </li>
                </ul>
            </div>
            <li class="nav-item footerStartAfundly">
                <a class="nav-link StartAfundly" href="javascript:void(0)">Start Fundraising</a>
            </li>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav m-auto">
                    <a class="navbar-brand m-auto" href="index.php"><img class="w-100"
                                                                         src="{{ asset($setting->logo) }}"
                                                                         alt="{{ asset($setting->logo) }}"></a>
                    <li class="nav-item searchLi">
                        <a class="nav-link" href="javascript:void(0)"><i class="fas fa-search"></i> Search</a>
                    </li>
                </ul>

                <li class="nav-item m-auto">
                    <a class="startedBtn mt-0 mb-0 text-light" href="https://secure.myvanco.com/L-Z2QS/home">Give
                        now</a>
                </li>

                <ul class="navbar-nav m-auto">
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle"
                           data-toggle="dropdown">Discover</a>
                        <ul class="dropdown-menu shadow">
                            <li><a class="nav-link" href="discover.php">Fundraisers</a></li>
                            <li><a class="nav-link" href="success-stories.php">Success Stories</a></li>
                            <li><a class="nav-link" href="coronavirus-fundraising.php">Coronavirus fundraising</a></li>
                            <li><a class="nav-link" href="pricing.php">Pricing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">Fundraise
                            for</a>
                        <ul class="dropdown-menu shadow">
                            @foreach($categories as $category)
                                <li><a class="nav-link" href="{{ route('fund',[$category->id]) }}">{{ $category->name }}</a></li>
                            @endforeach
                            <hr class="m-0">
                            <li><a class="nav-link seeAll pb-0" href="see-all.php">See all</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="how-it-works.php">How it works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sign-in.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link StartAfundly" href="becomemember.php">Start Fundraising</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
