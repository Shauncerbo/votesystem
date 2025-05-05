@vite(['resources/css/app.css', 'resources/js/app.js',  'resources/css/admin.css'])
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<style>
    li a.active, li a:hover, .logout-button:hover {
        background-color: #ffffff;
        color: #1A73E8;
        
    }
    .department-section{
        background-color: #e3e4e4;
        color: white;
        padding: 10px 5px; 
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(14, 13, 13, 0.2);
        margin-top: 100px;
        text-align: left; 
        position: relative; 
        
    }
    .department-container {
    margin-top: 20;
    padding-top: 0;
}
.add-btn {
    margin-top: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  
}

.add-btn:hover {
    background-color: #0056b3;
}

.text {
    color: #1A253D;
    margin-left: 5px;
    margin-top: 10px;
}

</style>

@auth

@include('admin.sidebar' )
@include('admin.modals.addDepartment-modal')


<div class="content-wrapper">
<nav class="navbar fixed-top" style="margin-left: 250px;">
    <div class="container-fluid" style="margin-right: 250px;">
        <p class="navbar-brand" href="#" status='disable'>Manage Department</p>
    </div>
</nav>
    
<div class="container-fluid department-section">
    <div class="row">
        <div class="col-md-6">
            <h1 class="text">Available Department</h1>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <button type="button" class="add-btn" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">Add Department</button>
        </div>
     
    </div>
    @if (isset($departments) && $departments->count())
    @foreach ($departments as $department)
        <div class=" department-container border p-3 mb-3" style="background-color: #F8FAFF; border-color: #D6E4FF;">
            <div class="d-flex justify-content-between align-items-center">
                <h3 style="color: #2C3E50;">{{ $department->department_name }}</h3>
                <div>
                    <a href="{{ route('departments.show', $department->department_id) }}" class="btn btn-info btn-sm" style="background-color: #3498DB;">Show</a>
                    <a href="{{ route('departments.edit', $department->department_id) }}" class="btn btn-warning btn-sm" style="background-color: #F39C12;">Edit</a>
                    <form action={{ route('departments.destroy',$department->department_id) }} method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this department?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" style="background-color: #E74C3C;">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="alert alert-info mt-3" role="alert">
        No departments available.
    </div>
@endif



@endauth