@props(['name'])
<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{ucwords($name)}}</label>
    <input 
    {{$attributes}}
    class="form-control" 
    id="{{$name}}" 
    name="{{$name}}" 
    value="{{old($name)}}">
    @error($name)
    <span class="small text-danger">{{$message}}</span>
    @enderror
</div>