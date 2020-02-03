
$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     
    
    

    $('#addStudent').click(function () {
        $('#saveBtn').val("create-product");

        $('#studForm').trigger("reset");
        $('#modelHeading').html("Add New Student");
        $('#studentModal').modal('show');
    });



    $('body').on('click', '.edit-user', function () {
        var stud_id = $(this).data('id');
        $.get("/students" + '/' + stud_id + '/edit', function (data) {
            $('#modelHeading').html("Edit Student");
            $('#saveBtn').val("edit-user");
            $('#studentModal').modal('show');

            $('#first_name').val(data.first_name);
            $('#last_name').val(data.last_name);
            $('#gender').val(data.gender);
            $('#class_id').val(data.class_id);
            $('#sec_id').val(data.sec_id);
            $('#pho_no').val(data.pho_no);
            
            

        });
        
        $.get("/Address" + '/' + stud_id + '/edit', function (data) {
            
            $('#building_no').val(data.building_no);
            $('#building_name').val(data.building_name);
            $('#street').val(data.street);
            $('#area').val(data.area);
            $('#road').val(data.road);
            $('#locality').val(data.locality);
                        $('#city').val(data.city);
            $('#state').val(data.state);
            $('#pin_code').val(data.pin_code);

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
                $('#msg_div1').removeClass('d-none');

                setTimeout(function () {
                    $('#res-message').hide();
                    $('#msg_div1').hide();
                }, 3000);
//                table.draw();

            },
            error: function (data) {
                //              console.log('Error:', data);
                $('#res-message').html('Data is not inserted');
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
                }
                $('#message').show();
                $('#studForm').trigger("reset");
                $('#message').html(data.success + data.id);
                $('#msg_div').removeClass('d-none');

                setTimeout(function () {
                    $('#message').hide();
                    $('#msg_div').hide();
                }, 3000);
//                table.draw();

            },
            error: function (data) {
                console.log('Error:', data);
                $('#message').html('Data is not inserted');
            }
        });
    });

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
        