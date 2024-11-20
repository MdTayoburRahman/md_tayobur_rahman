<div class="container">
    <div class="row mt-n5">
        @foreach ($blogPosts as $post)
            <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="blog-grid">
                    <a href="{{ route('post', ['slug' => $post->slug]) }}" class="text-decoration-none text-dark">
                        <!-- Thumbnail Image -->
                        <div class="blog-grid-img position-relative">
                            <img alt="{{ $post->title }}"
                                src="{{ $post->thumbnail ? asset('assets/img/post_thumbnail/' . $post->thumbnail) : 'https://www.bootdey.com/image/480x480/00FFFF/000000' }}"
                                class="img-fluid">
                        </div>
                        <div class="blog-grid-text p-4">
                            <!-- Blog Title -->
                            <h3 class="h5 mb-3">{{ $post->title }}</h3>
                            <p class="display-30">{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 100) }}
                            </p>
                            <!-- Blog Metadata -->
                            <div class="meta meta-style2">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> {{ $post->created_at->format('d M, Y') }}
                                    </li>
                                    <li><i class="fas fa-user"></i> {{ $post->author }}</li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination (if using pagination in the controller) -->
    <div class="row mt-6 wow fadeInUp" data-wow-delay=".6s"
        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
        <div class="col-12">
            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                {{ $blogPosts->links() }}
            </div>
        </div>
    </div>
</div>
