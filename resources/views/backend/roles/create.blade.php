<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Products : Create
    </x-slot>

    <x-backend.partials.elements.breadcrumb>
        <x-slot name="pageHeader">Dashboard</x-slot>
        <li class="breadcrumb-item active">Dashboard</li>
    </x-backend.partials.elements.breadcrumb>


    <!-- <h1 class="mt-4 d-flex justify-content-center">Product</h1> -->

    <div class="container   justify-content-center d-flex">
     <div class="card-header">
            <i class="fas fa-table me-1">Product</i>

            <a class="btn btn-info" href="{{route('products.index')}}">List</a>

        </div> 
        <div class="card-body">
            <x-backend.partials.elements.errors :errors="$errors"/>
        <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <x-backend.form.input name="name"/>
            <x-backend.form.textarea name="details"/>
            <x-backend.form.input name="price" type="number"/>
            <x-backend.form.input name="image" type="file"/>

            {{-- <x-backend.form.button name="submit"/> --}}
            <x-backend.form.button>
                Submit
            </x-backend.form.button>
            

        </form>
    </div>

    </div>

</x-backend.layouts.master>