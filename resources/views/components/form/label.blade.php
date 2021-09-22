@props(['name'])

<label for="{{$name}}" class="block mb-2 uppercase fot-bold text-xs text-gray-700">
    {{ucwords($name)}}
</label>
