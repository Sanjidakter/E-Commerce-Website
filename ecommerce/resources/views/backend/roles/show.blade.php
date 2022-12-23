<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Users
    </x-slot>

    <x-backend.partials.elements.breadcrumb>
        <x-slot name="pageHeader">Roles</x-slot>
        <li class="breadcrumb-item active"><a href="{{route('home')}}"></a>Dashboard</li>
        <li class="breadcrumb-item active"><a href="{{route('roles.index')}}"></a>Roles</li>
    </x-backend.partials.elements.breadcrumb>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1">Roles User</i>
            <a class="" href="{{route('roles.index')}}">User List</a>
            
            

        </div>
        <div class="card-body">
            <table id ="datatablesSimple">
                <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Name</th>
                        <th>Email</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($users as $user)
                    
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
            
        {{-- <h3>Name:{{$role->name}}</h3> --}}
        
        
        </div>
    </div>

    </x-backend.layouts.master>