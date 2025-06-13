function listRoles(page = 1, search = '') {
    $.ajax({
        url: listRolesUrl,
        type: "GET",
        data: {
            page: page,
            search: search
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            var data = response.data;
            var tableBody = $(".table-body");
            tableBody.html("");

            data.forEach(function(role) {
                tableBody.append(`
                    <tr>
                        <td>
                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                <input type="checkbox" class="form-check-input role-checkbox" data-id="${role.id}" id="customCheckBox2" required="">
                                <label class="form-check-label" for="customCheckBox2"></label>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center name-role"><span class="w-space-no">${role.name}</span></div>
                        </td>
                        <td>${formatDate(role.created_at)}</td>
                        <td>${formatDate(role.updated_at)}</td>
                        <td>
                            <div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Active</div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-secondary shadow btn-xs sharp me-1 edit-role" data-id="${role.id}"><i class="fas fa-pencil-alt"></i><span class="tooltiptext">Edit Role</span></a>
                                <a href="#" class="btn btn-danger shadow btn-xs sharp delete-role" data-id="${role.id}"><i class="fa fa-trash"></i><span class="tooltiptext">Delete Role</span></a>
                                <a href="${listRolePermissionsUrl.replace(':id', role.id)}" class="btn btn-secondary shadow btn-xs sharp mx-2 assign-permissions-to-role" data-id="${role.id}">
                                    <i class="fa fa-user-lock"></i><span class="tooltiptext">Assign Permissions To Role</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                `);
            });

            // Update pagination links
            $(".pagination").html(`
                <li class="page-item ${response.links.prev ? '' : 'disabled'}">
                    <a class="page-link" href="javascript:void(0)" onclick="listRoles(${response.meta.current_page - 1}, '${search}')">
                        <i class="la la-angle-left"></i>
                    </a>
                </li>
                ${Array.from({length: response.meta.last_page}, (_, i) => i + 1).map(pageNumber => `
                    <li class="page-item ${response.meta.current_page === pageNumber ? 'active' : ''}">
                        <a class="page-link" href="javascript:void(0)" onclick="listRoles(${pageNumber}, '${search}')">
                            ${pageNumber}
                        </a>
                    </li>
                `).join('')}
                <li class="page-item ${response.links.next ? '' : 'disabled'}">
                    <a class="page-link" href="javascript:void(0)" onclick="listRoles(${response.meta.current_page + 1}, '${search}')">
                        <i class="la la-angle-right"></i>
                    </a>
                </li>
            `);
        },
        error: function(error) {
            displayToastrError();
            console.error('Error fetching roles:', error);
        }
    });
}
function displayToastrError(message = "An unexpected error occurred")
{
    toastr.error(message, "Error", {
        positionClass: "toast-top-right",
        timeOut: 5e3,
        closeButton: !0,
        debug: !1,
        newestOnTop: !0,
        progressBar: !0,
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        tapToDismiss: !1
    })
}

function displayToastrWarning(message)
{
    toastr.warning(message, "Warning", {
        positionClass: "toast-top-right",
        timeOut: 5e3,
        closeButton: !0,
        debug: !1,
        newestOnTop: !0,
        progressBar: !0,
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        tapToDismiss: !1
    })
}
function displayToastrSuccess(message)
{
    toastr.success(message, "Confirmation", {
        timeOut: 5000,
        closeButton: !0,
        debug: !1,
        newestOnTop: !0,
        progressBar: !0,
        positionClass: "toast-top-center",
        preventDuplicates: !0,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
        tapToDismiss: !1
    })
}
function SaveRoleOperation(typeBtnClicked='save-only')
{
    var roleNameValue = $(".role-name-input").val();

    if (typeof roleNameValue === 'undefined' || roleNameValue === null || roleNameValue =='')
    {
        $(".role-name-input").css("border","1px solid #E23428");
        $(".role-name-input-error-msg").text("the role name is required");
        return
    }

    var formData = new FormData()
    formData.append('role',roleNameValue)
    var idRole = $('.role-id-input').val();
    if(idRole != '')
        formData.append('id',idRole);

    $.ajax({
        url: storeRoleUrl,
        type: "POST",
        data: formData,
        contentType: false, // Required for file uploads
        processData: false, // Required for file uploads
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            if(typeBtnClicked == 'save-only')
                $('.add-role-modal').modal('hide');
            else
                $(".role-name-input").val("");

            displayToastrSuccess(response.message);
            listRoles();
        },
        error: function(error) {

            if(error.status == 500)
            {
                displayToastrError();
                console.log('Server error:', error.responseJSON.message);
            }else if (error.status == 400)
            {
                displayToastrError(error.responseJSON.errors.role[0])
                console.log('Validation error:', error.responseJSON.errors);
            }
            else if (error.status == 409)
            {
                displayToastrWarning(error.responseJSON.message);
                console.log('warning '+error.responseJSON.message)
            }
            else {
                displayToastrError();
                console.log('Unexpected error:', error);
            }

        }
    });
}

function formatDate(dateString) {
    const date = new Date(dateString);

    // Get the day, month, and year
    const day = String(date.getDate()).padStart(2, '0'); // Ensure two digits
    const month = String(date.getMonth() + 1).padStart(2, '0'); // Month is 0-indexed
    const year = String(date.getFullYear()).slice(-2); // Get last two digits of the year

    return `${day}/${month}/${year}`;
}

function deleteRole(id,url,event,title,text)
{
    Swal.fire({
        title: title,
        text: text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#F58634",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.value == true) {
            var formData = new FormData();
            formData.append('id',id);
            $.ajax({
                url: url,
                type: 'POST',
                data:formData,
                contentType: false, // Required for file uploads
                processData: false, // Required for file uploads
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {

                    const row = $(event.target).closest('tr');
                    row.remove();
                    // listRoles();
                    displayToastrSuccess(response.message);
                },
                error: function (error) {
                    displayToastrError();
                    console.log('Server error:', error.responseJSON.message);

                }
            });
        }
    });

}

function deleteRoles(ids,url,event,title,text)
{
    Swal.fire({
        title: title,
        text: text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#F58634",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.value == true) {
            var formData = new FormData();
            ids.forEach(function (id) {
                console.log(id);
                formData.append('ids[]', id); // Append the ID to FormData
            });
            $.ajax({
                url: url,
                type: 'POST',
                data:formData,
                contentType: false, // Required for file uploads
                processData: false, // Required for file uploads
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {

                    ids.forEach(function (id) {
                        $('input[data-id="' + id + '"]').closest('tr').fadeOut(300, function () {
                            $(this).remove();
                        });
                    });
                    // listRoles();
                    displayToastrSuccess(response.message);
                },
                error: function (error) {
                    displayToastrError();
                    console.log('Server error:', error.responseJSON.message);

                }
            });
        }
    });

}
