@props(['status'])

@if ($status)
    <div class="">
        <p>{{ $status }}</p>
        <span class=""></span>
    </div>
@endif