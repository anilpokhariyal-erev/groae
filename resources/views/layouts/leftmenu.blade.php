<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu metismenu">
            @foreach($menus as $menu)
            <li class="app-sidebar__heading">{{$menu->title}}</li>

            @foreach($menu->children as $child)
                @if(auth()->user()->hasRole('superadmin') || auth()->user()->can($child->route))
                    <li>
                        <a href="{{route($child->route)}}" class="{{ Route::is($child->route) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon {{$child->icon}}"></i>
                            {{$child->title}}

                            @if($child->route=='contact.index') 
                            <em title="Unread">
                                ({{(new App\Http\Controllers\Admin\ContactUsController())->get_unread_count()}})
                            </em>
                            @endif


                            @if($child->route=='package-bookings.index') 
                            <em title="Quote Requested">
                                ({{(new App\Http\Controllers\Admin\PackageBookingController())->get_requested_quote_count()}})
                            </em>
                            @endif

                        </a>
                    </li>
                @endif
            @endforeach

            @endforeach

        </ul>
    </div>
</div>