<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
        </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div>
           
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{ Auth::user()->name }}
                            </div>
                            <div class="widget-subheading">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                        <div class="widget-content-left" style="margin-left: 30px">

                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="{{ asset('/architectui-html-pro/assets/images/avatars/14.jpg') }}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-2" style="background-image: url('../assets/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content text-left">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle" src="{{ asset('/architectui-html-pro/assets/images/avatars/1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">{{ Auth::user()->name }}
                                                            </div>
                                                            <div class="widget-subheading opacity-8">{{ Auth::user()->email }}
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right mr-2">
                                                            <button class="btn-pill btn-shadow btn-shine btn btn-focus"><a href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                                                @csrf
                                                            </form>
                                                        </button> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-xs" style="height: 200px;">
                                        <div class="scrollbar-container ps">
                                            @foreach($value as $key => $val)
                                            <ul class="nav flex-column">
                                                <li class="nav-item-header nav-item">Activity
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Upvote
                                                    <div class="ml-auto badge badge-pill badge-info">{{$val['upvote']}}
                                                    </div>
                                                </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Downvote
                                                    <div class="ml-auto badge badge-pill badge-info">{{$val['downvote']}}
                                                    </div>
                                                </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Favorite
                                                    <div class="ml-auto badge badge-pill badge-info">{{$val['favorite']}}
                                                    </div>
                                                </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Reputation
                                                    <div class="ml-auto badge badge-pill badge-warning">{{$val['reputasi']}}
                                                    </div>
                                                </a>
                                                </li>
                                                
                                            </ul>
                                            @endforeach
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider mb-0 nav-item"></li>
                                    </ul>
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <a href="{{ route('feed') }}" class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                <i class="pe-7s-notebook icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                View Question
                                            </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="{{ route('questioncreate') }}" class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                <i class="pe-7s-pen icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                <b>Create Question</b>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item">
                                        </li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <a href="/"><button class="btn-wide btn btn-primary btn-sm">
                                            Dashboard
                                        </button></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="widget-content-right header-user-info ml-3">
                            <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                            <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                        </button>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="header-btn-lg">
                <button type="button" class="hamburger hamburger--elastic open-right-drawer">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            </div> -->
        </div>
    </div>
</div>