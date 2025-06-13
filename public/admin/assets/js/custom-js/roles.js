


$(function(){
        listRoles();

        $(".create-new-role").click(function () {
            $(".role-name-input").val("");
            $('.role-id-input').val("");
        });

        $(".role-name-input").click(function () {
            $(".role-name-input").css("border","1px solid #F78F34");
            $(".role-name-input-error-msg").text("");
        });

       $(".save-only-btn").click(function(){
           SaveRoleOperation();
       });

       $(".save-and-new-btn").click(function (){
           SaveRoleOperation("save-and-new");
       });

       // for search

        $('.search-role-input').on('input', function() {
            const searchValue = $(this).val();
            listRoles(1, searchValue);
        });

        //  delete role
        $(document).on('click', '.delete-role', function (e) {
            const id = $(this).attr('data-id');
            deleteRole(id,deleteRoleUrl,e,'Do you want to delete it ?','the operation is irreversal !');
        });
        // delete selected roles
        $('.selected-role-button').click(function(e){

            const checkedIds = $('.role-checkbox:checked').map(function () {
                return $(this).data('id'); // Get the role ID
            }).get();

            if(checkedIds.length > 0)
            {
                deleteRoles(checkedIds,deleteRolesUrl,e,'Do you want to delete selected role(s) ?','the operation is irreversal');
            }
            else
               displayToastrWarning('Choose at least one role');
        });


        $(document).on('click', '.edit-role', function (e) {
            const id = $(this).attr('data-id');
            const roleName = $(this).closest('tr').find('.name-role .w-space-no').text();
            $('.add-role-modal').modal('show');
            $('.role-name-input').val(roleName);
            $('.role-id-input').val(id);
        });

});
