@props(['name'])
<div class="mb-3">
    <label for="{{$name}}" class="form-label">{{$name}}</label>
    <textarea
        class="form-control" id="{{$name}}" placeholder="product details" name="{{$name}}" >
        {{$slot ?? old($name)}}
    </textarea>

  
</div>