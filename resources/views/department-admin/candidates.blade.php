@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/department-admin.css'])
@include('department-admin.sidebar')

<style>
    li a.active-candidates, li a:hover, .logout-button:hover {
        background-color: #ffffff;
        color: #1A73E8;
    }
</style>

<!-- Include DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>

<nav class="navbar fixed-top" style="margin-left: 250px;">
    <div class="container-fluid" style="margin-right: 250px;">
        <p class="navbar-brand" href="#" status='disable'>Manage Candidate</p>
    </div>
</nav>

<!-- Main Content Area -->
<div class="container mt-5" style="margin-left: 250px; padding-top: 70px;">

    <!-- Button to open the Add Candidate Modal -->
    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addCandidateModal">Add Candidate</button>

    <!-- Table for DataTable -->
    <table id="candidateTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Party</th>
                <th>Position</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample Rows -->
            <tr>
                <td>John Doe</td>
                <td>Party A</td>
                <td>President</td>
                <td>Active</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>Party B</td>
                <td>Vice President</td>
                <td>Inactive</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Alice Brown</td>
                <td>Party A</td>
                <td>Secretary</td>
                <td>Active</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Bob Johnson</td>
                <td>Party C</td>
                <td>Treasurer</td>
                <td>Inactive</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Charlie Davis</td>
                <td>Party B</td>
                <td>Public Relations</td>
                <td>Active</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Include the modal partial for Candidate -->
@include('department-admin.add-candidate-modal')

<!-- Include Bootstrap JS (for modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#candidateTable').DataTable();  // Initialize DataTable
    });
</script>
