@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/department-admin.css'])
@include('department-admin.sidebar')

<style>
    li a.active-elections, li a:hover, .logout-button:hover {
        background-color: #ffffff;
        color: #1A73E8;
    }
</style>

<!-- Include DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>

<nav class="navbar fixed-top" style="margin-left: 250px;">
    <div class="container-fluid" style="margin-right: 250px;">
        <p class="navbar-brand" href="#" status='disable'>Manage Elections</p>
    </div>
</nav>

<!-- Main Content Area -->
<div class="container mt-5" style="margin-left: 250px; padding-top: 70px;">

    <!-- Button to open the Add Election Modal -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addElectionModal">Add Election</button>

    <!-- Table for DataTable -->
    <table id="electionTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Election Title</th>
                <th>Election Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample Rows -->
            <tr>
                <td>Presidential Election 2025</td>
                <td>2025-11-01</td>
                <td>Ongoing</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Senatorial Election 2025</td>
                <td>2025-10-10</td>
                <td>Upcoming</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Local Election 2025</td>
                <td>2025-12-15</td>
                <td>Upcoming</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Include the modal partial for Election -->
@include('department-admin.add-election-modal')

<!-- Include Bootstrap JS (for modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#electionTable').DataTable();  // Initialize DataTable
    });
</script>
