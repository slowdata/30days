@props(
    [
        'active' => false,
        'mobile' => false
    ]
)

@if(!$mobile)
    <a {{$attributes}} class="{{ $active? "bg-gray-900 text-white" :
"text-gray-300 hover:bg-gray-700 hover:text-white"}}
 rounded-md px-3 py-2 text-sm font-medium" aria-current="{{$active ? 'page' : 'false'}}">
        {{$slot}}
    </a>
@else
    <a {{$attributes}} class="{{ $active? "bg-gray-900 text-white" :
"text-gray-300 hover:bg-gray-700 hover:text-white"}}
 block rounded-md px-3 py-2 text-base font-medium" aria-current="{{$active ? 'page' : 'false'}}">
        {{$slot}}
    </a>

@endif

<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->


{{--Mobile version--}}
<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
{{--text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium--}}
