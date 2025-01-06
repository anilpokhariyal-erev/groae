<x-website-layout>
    <!-- banner -->
    <style>
        .overlayText {
            position: absolute;
            width: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        /* Apply margin-left only for non-mobile views */
        @media (min-width: 768px) {
            .overlayText {
                margin-left: 25%;
            }
        }

    
        .overlay-text {
            font-size: 2rem; /* Adjust font size */
            font-weight: bold;
            margin: 10px 0;
            opacity: 0;
            position: absolute;
            transition: opacity 1s ease-in-out;
        }
    
        .line1, .line2, .line3 {
            animation: fadeInOut 9s infinite ease-in-out;
        }
    
        .line1 { animation-delay: 0s; }
        .line2 { animation-delay: 1s; }
        .line3 { animation-delay: 2s; }
    
        @keyframes fadeInOut {
            0%, 33% { opacity: 0; }
            11%, 22% { opacity: 1; }
        }
    </style>
    @section('js-imports')
        <script src="{{ secure_asset('js/website/home.js') }}" crossorigin="anonymous"></script>
    @endsection
    @section('js-owl-imports')
        <script src="{{ secure_asset('js/website/owl.carousel.min.js') }}" crossorigin="anonymous"></script>
    @endsection
    <section class="video-section">
        <div class="overlayText">
            <h3 class="overlay-text line line1">Want to Start your own business in UAE?</h3>
            <h3 class="overlay-text line line2">Enjoy FREE consultations and zero service fees!</h3>
            <h3 class="overlay-text line line3">We handle everything -- So you <br> can focus on your business.</h3>
        </div>
        <video autoplay muted loop class="background-video">
            <source src="{{ secure_asset('images/groae_banner.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="bannerLayer">
            <div class="innrLayer">
                <img src="{{ secure_asset('images/bot1.png') }}" alt="">
                <h3>AI search to help you find the best Freezone.</h3>
            </div>
            @include('frontend.components.ai_search_filters', ['attributes' => $attributes])
        </div>

    </section>


    <!-- Trending Freezones  -->
    <section style="margin-top: -1%">
        <div class="trendingContainer">
            <div class="topHeading">
                <h2 class="trendTxt">Trending Freezones</h2>
                <p class="trendDetails">Look up the Freezones that meets your needs </p>
            </div>
            <div class="container">
                <div class="trendingBlog">
                    @foreach ($freezones as $item)
                        <div>
                           <a target="_blank" href="{{ route('freezone-detail', ['slug' => $item->slug]) }}">
                                <div class="blogLayer articleBlog">
                                    <div class="topLayer firstImgLayer">
                                        <img src='{{ $item->background_image_logo ? Storage::url($item->background_image_logo) : asset('images/placeholder.png') }}'
                                            alt="">
                                    </div>
                                    <div class="bottomLayer">
                                        <h2 class="blogDateTxt">
                                            <a target="_blank" href="{{ route('freezone-detail', ['slug' => $item->slug]) }}" class="viewInnrTxt">
                                                <img style="max-height: 100px !important;" src='{{ $item->logo ? Storage::url($item->logo) : asset('images/placeholder.png') }}' alt="">
                                            </a>
                                        </h2>
                                        <h3 class="blogHeading">{{ ucwords($item->name) }} </h3>
                                        <p class="blogDetail">{!! $item->about !!}</p>
                                        <button class="viewDetailBtn"><a
                                                href="{{ route('freezone-detail', ['slug' => $item->slug]) }}"
                                                class="viewInnrTxt">View Details
                                                <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>



    @include('frontend.components.offers_home')

    <!-- Business Cost?  -->
    <section>
        <div class="container">
            <div class="video-banner">
                <!-- Thumbnail image -->
                <div class="video-thumbnail" onclick="playVideo()">
                    <img src="https://img.youtube.com/vi/{{$background_video}}/maxresdefault.jpg" alt="Video Thumbnail" class="thumbnail-image" width="100%" style="border-radius:35px;">
                    <div class="play-icon">▶</div> <!-- Play button -->
                </div>

                <!-- The iframe will be inserted here on click -->
                <div id="video-container" style="display:none;">
                    <iframe
                        id="youtube-video"
                        width="1138px"
                        height="395px"
                        src=""
                        frameborder="0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen
                        style="border-radius:35px;">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

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
            <div class="articleContainer">
                <div class="topHeading">
                    <h2 class="trendTxt">Article & Blogs</h2>
                    <p class="trendDetails">Exploring trends and insights with our articles & blogs </p>
                </div>
                <div class="container">
                    <div class="trendingBlog">
                        @foreach ($blogs as $blog_val)
                            <div class="blogLayer new_layer" style="background-color: rgba(237, 245, 255, 0.7)">
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

    <script>
        function playVideo() {
            // Show the video container
            const videoContainer = document.getElementById('video-container');
            videoContainer.style.display = 'block';

            // Get the container dimensions to adjust the iframe size
            const container = document.querySelector('.video-banner');
            const containerWidth = container.offsetWidth;

            // Calculate the height for 16:9 aspect ratio
            const containerHeight = containerWidth * 9 / 16;

            // Set the iframe size to match the container's width and calculated height
            const iframe = document.getElementById('youtube-video');
            iframe.width = containerWidth;
            iframe.height = containerHeight;

            // Set the iframe source with autoplay, mute, and restricted suggestions
            iframe.src = `https://www.youtube.com/embed/{{$background_video}}?autoplay=1&mute=1&controls=1&rel=0&modestbranding=1&fs=1`;

            // Hide the thumbnail and play icon
            document.querySelector('.video-thumbnail').style.display = 'none';
        }

    </script>
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
    <script>
        $(document).ready(function() {
            // Delay the display of the overlay text
                // Show the overlay text with fade-in effect
                $('.overlayText').css('opacity', 1);// Delay of 2 seconds (2000 milliseconds)
        });
        $(document).ready(function() {
            var $overlayText = $('.overlay-text'); // Select all the h3 elements
            var index = 0; // Initialize index to start showing the first element

            // Hide all h3 elements initially
            $overlayText.hide(); // Use hide to ensure they are all hidden at first

            // Function to show each h3 one by one
            function showText() {
                // Hide the previous text (if any)
                if (index > 0) {
                    $($overlayText[index - 1]).fadeOut(1000); // Fade out the previous text
                }

                // Fade in the current text
                $($overlayText[index]).fadeIn(1000); // Fade in current text over 2 seconds

                // Increment the index for the next text
                index++;

                // If we've reached the end of the list, reset index and fade out the last element
                if (index >= $overlayText.length) {
                    index = 0; // Reset index to loop back to the first element

                    // Fade out the last text before the loop starts over
                    setTimeout(function() {
                        $($overlayText[$overlayText.length - 1]).fadeOut(1000);
                        setTimeout(function() {
                            showText(); // Restart the text animation after the last one fades out
                        }, 1000); // Delay for the fadeOut duration
                    }, 3000); // Wait for the current text to finish its duration (3 seconds)
                }
            }

            // Call showText every 5 seconds (5000ms) initially
            setInterval(showText, 5000);

            // Optionally, show the first text immediately
            showText();
        });
    </script>


</x-website-layout>
