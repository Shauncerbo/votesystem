<!-- Add Candidate Modal (No Functionality) -->
<div class="modal fade" id="addCandidateModal" tabindex="-1" aria-labelledby="addCandidateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCandidateModalLabel">Add Candidate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form to add a new candidate (No action behind it yet) -->
                <form>
                    <div class="mb-3">
                        <label for="candidateName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="candidateName" required>
                    </div>
                    <div class="mb-3">
                        <label for="party" class="form-label">Party</label>
                        <input type="text" class="form-control" id="party" required>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="candidateStatus" required>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Candidate</button>
                </form>
            </div>
        </div>
    </div>
</div>
