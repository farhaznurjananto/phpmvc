// jquery --------------------------------
$(function () {
  $(".insertModal").on("click", function () {
    $("#formModalLabel").html("Insert New Data Staff");
    $(".modal-footer button[type=submit]").html("Insert");
  });

  $(".updateModal").on("click", function () {
    $("#formModalLabel").html("Update Data Staff");
    $(".modal-footer button[type=submit]").html("Update");
    $(".modal-body form").attr("action", "http://localhost/phpmvc/public/staff/update");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/public/staff/getUpdate",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#name").val(data.name);
        $("#email").val(data.email);
        $("#mobile").val(data.mobile);
      },
    });

    // reset form fill can't
  });
});
