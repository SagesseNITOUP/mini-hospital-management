<div class="modal fade add-role-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="basic-form">
                    <form>
                        <fieldset>
                            <div class="mb-3">
                                <label class="form-label">Role Name</label>
                                <input type="text" class="form-control role-name-input" placeholder="Ex: Manager" required>
                                <input type="hidden" value="" class="role-id-input"/>

                                <small class="text-danger mt-2 role-name-input-error-msg"></small>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-sm  role-modal-buttons save-only-btn" >save</button>
                <button type="button" class="btn btn-sm role-modal-buttons save-and-new-btn" >save and new<span class="tooltiptext">Save and create a new one</span></button>
                <button type="button" class="btn btn-sm  role-modal-buttons cancel-btn" data-bs-dismiss="modal">cancel</button>
            </div>
        </div>
    </div>
</div>
