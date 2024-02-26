$(function () {
  $(".btnCreate").on("click", function () {
    $("#modalTitle").html("Create Product")
    $(".modal-footer button[type=submit]").html("Save Changes")
  })

  $(".editModal").on("click", function () {
    $("#modalTitle").html("Edit Product")
    $(".modal-footer button[type=submit]").html("Update Product")
    $(".modal-body form").attr(
      "action",
      "http://localhost/phpmvc/product/update"
    )

    const id = $(this).data("id")

    $.ajax({
      url: "http://localhost/phpmvc/product/getEditData",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#product_name").val(data.product_name)
        $("#price").val(data.price)
        $("#description").val(data.description)
        $("#id").val(data.id)
      },
    })
  })
})
