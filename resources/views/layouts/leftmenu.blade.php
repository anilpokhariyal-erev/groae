<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu metismenu">
            <li class="app-sidebar__heading">Modules</li>

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('dashboard'))
                <li>
                    <a href="{{route('dashboard')}}" class="{{ Route::is('dashboard') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-gauge"></i>
                        Dashboard
                    </a>
                </li>
            @endif


            <li class="{{ $has_role_or_permission('view-offers', 'ba_display_none') }}">
                <a href="{{route('offer.index')}}" class="{{ Route::is('offer.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Offers
                </a>
            </li>

            <li class="{{ $has_role_or_permission('view-blogs', 'ba_display_none') }}">
                <a href="{{route('blog.index')}}" class="{{ Route::is('blog.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Blogs
                </a>
            </li>

            <li class="{{ $has_role_or_permission('view-category', 'ba_display_none') }}">
                <a href="{{route('category.index')}}" class="{{ Route::is('category.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Categories
                </a>
            </li>

            <li class="{{ $has_role_or_permission('view-static-pages', 'ba_display_none') }}">
                <a href="{{route('static-page.index')}}" class="{{ Route::is('static-page.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Static Content
                </a>
            </li>


            <li class="{{ $has_role_or_permission('view-contact', 'ba_display_none') }}">
                <a href="{{route('contact.index')}}" class="{{ Route::is('contact.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                     Manage Contact Us <em title="Unread">({{(new App\Http\Controllers\Admin\ContactUsController())->get_unread_count()}})</em>
                </a>
            </li>

            @if(
                auth()->user()->hasRole('superadmin') ||
                auth()->user()->can('view-customers') ||
                auth()->user()->can('view-customers-admin')
            )
                <li class="app-sidebar__heading">Customers</li>
            @endif

            <li class="{{ $has_role_or_permission('view-customers', 'ba_display_none') }}">
                <a href="{{route('customer.index')}}" class="{{ Route::is('customer.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Customers
                </a>
            </li>
                        

            <li class="{{ $has_role_or_permission('view-process-document', 'ba_display_none') }}">
                <a href="{{route('package-bookings.index')}}" class="{{ Route::is('package-bookings.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Package Booking Requests 
                    <em title="Quote Requested">({{(new App\Http\Controllers\Admin\PackageBookingController())->get_requested_quote_count()}})</em>
                </a>
            </li>

            <li>
                <a href="{{route('transaction.index')}}" class="{{ Route::is('transaction.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Transactions
                </a>
            </li>



            @if(
                auth()->user()->hasRole('superadmin') || 
                auth()->user()->can('view-freezones') ||
                auth()->user()->can('view-freezone-admin') 
            )
                <li class="app-sidebar__heading">Freezone</li>
            @endif

           
            <!-- @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-freezone-admin'))
                <li>
                    <a href="{{route('freezone-users.index')}}" class="{{ Route::is('freezone-users.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-users"></i>
                        Manage Freezones Admin
                    </a>
                </li>
            @endif -->

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-freezones'))
                <li>
                    <a href="{{route('freezones.index')}}" class="{{ Route::is('freezones.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-users"></i>
                        Manage Freezones
                    </a>
                </li>
                <li>
                    <a href="{{route('freezone-page.index')}}" class="{{ Route::is('freezone-page.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-users"></i>
                        Manage Freezone Pages
                    </a>
                </li>
            @endif

            <!--<li class="{{ $has_role_or_permission('view-process-document', 'ba_display_none') }}">
                <a href="{{route('freezone-process-documents.index')}}" class="{{ Route::is('freezone-process-documents.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Freezones Registration Process & Documents
                </a>
            </li> -->

            

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-activity-groups'))
                <li>
                    <a href="{{route('activity-group.index')}}" class="{{ Route::is('activity-group.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-folder-open"></i>
                        Manage Activity Groups
                    </a>
                </li>
            @endif

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-activities'))
                <li>
                    <a href="{{route('activity.index')}}" class="{{ Route::is('activity.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-clipboard-list"></i>
                        Manage Activities
                    </a>
                </li>
            @endif

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-visa-attribute-headers'))
                <li>
                    <a href="{{ route('visa-package-attribute-headers.index') }}" class="{{ Route::is('visa-package-attribute-headers.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-passport"></i>
                        Manage Visa Package Attribute Headers
                    </a>
                </li>
            @endif


            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-visa-types'))
                <li>
                    <a href="{{ route('visa-package-attributes.index') }}" class="{{ Route::is('visa-package-attributes.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-passport"></i>
                        Manage Visa Package Attributes
                    </a>
                </li>
            @endif

            <li>
                <a href="{{route('license.index')}}" class="{{ Route::is('license.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage license
                </a>
            </li>



            @if(
                auth()->user()->hasRole('superadmin') ||
                auth()->user()->can('view-attributes') ||
                auth()->user()->can('view-attributes-admin')
            )
                <li class="app-sidebar__heading">Freezone Packages</li>
            @endif

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('manage-pacakges'))
            <li>
                <a href="{{route('package.index')}}" class="{{ Route::is('package.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage packages
                </a>
            </li>
            @endif
            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-attributes'))
                <li>
                    <a href="{{route('attributes.index')}}" class="{{ Route::is('attributes.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-users"></i>
                        Manage Package Attributes
                    </a>
                </li>
            @endif

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-attribute-options'))
                <li>
                    <a href="{{ route('admin.attribute-options.index') }}" class="{{ Route::is('admin.attribute-options.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-tags"></i>
                        Manage Package Attribute Options
                    </a>
                </li>
            @endif

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-fixed-fees'))
                <li>
                    <a href="{{ route('fixed-fee.index') }}" class="{{ Route::is('fixed-fee.index') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-money-bill-wave"></i>
                        Fixed Fees
                    </a>
                </li>
            @endif


            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-attribute-options'))
                <li>
                    <a href="{{ route('admin.ai_search_filters') }}" class="{{ Route::is('admin.ai_search_filters') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-filter"></i>
                        AI Tool Search Filters
                    </a>
                </li>
            @endif

            @if(
                auth()->user()->hasRole('superadmin') || 
                auth()->user()->can('view-subadmins') ||
                auth()->user()->can('view-roles') 
            )
                <li class="app-sidebar__heading">Superadmin Controls</li>
            @endif

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-subadmins'))
                <li>
                    <a href="{{route('subadmin-users.index')}}" class="{{ Route::is('subadmin-users.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-users"></i>
                        Subadmin
                    </a>
                </li>
            @endif

            @if(auth()->user()->hasRole('superadmin') || auth()->user()->can('view-roles'))
                <li>
                    <a href="{{route('roles.index')}}" class="{{ Route::is('roles.*') ? 'mm-active' : '' }}">
                        <i class="metismenu-icon fa-solid fa-unlock-keyhole"></i>
                        Roles
                    </a>
                </li>
            @endif
            @if(auth()->user()->hasRole('superadmin'))
            <li class="app-sidebar__heading">System Setup </li>

            <li class="{{ $has_role_or_permission('view-setting', 'ba_display_none') }}">
                <a href="{{route('numbers.view')}}" class="{{ Route::is('numbers.view.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Groae Numbers
                </a>
            </li>

                @if(Auth::user()->setting == 1)
                    <li>
                        <a href="{{ route('setting.view') }}" class="{{ Route::is('setting-view.*') ? 'mm-active' : '' }}">
                            <i class="metismenu-icon fa-solid fa-users"></i>
                            Setting
                        </a>
                    </li>
                @endif

            @endif
            <li class="{{ $has_role_or_permission('manage-currencies', 'ba_display_none') }}">
                <a href="{{route('currency.view')}}" class="{{ Route::is('currency.*') ? 'mm-active' : '' }}">
                    <i class="metismenu-icon fa-solid fa-users"></i>
                    Manage Currency
                </a>
            </li>

        </ul>
    </div>
</div>