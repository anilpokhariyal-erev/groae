<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu metismenu">
            @foreach($menus as $menu)
                <li class="app-sidebar__heading">{{$menu->title}}</li>

                @foreach($menu->children as $child)
                    @php
                        // Collect all permission names
                        $permissionNames = $child->permissions->pluck('name');
                        // Check if user has any of them
                        $canAccess = auth()->user()->hasRole('superadmin') || auth()->user()->hasAnyPermission($permissionNames->toArray());
                    @endphp

                    @if($canAccess)
                        <li>
                            <a href="{{ route($child->route) }}" class="{{ Route::is($child->route) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon {{ $child->icon }}"></i>
                                {{ $child->title }}

                                @if($child->route == 'contact.index') 
                                    <em title="Unread">
                                        ({{ (new App\Http\Controllers\Admin\ContactUsController())->get_unread_count() }})
                                    </em>
                                @endif

                                @if($child->route == 'package-bookings.index') 
                                    <em title="Quote Requested">
                                        ({{ (new App\Http\Controllers\Admin\PackageBookingController())->get_requested_quote_count() }})
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
