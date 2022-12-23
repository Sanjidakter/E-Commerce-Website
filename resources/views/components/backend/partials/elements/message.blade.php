@props(['message'])
@if($message)
            <div class="aleart alert-success">
                <span class="close" data-dismiss="alert">
                </span>
                <strong>{{$message}}</strong>
            </div>
@endif