<x-website-layout>
    <section class="center-section">
        <div class="blogDetailContainer">
            <div class="container">
                <!-- <img src='{{ Storage::url($page_data->image) }}'  alt="">  -->
                <h1 class="detailPageHeading">{{ ucwords($page_data->page_name) }}</h1>
                <div class="detailPageData">
                    {!! $page_data->description !!}
                </div>
            </div>
        </div>
        <div class="compareIconWrapper">
            <a href="{{ route('contact-us.index') }}">
                <h3>Book Consultation</h3>
            </a>
        </div>
    </section>
</x-website-layout>
