<x-website-layout>
    <style>
        .video-container {
            position: relative;    /* Helps in maintaining aspect ratio */
            width: 100%;           /* Ensures full width */
            height: 0;             /* Start with 0 height */
            padding-bottom: 56.50%; /* This sets the aspect ratio to 16:9 */
            overflow: hidden;      /* Hides anything outside the container */
        }

        .video-container iframe {
            position: absolute;   /* Positions iframe inside the container */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .searchFields{
            margin-top: -1%;
        }
        .bannerLayer{
            padding-bottom: 19%;
            top: 75%;
        }

             /* Custom styles for the GROAE In Numbers section */
         .groaeNumbers {
             display: flex;
             justify-content: center;
             align-items: center;
             margin: 50px 0;
         }

        .numberCount {
            display: flex;
            gap: 30px;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .innrCount {
            text-align: center;
            opacity: 0;
        }

        .innrCount h3 {
            font-size: 40px;
            font-weight: bold;
            color: #304a6f;
            margin: 0;
            transition: all 1s ease-in-out;
        }

        .innrCount p {
            font-size: 18px;
            color: #6f6f6f;
        }

        .countImg {
            width: 100%;
            height: auto;
        }

    </style>
    <!-- banner -->
    @section('js-imports')
        <script src="{{ secure_asset('js/website/home.js') }}" crossorigin="anonymous"></script>
    @endsection
    @section('js-owl-imports')
        <script src="{{ secure_asset('js/website/owl.carousel.min.js') }}" crossorigin="anonymous"></script>
    @endsection
    <section>
        <div class="banner">
{{--            <div class="bannerLayer" style="width: 20%;top: 0%;left: 80% !important;height: 100vh;">--}}
{{--                <div class="innrLayer" style="margin-top: 50%;">--}}
{{--                    <button type="button">--}}
{{--                        <a href="https://localhost/signup" class="signupBtn">Book a consultation</a>--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--            </div>--}}

            <div class="video-container bannrImg">
                <iframe
                        src="https://www.youtube.com/embed/{{$background_video}}?autoplay=1&mute=1&loop=1&playlist={{$background_video}}&rel=0&vq=hd1080&controls=0"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        style="width: 100%; height: 100%;"></iframe>
            </div>

            <div class="bannerLayer">
                <div class="innrLayer">
                    <img src="{{ secure_asset('images/bot1.png') }}" alt="">
                    <h3>AI search to help you find the best Freezone.</h3>
                </div>
                @include('frontend.components.ai_search_filters', ['attributes' => $attributes])

                        <a href="contact-us" class="signupBtn book" style="position: absolute;top: 63%;left: 40%;background: #fff; color: #304a6f !important">Book a consultation</a>

            </div>
        </div>

    </section>

    <!-- Trending Freezones  -->
    <section style="margin-top: -1%">
        <div class="trendingContainer" >
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
                                    <img style="height: 174px" src='{{ $item->logo ? Storage::url($item->logo) : asset('images/placeholder.png') }}'
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
                    <button class="viwBtn"><a href="{{ route('explore-freezone') }}" class="viewMoreTxt">View
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
                <button class="CostBtn"> <a href="/freezone-packages">Calculate Cost</a></button>
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
<script>
    $(document).ready(function() {
        var hasAnimated = false; // Prevent multiple animations

        // Function to animate numbers
        function animateNumbers() {
            if (hasAnimated) return; // Prevent repeated animations

            $('.innrCount').each(function() {
                var $this = $(this);
                var targetValue = parseInt($this.find('h3').text().replace(/,/g, '')); // Get the target number
                $this.css('opacity', 1); // Make it visible

                // Animate number counting up to the target value
                $({ countNum: 0 }).animate(
                    { countNum: targetValue },
                    {
                        duration: 2000, // Duration of the animation (2 seconds)
                        easing: 'swing', // Easing function for smooth animation
                        step: function() {
                            $this.find('h3').text(Math.ceil(this.countNum).toLocaleString());
                        },
                        complete: function() {
                            $this.find('h3').text(targetValue.toLocaleString()); // Final value after animation
                        }
                    }
                );
            });

            hasAnimated = true; // Ensure the animation happens only once
        }

        // Check when the section comes into view
        $(window).on('scroll', function() {
            var sectionOffset = $('.groaeNumbers').offset().top;
            var windowHeight = $(window).height();
            var scrollTop = $(window).scrollTop();

            if (scrollTop + windowHeight > sectionOffset) {
                animateNumbers();
            }
        });

        // Trigger on page load if already in view
        if ($(window).scrollTop() + $(window).height() > $('.groaeNumbers').offset().top) {
            animateNumbers();
        }
    });
</script>
