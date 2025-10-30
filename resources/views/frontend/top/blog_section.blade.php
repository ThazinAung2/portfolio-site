<section id="blog" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Blog & Insights</h2>
            <p class="text-muted">Latest articles, tutorials, and insights about Laravel and web development</p>
        </div>

        <div class="row g-4">
            {{-- Example Blog Post 1 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/blog/blog1.jpg') }}" class="card-img-top" alt="Blog 1">
                    <div class="card-body">
                        <h5 class="card-title">Mastering Eloquent Relationships in Laravel</h5>
                        <p class="card-text text-truncate">Learn how to efficiently work with one-to-one, one-to-many, and many-to-many relationships in Laravel Eloquent.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            {{-- Example Blog Post 2 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/blog/blog2.jpg') }}" class="card-img-top" alt="Blog 2">
                    <div class="card-body">
                        <h5 class="card-title">Building a REST API with Laravel</h5>
                        <p class="card-text text-truncate">Step-by-step guide to creating a secure and scalable RESTful API using Laravel and API resources.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            {{-- Example Blog Post 3 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/blog/blog3.jpg') }}" class="card-img-top" alt="Blog 3">
                    <div class="card-body">
                        <h5 class="card-title">Tips for Optimizing Laravel Performance</h5>
                        <p class="card-text text-truncate">Discover best practices for caching, database optimization, and reducing load times in Laravel applications.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
