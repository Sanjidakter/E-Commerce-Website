<x-backend.layouts.master>
    <x-slot name="pageTitle">
        table
    </x-slot>

    <x-backend.partials.elements.breadcrumb>
        <x-slot name="pageHeader">Dashboard</x-slot>
        <li class="breadcrumb-item active">Dashboard</li>
    </x-backend.partials.elements.breadcrumb>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1">Slider</i>
            
            <a class="btn btn-info" href="{{route('sliders.create')}}">Add New Slider</a>

        </div>
        <div class="card-body">
            
            
        <h3>Title:{{$slider->slider_title}}</h3>
        
        <img src="/storage/{{$slider->slider_image}}" alt="">
        </div>
    </div>

    </x-backend.layouts.master>