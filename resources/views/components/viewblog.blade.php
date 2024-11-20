<div class="container my-5">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h2 class="display-6 mb-0">{{ $post->title }}</h2>
            <small class="text-light">
                <i class="fas fa-user"></i> {{ $post->author }} &middot; <i class="fas fa-calendar-alt"></i>
                {{ $post->created_at->format('d M, Y') }}
            </small>
        </div>
        <div class="position-relative">
            <img src="{{ asset('assets/img/post_thumbnail/' . $post->thumbnail) }}" class="img-fluid w-100"
                alt="Thumbnail" style="max-height: 500px; object-fit: cover;">
            <div class="overlay position-absolute bottom-0 w-100 bg-dark bg-opacity-50 text-white text-center py-2">
                <span class="lead">{{ $post->title }}</span>
            </div>
        </div>
        <div class="card-body p-4">
            <article class="content">
                <div class="text-justify">{!! $post->content !!}</div>
            </article>
        </div>
        <div class="card-footer bg-light text-muted">
            <p>Share this post:</p>
            <div class="d-flex flex-wrap gap-2">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('post', ['slug' => $post->slug])) }}"
                    target="_blank" class="btn btn-lg btn-primary text-white">
                    <i class="fab fa-facebook-f me-2"></i> Facebook
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('post', ['slug' => $post->slug])) }}&text={{ urlencode($post->title) }}"
                    target="_blank" class="btn btn-lg btn-info text-white">
                    <i class="fab fa-twitter me-2"></i> Twitter
                </a>
                <a href="https://pinterest.com/pin/create/button/?url={{ urlencode(route('post', ['slug' => $post->slug])) }}&media={{ urlencode(asset('assets/img/post_thumbnail/' . $post->thumbnail)) }}&description={{ urlencode($post->title) }}"
                    target="_blank" class="btn btn-lg btn-danger text-white">
                    <i class="fab fa-pinterest me-2"></i> Pinterest
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('post', ['slug' => $post->slug])) }}&title={{ urlencode($post->title) }}"
                    target="_blank" class="btn btn-lg btn-secondary text-white">
                    <i class="fab fa-linkedin-in me-2"></i> LinkedIn
                </a>
                <a href="https://wa.me/?text={{ urlencode(route('post', ['slug' => $post->slug])) }}" target="_blank"
                    class="btn btn-lg btn-success text-white">
                    <i class="fab fa-whatsapp me-2"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>
