@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/department-admin.css'])
@include('admin.sidebar')
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>



<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<!-- DataTables Buttons CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.dataTables.min.css">


<style>
    li a.active-position, li a:hover, .logout-button:hover {
        background-color: #ffffff;
        color: #1A73E8;
    }

    .row{
        margin-top: 10px;
      
    }
    .text{

        margin-top: 5px;
        font: bold;
    }



    .dataTables_filter input {
    border-radius: 20px !important; /* Make it rounded */
    border: 1px solid #ccc;
    padding: 8px 15px;
    outline: none;
    width: 200px;
    transition: all 0.3s ease;
    margin-bottom: 10px;
}




</style>

@include('admin.modals.addUser-modal')

<nav class="navbar fixed-top" style="margin-left: 250px;">
    <div class="container-fluid" style="margin-right: 250px;">
        <p class="navbar-brand" href="#" status='disable'>Manage User</p>
    </div>
</nav>

<div class="container-fluid mt-5" style="margin-left: 250px; padding-top: 70px;">
    <div class="card ">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="mb-0">Users List</h3>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#addUserModal" >
                            Add User
                        </button>
                        <button class="btn btn-primary " onclick="window.location.href='{{ route('userTypes.index') }}'">
                            Add User Type
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
         
           
        <div class="table-responsive">
    <table id="UsersTable" class="table align-middle table-borderless mb-0">
        <thead class="bg-light text-muted">
            <tr class="align-middle">
                <th style="width: 40px;">
                    
                </th>
                <th>Full Name</th>
                <th>Sex</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Department</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white shadow-sm rounded-3 mb-2">
                <td>
                    <input class="form-check-input" type="checkbox">
                </td>
                <td class="fw-semibold">{{ $user->full_name ?? 'N/A' }}</td>
                <td>{{ $user->Sex ?? 'N/A' }}</td>
                <td>{{ $user->ContactNumber ?? 'N/A' }}</td>
                <td class="text-muted">{{ $user->email ?? 'N/A' }}</td>
                <td>
                    @if ($user->userType)
                        <span class="badge {{ $user->userType->userType_name == 'Admin' ? 'bg-success' : 'bg-info' }}">
                            {{ $user->userType->userType_name }}
                        </span>
                    @else
                        <span class="badge bg-secondary">N/A</span>
                    @endif
                </td>
                <td>
                    @if ($user->department)
                        {{ $user->department->department_name }}
                    @else
                        N/A
                    @endif
                </td>
                <td class="text-end">
                    <div class="d-flex justify-content-end gap-2">
                        <a href="#" class="btn btn-sm btn-light border" title="Edit">
                            <i class="fas fa-pen"></i>
                        </a>
                        <button class="btn btn-sm btn-light border" onclick="return confirm('Are you sure?')" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                        <button class="btn btn-sm btn-light border" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#UsersTable').DataTable(); 
    });
</script>
