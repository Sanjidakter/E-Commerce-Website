<x-backend.layouts.master>
    <x-slot name="pageTitle">
        table
    </x-slot>

    <x-backend.partials.elements.breadcrumb>
        <x-slot name="pageHeader">Dashboard</x-slot>
        <li class="breadcrumb-item active">Role</li>
    </x-backend.partials.elements.breadcrumb>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1">Role</i>
            
        </div>
        <div class="card-body">
            <x-backend.partials.elements.message :message="session('message')"/>
            <table id ="datatablesSimple">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th width="400px">Action</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @php $sl=0 @endphp
                    @foreach($roles as $role)
                    {{-- @foreach($users as $user) --}}
                    <tr>
                        <td>{{++$sl}}</td>
                        <td>{{$role->name}}</td>
                        {{-- <td>{{$user->name}}</td> --}}
                       
                        <td>
                            <a class="btn btn-info btn-sm" 
                            href="{{route('roles.show',['role'=>$role->id])}}" style="font-size:11px"><small>Users</small></a>
                        </td>

                        
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
    </div>

    </x-backend.layouts.master>