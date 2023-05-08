@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
    @endif