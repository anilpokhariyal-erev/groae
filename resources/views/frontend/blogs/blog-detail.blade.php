<x-website-layout>
    <!-- blog details sec -->
    <section class="center-section">
        <div class="blogDetailContainer">
            <div class="container">
                <div class="backBtn ">
                    <a class="backAnchor" href="{{ route('article-blogs') }}"><img
                            src="{{ asset('images/cheveron-right.png') }}" alt=""></a>
                    <h2 class="backTxt">Back</h2>
                </div>
                <div class="blogDetailWrapper">
                    <div class="detailContainer1">
                        <div class="blogImage">
                            <img style="max-width: 750px; max-height: 500px"
                                src='{{ $blog_detail->image ? Storage::url($blog_detail->image) : asset('images/placeholder.png') }}'
                                alt="">
                        </div>
                        <div class="blogContnt">
                            <h2 class="articleHeadingTxt">{{ $blog_detail->title }}</h2>
                            {!! $blog_detail->description !!}
                        </div>
                    </div>
                    <div class="detailContainer2">
                        <div class="relatedArticlesTopic">
                            <h2>Related Articles & Blogs</h2>
                            @if ($related_blogs)
                                @foreach ($related_blogs as $related_blog_val)
                                    <div class="searchBlogLayer articlLayr">
                                        <div class="firstLayer">
                                            <img style="max-width: 250px; max-height: 95px"
                                                src='{{ $related_blog_val->image ? Storage::url($related_blog_val->image) : asset('images/placeholder.png') }}'
                                                alt="">
                                        </div>
                                        <div class="secondLayer">
                                            <h3 class="blogHeading text-left" style="font-size: 14px;"><a
                                                    href="{{ route('blog-detail', $related_blog_val->slug) }}">{{ ucwords($related_blog_val->title) }}</a>
                                            </h3>
                                            <p class="blogDetail text-left">Posted at
                                                {{ $related_blog_val->created_at->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="relatedArticlesTopic" style="margin-top: 50px;">
                            <h2>Articles & Blogs by topics</h2>
                            <div class="articleList">
                                <ul>
                                    @if ($category)
                                        @foreach ($category as $cat_val)
                                            <li>
                                                <a class="tabInnrTxt"
                                                    href="{{ route('article-blogs', ['category' => $cat_val->slug]) }}">{{ $cat_val->name }}
                                                    ({{ $cat_val->blogs_count }})
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                    </u>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
