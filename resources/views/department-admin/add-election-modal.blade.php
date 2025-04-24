<!-- Add Election Modal -->
<div class="modal fade" id="addElectionModal" tabindex="-1" aria-labelledby="addElectionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addElectionModalLabel">Add Election</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form to add a new election (No action behind it yet) -->
                <form>
                    <div class="mb-3">
                        <label for="electionTitle" class="form-label">Election Title</label>
                        <input type="text" class="form-control" id="electionTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="electionDate" class="form-label">Election Date</label>
                        <input type="date" class="form-control" id="electionDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="electionStatus" class="form-label">Status</label>
                        <select class="form-control" id="electionStatus" required>
                            <option value="Ongoing">Ongoing</option>
                            <option value="Upcoming">Upcoming</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Election</button>
                </form>
            </div>
        </div>
    </div>
</div>
