<header>
            <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                DashBoard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here"/>
            </div>
            <div class="user-wrapper">
                <img src="{{asset('profile/'.session('profile'))}}" width="40px" height="40px" alt="">
                <div>
                    <h4>{{session('user')}}</h4>
                    <small>{{session('role')}}</small>
                </div>
            </div>
        </header>