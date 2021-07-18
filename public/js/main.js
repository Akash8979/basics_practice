function edit(id) {
    $('#edit').attr('hidden', false);
    $('#detail').attr('hidden', true);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var data = {
        id : id
    } 
    $.post("{{route('post.edit')}}", { user_id : data }, function (data) {

        console.log(data);
    });

};
// $('#update').submit(function (e) {
//     e.preventDefault(e);
//     $.ajax({

//         url: "",
//         ContentType: false,
//         method: 'post',
//         dataType: 'json',
//         processData: false,
//         data: new FormData(this),

//     });
// });