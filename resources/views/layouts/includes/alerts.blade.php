@if (session('success'))
<div class="alert alert-success" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ session('success') }}
</div>
@endif

@if (session('info'))
<div class="alert alert-info" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ session('info') }}
</div>
@endif

@if (session('warning'))
<div class="alert alert-warning" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ session('warning') }}
</div>
@endif

@if (session('danger'))
<div class="alert alert-danger" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ session('danger') }}
</div>
@endif
