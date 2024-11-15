<x-website-layout>
    <!-- banner -->
    @section('js-imports')
        <script src="{{ secure_asset('js/website/home.js') }}" crossorigin="anonymous"></script>
    @endsection
    @section('js-owl-imports')
        <script src="{{ secure_asset('js/website/owl.carousel.min.js') }}" crossorigin="anonymous"></script>
    @endsection
    <section>
        <div class="banner">
            <img class="bannrImg" src="{{ asset('images/709[Converted]-1.png') }}" alt="">
            <div class="bannerHeading">
                <h2 class="headingTxt" id='greeting'>GROAE, for all your business needs</h2>
                {{-- <p class="paragraphTxt" id='greeting'>Set up of your business is just a few steps away</p> --}}
                <div class="bannerBtns">
                    <a class="bookConsBtn" href="{{ route('contact-us.index') }}">Book a Consultation</a>
                </div>
            </div>
            <div class="bannerLayer">
                <div class="innrLayer">
                    <img src="{{ secure_asset('images/bot1.png') }}" alt="">
                    <h3>AI search to help you find the best Freezone.</h3>
                </div>
                @include('frontend.components.ai_search_filters', ['attributes' => $attributes])
            </div>
        </div>

    </section>

    <!-- Trending Freezones  -->
    <section>
        <div class="trendingContainer">
            <div class="topHeading">
                <h2 class="trendTxt">Trending Freezones</h2>
                <p class="trendDetails">Look up the Freezones that meets your needs </p>
            </div>
            <div class="container">
                <div class="trendingBlog">
                    @foreach ($freezones as $item)
                        @if($item->trending)
                            <div class="blogLayer">
                                <div class="topLayer">
                                    <img src='{{ $item->logo ? Storage::url($item->logo) : asset('images/placeholder.png') }}'
                                        alt="">
                                </div>
                                <div class="bottomLayer">
                                    <a target="_blank" href="{{ route('freezone-detail', ['slug' => $item->slug]) }}"
                                    class="viewInnrTxt"><h3 class="blogHeading">{{ $item->name }}</h3></a>
                                    <p class="blogDetail">{{ $item->about }}</p>
                                    <button class="viewDetailBtn"><a target="_blank"
                                            href="{{ route('freezone-detail', ['slug' => $item->slug]) }}"
                                            class="viewInnrTxt">View Details
                                            <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                        </a>
                                    </button>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="commonViewMoreBtn">
                    <button class="viwBtn"><a href="{{ route('trending-freezone') }}" class="viewMoreTxt">View
                            More</a></button>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.offers_home')

    <!-- Business Cost?  -->
    <section>
        <div class="businessCost">
            <img class="graphImg" src="{{ asset('images/Mask group.png') }}" alt="">
            <div class="costAnalysisLeft">
                <img class="illustrationImg" src="{{ asset('images/Illustration.png') }}" alt="">
            </div>
            <div class="costAnalysisRight">
                <h2 class="bHeading">How much your Business Cost?</h2>
                <p class="bTitle">Use the GROAE Cost Calculator to find out the cost of your business setup.
                    It’s the number one question we get asked. </p>
                <h4 class="bInnrTitle">Find out in an instant.</h4>
                <button class="CostBtn"> <a href="/calculate-licensecosts">Calculate Cost</a></button>
            </div>
        </div>
    </section>

    <!-- Article & Blogs  -->
    @if ($blogs)
        <section>
            <div class="trendingContainer">
                <div class="topHeading">
                    <h2 class="trendTxt">Article & Blogs</h2>
                    <p class="trendDetails">Exploring trends and insights with our articles & blogs </p>
                </div>
                <div class="container">
                    <div class="trendingBlog">
                        @foreach ($blogs as $blog_val)
                            <div class="blogLayer">
                                <div class="topLayer">
                                    <img src='{{ $blog_val->image ? Storage::url($blog_val->image) : asset('images/placeholder.png') }}'
                                        alt="">
                                </div>
                                <div class="bottomLayer">
                                    <h3 class="blogHeading">{{ ucwords($blog_val->title) }}</h3>
                                    <p class="blogDetail">{!! Str::limit($blog_val->short_description, 130, ' ...') !!} </p>
                                    <button class="viewDetailBtn"><a
                                            href="{{ route('blog-detail', $blog_val->slug) }}"
                                            class="viewInnrTxt">Read More
                                            <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                        </a>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="commonViewMoreBtn">
                        <button class="viwBtn"><a href="{{ route('article-blogs') }}" class="viewMoreTxt">View
                                More</a></button>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- GROAE In Numbers -->
    <section>
        <div class="container">
            <div class="groaeNumbers">
                <img class="countImg" src="{{ asset('images/groaenumber.png') }}" alt="">
                <div class="numberLayer">
                    <h3>GROAE In Numbers</h3>
                    <div class="numberCount">
                        @if ($groae_number)
                            @foreach ($groae_number as $groae_num_val)
                                <div class="innrCount">
                                    <h3>{{ $groae_num_val->value }}</h3>
                                    <p>{{ ucwords($groae_num_val->title) }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
