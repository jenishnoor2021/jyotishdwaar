<div class="container d-flex align-items-center justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{ $company_email }}</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91 {{ $company_contact }}
    </div>
    <div class="cta d-none d-md-block">
        <a href="tel:{{ $company_contact }}" class="scrollto">Call Us</a>
    </div>
</div>