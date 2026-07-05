<footer class="admin-footer border-top bg-white px-4 py-3 mt-auto">
    <div class="d-flex flex-wrap justify-content-between align-items-center small text-muted">
        <span>{{ str_replace('{year}', date('Y'), setting('footer_copyright', '© '.date('Y').' '.setting('site_name', config('app.name')))) }}</span>
        <span>v1.0.0</span>
    </div>
</footer>
