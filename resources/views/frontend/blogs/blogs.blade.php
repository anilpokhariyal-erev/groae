<x-website-layout>
    <?php
    $search = request()->input('search');
    $category = request()->input('category');
    ?>
    <div class="center-section">
        <!-- Article & Blogs Banner -->
        <section>
            <div class="articleBlogBanner">
                <div class="articleBlogWrap">
                    <img class="abBannerImg" src="{{ asset('images/articleBanner.png') }}" alt="">
                </div>
                <div class="articleInnrWrapper">
                    <div class="container">
                        <div class="backBtn">
                            <a class="backAnchor" href="{{ url()->previous() }}"><img
                                    src="{{ asset('images/cheveron-right.png') }}" alt="">
                            <h2 class="backTxt">Back</h2>
                            </a>
                        </div>
                        <div class="topHeading">
                            <h2 class="trendTxt">Article & Blogs</h2>
                            <p class="trendDetails">Exploring trends and insights with our articles & blogs </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- search blog and filter field -->
        <section>
            <div class="container">
                <div class="searchBlogWrapper">
                    <div class="exploreInput">
                        <form method="GET" action="">
                            <input type="search" name="search" id="search" value="{{ $search }}">
                            <button type="{{ $search ? 'button' : 'submit' }}" style="cursor: pointer;">
                                <img class="{{ $search ? 'closeImg' : '' }}"
                                    src="{{ $search ? asset('images/close-icon.png') : asset('images/blue-search-icon.png') }}"
                                    alt="">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- blogs tab -->
        <section>
            <div class="container">
                <div class="settingList listScroll">
                    @if (count($categories))
                        <img class="preImg" src="{{ asset('images/previous-arrow.png') }}" alt="">
                        <ul class="articleTab" id="scrollbar">
                            <li class="tabItems" {{ $category ? '' : 'style=background-color:#304a6f' }}>
                                <a class="tabInnrTxt {{ $category ? '' : 'activeTabTxt' }}"
                                    href="{{ route('article-blogs', ['search' => $search]) }}">All
                                    ({{ $total_blog_count }})</a>
                            </li>
                            @foreach ($categories as $item)
                                @php
                                    $params = ['category' => $item->slug];
                                    if ($search) {
                                        $params['search'] = $search;
                                    }
                                @endphp

                                <li class="tabItems"
                                    {{ $category == $item->slug ? 'style=background-color:#304a6f' : '' }}>
                                    <a class="tabInnrTxt {{ $category == $item->slug ? 'activeTabTxt' : '' }}"
                                        href="{{ route('article-blogs', $params) }}">{{ $item->name }}
                                        ({{ $item->blogs_count }})
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <img class="nxtImg" src="{{ asset('images/next-arrow.png') }}" alt="">
                    @endif
                </div>
            </div>
        </section>
        <!-- Article & Blogs  -->
        <section>
            <div class="container">
                @if (count($blogs) > 0)
                    <div class="trendingBlog">
                        @foreach ($blogs as $blog_val)
                            <div>
                                <a href="#">
                                    <div class="blogLayer articleBlog">
                                        <div class="topLayer firstImgLayer">
                                            <img src='{{ $blog_val->image ? Storage::url($blog_val->image) : asset('images/placeholder.png') }}'
                                                alt="">
                                        </div>
                                        <div class="bottomLayer">
                                            <h2 class="blogDateTxt">
                                                {{ date('d F Y', strtotime($blog_val->created_at)) }}
                                            </h2>
                                            <h3 class="blogHeading">{{ ucwords($blog_val->title) }} </h3>
                                            <p class="blogDetail">{!! Str::limit($blog_val->short_description, 130, ' ...') !!}</p>
                                            <button class="viewDetailBtn"><a
                                                    href="{{ route('blog-detail', $blog_val->slug) }}"
                                                    class="viewInnrTxt">Read More
                                                    <img src="{{ secure_asset('images/leftarrow.png') }}" alt="">
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h4 class="trendDetails" style=" font-size:20px;"> No Blog & Article Found
                    </h4>
                @endif

                <div class="commonViewMoreBtn">
                    @php
                        $categoryParams = [];
                        if ($category) {
                            $params['search'] = $search;
                        }
                    @endphp
                    <ul class="pager">
                        <li>
                            @if ($blogs->currentPage() > 1)
                                <a class="neTxt"
                                    href="{{ $blogs->previousPageUrl() . ($category ? '&category=' . $category : '') }}">Previous</a>
                            @else
                                <a class="preTxt" href="javascript:void(0);">Previous</a>
                            @endif
                        </li>
                        <li>
                            @if ($blogs->hasMorePages())
                                <a class="neTxt"
                                    href="{{ $blogs->nextPageUrl() . ($category ? '&category=' . $category : '') }}">Next</a>
                            @else
                                <a class="preTxt" href="javascript:void(0);">Next</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

</x-website-layout>
