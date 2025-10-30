<section id="contact" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Get in Touch</h2>
            <p class="text-muted">Have a project in mind or want to say hello? Send me a message!</p>
        </div>

        <div class="row g-4">
            {{-- Contact Form --}}
            <div class="col-lg-7">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            {{-- Contact Info / Social Links --}}
            <div class="col-lg-5">
                <div class="p-4 bg-light rounded shadow-sm h-100">
                    <h5 class="fw-bold mb-3">Contact Information</h5>
                    <p><i class="bi bi-envelope-fill me-2"></i> <a href="mailto:thazin@example.com">thazin@example.com</a></p>
                    <p><i class="bi bi-telephone-fill me-2"></i> +49 123 456 789</p>
                    <p><i class="bi bi-geo-alt-fill me-2"></i> Germany</p>

                    <h5 class="fw-bold mt-4 mb-3">Follow Me</h5>
                    <div class="d-flex gap-3">
                        <a href="https://github.com/yourusername" target="_blank" class="text-dark fs-4">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://linkedin.com/in/yourusername" target="_blank" class="text-primary fs-4">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://twitter.com/yourusername" target="_blank" class="text-info fs-4">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
