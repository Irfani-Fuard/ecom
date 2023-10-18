// view data
$(document).on("click", ".update", function (e) {
    var id = $(this).attr("data-id");
    var category = $(this).attr("data-category");
    var feature = $(this).attr("data-feature");
    $("#id_u").val(id);
    $("#category_u").val(category);
    $("#feature_u").val(feature);

  });
  
  //delete data
  $(document).on("click", ".delete", function () {
    var recordid = $(this).attr("data-id");
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url: "save-feature.php",
          type: "POST",
          cache: false,
          data: {
            type: 3,
            id: recordid,
          },
          success: function (dataResult) {
            location.reload();
  
            $("#" + dataResult).remove();
          },
        });
        Swal.fire(
            'Deleted!',
            'Record Deleted Successfully',
            'success'
          );
         
      } else {
        Swal.fire('Your record is safe.');
      }
    });
  });
  
 