<section id="projects" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">My Projects</h2>
            <p class="text-muted">A selection of Laravel projects and web applications I have built</p>
        </div>

        <div class="row g-4">
            {{-- Project 1 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/projects/project1.jpg') }}" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Laravel CMS</h5>
                        <p class="card-text">A custom content management system built with Laravel, allowing admins to manage dynamic content easily.</p>
                        <div class="d-flex justify-content-between mt-3">
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-success">MySQL</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                        <a href="#" class="btn btn-outline-dark btn-sm">GitHub</a>
                    </div>
                </div>
            </div>

            {{-- Project 2 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/projects/project2.jpg') }}" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">E-Commerce Platform</h5>
                        <p class="card-text">A fully functional e-commerce website built with Laravel, featuring payment integration and admin dashboard.</p>
                        <div class="d-flex justify-content-between mt-3">
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-success">Bootstrap</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                        <a href="#" class="btn btn-outline-dark btn-sm">GitHub</a>
                    </div>
                </div>
            </div>

            {{-- Project 3 --}}
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/projects/project3.jpg') }}" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">API Backend</h5>
                        <p class="card-text">A RESTful API backend built with Laravel and MySQL, designed for mobile and web applications.</p>
                        <div class="d-flex justify-content-between mt-3">
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-success">API</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                        <a href="#" class="btn btn-outline-dark btn-sm">GitHub</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
