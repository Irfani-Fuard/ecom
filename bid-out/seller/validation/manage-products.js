// view data
$(document).on("click", ".update", function (e) {
    var id = $(this).attr("data-id");
    var pname = $(this).attr("data-pname");
    var description = $(this).attr("data-description");
    var category = $(this).attr("data-category");
    var feature= $(this).attr("data-feature");
    var pstatus= $(this).attr("data-pstatus");
    var price = $(this).attr("data-price");
    var cutoff = $(this).attr("data-cutoff-price");
    var stock = $(this).attr("data-stock");
   
    $("#id_u").val(id);
    $("#pname_u").val(pname);
    $("#category_u").val(category);
    $("#feature_u").val(feature);
    $("#status_u").val(pstatus);
    $("#description_u").val(description);
    $("#price_u").val(price);
    $("#cprice_u").val(cutoff);
    $("#stock_u").val(stock);

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
          url: "save-product.php",
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
  
 