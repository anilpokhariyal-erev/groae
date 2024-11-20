<div class="profileSideBar">
    <ul class="sidebarWrapp">
        <li class="sidebarInnrTxt {{ Request::is('my_profile') ? 'activeBar' : '' }}" id="profile">
            <a href="{{ route('customer.profile.view') }}">
                <img src="{{ secure_asset('images/profile-icon.png') }}" alt="">Profile</a>
        </li>
        <li class="sidebarInnrTxt {{ Request::is('my_booking_requests') ? 'activeBar2' : '' }}" id="business">
            <a href="{{ route('customer.my_booking_requests.view') }}">
                <img src="{{ secure_asset('images/license-icon.png') }}" alt="">My Booking Requests
                {!! $pending_detail_count + $pending_document_count > 0
                    ? '<p class="messageCountTxt">' . ($pending_detail_count + $pending_document_count) . '</p>'
                    : '' !!}
            </a>
        </li>
        <li class="sidebarInnrTxt {{ Request::is('my_details') ? 'activeBar2' : '' }}" id="details">
            <a href="{{ route('customer.detail.view') }}">
                <img src="{{ secure_asset('images/Personal-Info.svg') }}" class="personalImage" alt="">Personal
                Informations
                {!! $pending_detail_count > 0 ? '<p class="messageCountTxt">' . $pending_detail_count . '</p>' : '' !!}
            </a>
        </li>
        <li class="sidebarInnrTxt {{ Request::is('my_uploads') ? 'activeBar2' : '' }}" id="uploads">
            <a href="{{ route('customer.upload.view') }}">
                <img src="{{ secure_asset('images/upload_arrow.png') }}" alt="">Uploads: General documents
                {!! $pending_document_count > 0 ? '<p class="messageCountTxt">' . $pending_document_count . '</p>' : '' !!}
            </a>
        </li>
        <li class="sidebarInnrTxt {{ Request::is('my_transactions') ? 'activeBar2' : '' }}" id="transaction">
            <a href="{{ route('customer.my_transactions.view') }}">
                <img src="{{ secure_asset('images/transaction-icon.png') }}" alt="">Transactions</a>
        </li>
        <li class="sidebarInnrTxt {{ Request::is('my_downloads') ? 'activeBar2' : '' }}" id="download">
            <a href="{{ route('customer.my_downloads.view') }}">
                <img src="{{ secure_asset('images/download-icon.png') }}" alt="">Downloads</a>
        </li>
        <li class="sidebarInnrTxt {{ Request::is('my_settings') ? 'activeBar3' : '' }}" id="setting">
            <a href="{{ route('customer.profile.settings') }}">
                <img src="{{ secure_asset('images/cogwheel-icon.png') }}" alt="">Setting</a>
        </li>
    </ul>
</div>
