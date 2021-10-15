<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-logo" alt="modern admin logo"
                             src="{{asset('assets/admin/images/logo/logo.png')}}">
                        <h3 class="brand-text">{{__('header.storename')}}</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                            class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">{{__('header.hello')}}
                  <span
                      class="user-name text-bold-700"> {{auth('admin') -> user() -> name}}</span>
                </span>
                            <span class="avatar avatar-online">
                  <img  style="height: 35px;" src="{{asset('assets/admin/images/avatar.jpg')}}" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{route('edit.profile')}}"><i
                                    class="ft-user"></i> {{__('header.edit')}} </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="ft-power"></i> {{__('header.logout')}}
                                 </a>
                        </div>
                    </li>
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                                                                       aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-ps"></i>{{app()->getLocale()}}<span class="selected-language"></span></a>
                        <div class="dropdown-menu" >



                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <i class="flag-icon flag-icon" >{{ $properties['native'] }}</i>
                                </a>

                                <div class="dropdown-divider"></div>
                            @endforeach

                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Notifications</span>
                                </h6>
                                <span
                                    class="notification-tag badge badge-default badge-danger float-right m-0">1 New</span>
                            </li>
                            <li class="scrollable-container media-list w-100">
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">You have new order!</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit
                                                amet, consectetuer elit.</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">30 minutes ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% Server load</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                                mauris eu risus.</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Five hour ago
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                                dapibus neque.</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Today
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Complete the task</h6>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Last week
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left align-self-center"><i
                                                class="ft-file icon-bg-circle bg-teal"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">Generate monthly report</h6>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Last month
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                                href="javascript:void(0)">Read all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">


                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i>
                            <span class="badge badge-pill badge-default badge-primary badge-default badge-up badge-glow">{{\App\Models\Contact::count()}}</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Messages</span>
                                </h6>

                                <span
                                    class="notification-tag badge badge-default badge-warning float-right m-0">{{\App\Models\Contact::count()}} New</span>
                            </li>
                            <li class="scrollable-container media-list w-100">
                                @foreach(\App\Models\Contact::all() as $contact)
                                <a href="javascript:void(0)">
                                    <div class="media">
                                        <div class="media-left">

                        <span class="avatar avatar-sm avatar-busy rounded-circle">
                          <img src="{{asset('assets/admin/images/portrait/small/avatar-s-2.png')}}" alt="avatar"><i></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="media-heading">{{$contact->f_name . $contact->l_name}}</h6>
                                            <p class="notification-text font-small-3 text-muted">{{$contact->subject}}</p>
                                            <small>
                                                <time class="media-meta text-muted"
                                                      datetime="2015-06-11T18:29:20+08:00">Tuesday
                                                </time>
                                            </small>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </li>
                            <li class="dropdown-menu-footer"></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
