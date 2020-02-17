
$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    var form = $('#studForm');
    var tabs = $('#studTab');

    $('#addStudent').click(function () {
        $('#button_action').val("create-student");
        $('#button_action1').val("create-address");
        $('#studForm').trigger("reset");
        $('#modelHeading').html("Add New Student");
        $('#studentModal').modal('show');
    });



    $('body').on('click', '.edit-user', function () {
        var stud_id = $(this).data('id');
        $.ajax({

            url: "/students" + '/' + stud_id + '/edit',
            dataType: 'json',

            success: function (data) {

                $('#modelHeading').html("Edit Student");
                $('#button_action').val("edit-student");
                $('#studentModal').modal('show');

                $('#first_name').val(data.first_name);
                $('#stud_id').val(data.id);
                $('#last_name').val(data.last_name);
                $('#dob').val(data.dob);
                $('#b_group').val(data.bgroup_id);
                $('#tongue').val(data.mtongue_id);
                $('#religion').val(data.religion_id);
                $('#caste').val(data.caste_id);
                $('#community').val(data.comm_id);
                $('#aadhar').val(data.aadar_no);
                

            },
            error: function (data) {
                //              console.log('Error:', data);
                $('#res-message').html('Data is not inserted');
            }
        });
        $.ajax({

            url: "/Address" + '/' + stud_id + '/edit',
            dataType: 'json',

            success: function (data) {
                $('#button_action1').val("edit-address");

                $('#stud_id1').val(data.id);
                $('#building_no').val(data.building_no);
                $('#building_name').val(data.building_name);
                $('#street').val(data.street);
                $('#area').val(data.area);
                $('#road').val(data.road);
                $('#locality').val(data.locality);
                $('#city').val(data.city);
                $('#state').val(data.state);
                $('#pin_code').val(data.pin_code);

            },
            error: function (data) {
                //              console.log('Error:', data);
                $('#res-message').html('Data is not inserted');
            }
        });
    });
    $('#submitBtn').click(function (e) {
        e.preventDefault();
        $.ajax({

            data: $('#studAddress').serialize(),
            url: "/Address",
            type: "POST",
            dataType: 'json',

            success: function (data) {

                $('#res-message').show();
                $('#studAddress').trigger("reset");
                $('#res-message').html(data.success);
                $('#res-message').removeClass('alert alert-danger');
                $('#res-message').addClass('alert alert-success');

                setTimeout(function () {
                    $('#res-message').hide();

                }, 3000);
//                table.draw();

            },
            error: function (data) {
                //              console.log('Error:', data);
                $('#res-message').html('Data is not inserted');
                $('#res-message').removeClass('alert alert-success');
                $('#res-message').addClass('alert alert-danger');
            }
        });
    });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $.ajax({
            data: $('#studForm').serialize(),
            url: "/students",
            type: "POST",
            dataType: 'json',

            success: function (data) {
                if (data.id !== 0) {
                    $('#stud_id').val(data.id);
                    $('#stud_id1').val(data.id);

                    $('#studForm').trigger("reset");
//                    $('#message').html(data.success + data.id);
                    $('#message').html(data.success);

                    $('#message').removeClass('alert alert-danger');
                    $('#message').addClass('alert alert-success');
                }
                setTimeout(function () {
                    $('#message').fadeOut(2000);

                    save_cont(form, tabs);
                }, 3000);
//                table.draw();

            },
            error: function (data) {
                console.log('Error:', data);
             
                $('#message').html('Data is not inserted');
                $('#message').removeClass('alert alert-success');
                $('#message').addClass('alert alert-danger');
            }
        });
    });
    
    
//    $('#studentModal').on('hidden.bs.modal', function () {
//        location.reload();
//    });
    $('body').on('click', '.delete-user', function () {

        var stud_id = $(this).data('id');
        if (confirm("Are You sure want to delete !")) {

            $.ajax({
                type: "DELETE",
                url: "/students" + '/' + stud_id,
                success: function (data) {
//                    table.draw();

                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });

        }

    });
    
    $('#add_bgroup').click(function (e) {
        e.preventDefault();
        $.ajax({
            data: $('#addblood').serialize(),
            url: "/BloodGroup",
            type: "POST",
            dataType: 'json',

            success: function (data) {  

                    $('#bloodGroup-messages').html(data.success);

                    $('#bloodGroup-messages').removeClass('alert alert-danger');
                    $('#bloodGroup-messages').addClass('alert alert-success');
                
                setTimeout(function () {
                    $('#bloodGroup-messages').fadeOut(2000);

                    save_cont(form, tabs);
                }, 3000);
//                table.draw();

            },
            error: function (data) {
                console.log('Error:', data);
                $('#bloodGroup-messages').html('Data is not inserted');
                $('#bloodGroup-messages').removeClass('alert alert-success');
                $('#bloodGroup-messages').addClass('alert alert-danger');
            }
        });
    });
    
    $('#m_tongue').click(function (e) {
        e.preventDefault();
        $.ajax({
            data: $('#addMTongue').serialize(),
            url: "/Mtongue",
            type: "POST",
            dataType: 'json',

            success: function (data) {
                    $('#addMTongue').trigger("reset");
//                    $('#message').html(data.success + data.id);
                    $('#mtongue-messages').html(data.success);

                    $('#mtongue-messages').removeClass('alert alert-danger');
                    $('#mtongue-messages').addClass('alert alert-success');
                
                setTimeout(function () {
                    $('#mtongue-messages').fadeOut(2000);

                    save_cont(form, tabs);
                }, 3000);
//                table.draw();

            },
            error: function (data) {
                console.log('Error:', data);
                $('#mtongue-messages').html('Data is not inserted');
                $('#mtongue-messages').removeClass('alert alert-success');
                $('#mtongue-messages').addClass('alert alert-danger');
            }
        });
    });
    
    $('#add_comm').click(function (e) {
        e.preventDefault();
        $.ajax({
            data: $('#addComm').serialize(),
            url: "/communitiy",
            type: "POST",
            dataType: 'json',

            success: function (data) {
                    $('#addMTongue').trigger("reset");
//                    $('#message').html(data.success + data.id);
                    $('#comm-messages').html(data.success);

                    $('#comm-messages').removeClass('alert alert-danger');
                    $('#comm-messages').addClass('alert alert-success');
                
                setTimeout(function () {
                    $('#comm-messages').fadeOut(2000);

                    save_cont(form, tabs);
                }, 3000);
//                table.draw();

            },
            error: function (data) {
                console.log('Error:', data);
                $('#comm-messages').html('Data is not inserted');
                $('#comm-messages').removeClass('alert alert-success');
                $('#comm-messages').addClass('alert alert-danger');
            }
        });
    });
    
    $('#add_caste').click(function (e) {
        e.preventDefault();
        $.ajax({
            data: $('#addCaste').serialize(),
            url: "/Caste",
            type: "POST",
            dataType: 'json',

            success: function (data) {
                    $('#addMTongue').trigger("reset");
//                    $('#message').html(data.success + data.id);
                    $('#rel-messages').html(data.success);

                    $('#caste-messages').removeClass('alert alert-danger');
                    $('#caste-messages').addClass('alert alert-success');
                
                setTimeout(function () {
                    $('#caste-messages').fadeOut(2000);

                    save_cont(form, tabs);
                }, 3000);
//                table.draw();

            },
            error: function (data) {
                console.log('Error:', data);
                $('#caste-messages').html('Data is not inserted');
                $('#caste-messages').removeClass('alert alert-success');
                $('#caste-messages').addClass('alert alert-danger');
            }
        });
    });
    
    $('#add_rel').click(function (e) {
        e.preventDefault();
        $.ajax({
            data: $('#addRel').serialize(),
            url: "/communitiy",
            type: "POST",
            dataType: 'json',

            success: function (data) {
                    $('#addMTongue').trigger("reset");
//                    $('#message').html(data.success + data.id);
                    $('#rel-messages').html(data.success);

                    $('#rel-messages').removeClass('alert alert-danger');
                    $('#rel-messages').addClass('alert alert-success');
                
                setTimeout(function () {
                    $('#rel-messages').fadeOut(2000);

                    save_cont(form, tabs);
                }, 3000);
//                table.draw();

            },
            error: function (data) {
                console.log('Error:', data);
                $('#rel-messages').html('Data is not inserted');
                $('#rel-messages').removeClass('alert alert-success');
                $('#rel-messages').addClass('alert alert-danger');
            }
        });
    });
    
    function save_cont(form, tabs) {
        $(form).parent().removeClass('show active');
        $(form).parent().next().addClass('show active');
        $activeTab = $(tabs).find('.active');
        $activeTab.removeClass('active');
        $activeTab.next().addClass('active');
    }

//var table = $('.data-table').DataTable({
//        
//        ajax: "/students",
//        columns: [
//            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
//            {data: 'first_name', name: 'first_name'},
//            {data: 'last_name', name: 'last_name'},
//            {data: 'gender', name: 'gender'},
//            {data: 'action', name: 'action', orderable: false, searchable: false},
//        ]
//    });

});
        