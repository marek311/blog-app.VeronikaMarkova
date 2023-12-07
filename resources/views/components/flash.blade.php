

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed bottom-3 end-3 rounded-xl" role="alert">
        <p>{{ session('success') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
