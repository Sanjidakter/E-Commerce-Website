<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Table
    </x-slot>

    <x-backend.partials.elements.breadcrumb>
        <x-slot name="pageHeader">Dashboard</x-slot>
        <li class="breadcrumb-item active">Dashboard</li>
    </x-backend.partials.elements.breadcrumb>


    <div class="container justify-content-center d-flex">
     <div class="card-header">
            <i class="fas fa-table me-1">Slider</i>

            <a class="btn btn-info" href="{{route('sliders.index')}}">List</a>

        </div> 
    <x-backend.partials.elements.errors :errors="$errors"/>
        <form action="{{route('sliders.update',['slider'=>$slider->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <x-backend.form.input name="slider_title" 
            :value="$slider->slider_title"/>
            
            <x-backend.form.input name="slider_image" type="file" :value="$slider->slider_image"/>

                <input type="checkbox" name="slider_status" 
            value="1" {{$slider->slider_status? "checked":"" }}>

            <x-backend.form.button>
                Update
            </x-backend.form.button>

         

        </form>

    </div>

</x-backend.layouts.master>