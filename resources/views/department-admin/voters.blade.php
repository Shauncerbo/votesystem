@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/department-admin.css'])
@include('department-admin.sidebar')

<style>
    li a.active-voters, li a:hover, .logout-button:hover {
        background-color: #ffffff;
        color: #1A73E8;
    }
</style>

<!-- Include DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>

<nav class="navbar fixed-top" style="margin-left: 250px;">
    <div class="container-fluid" style="margin-right: 250px;">
        <p class="navbar-brand" href="#" status='disable'>Manage Voters</p>
    </div>
</nav>

<!-- Main Content Area -->
<div class="container mt-5" style="margin-left: 250px; padding-top: 70px;">

    <!-- Button to open the modal -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addVoterModal">Add Voter</button>

    <!-- Table for DataTable -->
    <table id="voterTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample Rows -->
            <tr>
                <td>sean</td>
                <td>21</td>
                <td>Active</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>niko</td>
                <td>25</td>
                <td>Inactive</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>sdas</td>
                <td>30</td>
                <td>Active</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>dada</td>
                <td>28</td>
                <td>Inactive</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>john</td>
                <td>35</td>
                <td>Active</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Include the modal partial -->
@include('department-admin.add-voter-modal')

<!-- Include Bootstrap JS (for modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#voterTable').DataTable();  // Initialize DataTable
    });
</script>
