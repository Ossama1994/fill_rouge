@props(['errors'])

@if ($errors->any())    
    <div class="">
        <div style="padding-bottom:1rem">@lang('Whoops! Something went wrong.')</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <span class=""></span>
    </div> 
@endif
