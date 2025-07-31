loadData();
let btnAction = "Insert";
calculateTotal();







function calculateTotal() {
    var qty = document.getElementById('Quantity').value;
    var amount = document.getElementById('UnitPrice').value;
    var total = qty * amount;
    document.getElementById('Subtotal').value = total;
}









$("#ItemForm").submit("click", function(e){
    e.preventDefault();

    let ItemName = $("#ItemName").val(); 
    let Quantity = $("#Quantity").val();
    let UnitPrice = $("#UnitPrice").val();
    let Subtotal = $("#Subtotal").val();
    let id = $("#update_products").val();
 
    let sendingData = {};

    if (btnAction == "Insert") {
        sendingData = {
            
            ItemName: ItemName,
            Quantity: Quantity,
            UnitPrice: UnitPrice,
           Subtotal: Subtotal,
          
            "action": "Register_Item"
            
        }
        
    }else{
        sendingData = {
            id: id,
            ItemName: ItemName,
            Quantity: Quantity,
            UnitPrice: UnitPrice,
           Subtotal: Subtotal,
            "action": "Update_Item"
        }
    }

    $.ajax({
        method: "POST",
        dataType: "JSON",
        url: "../api/Items.php",
        data: sendingData,

        success: function(data){
            let response = data.data;
            let status = data.status

            if (status) {
               loadData();
                alert(response);
               
               
            }
        },
        error: function(data){
           let  response = data.data;
           let  status = data.status;
        }

    })

    
    
})




function loadData() {
  $("#ItemsTable tr").html("");
  let sendingData = {
    action: "fetchItemByID",
  };

  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "../api/Items.php",
    data: sendingData,
    success: function (data) {
      let response = data.data;
      let status = data.status;
      let th = "";
      let tr = "";
      let html = "";

      if (status) {
        response.forEach((res) => {
          th = "<tr>";
          for (let r in res) {
            th += `<th>${r}</th>`;
          }
          th += "<th>Action</th></tr>";

          tr += "<tr>";
          for (let r in res) {
            tr += `<td>${res[r]}</td>`;
          }
          tr += `<td><a class="btn btn-primary update_products" update_products=${res["Id"]}><i class="fe fe-check-square"style="color:white"></i></a>
                <a class="btn btn-danger delete_vendor" delete_vendor=${res["Id"]}><i  class="fe fe-trash-2" style="color:white"></i></a></td>`;
          tr += "</tr>";
        });
        $("#ItemsTable thead").append(th);
        $("#ItemsTable tbody").append(tr);
      }
    },
    error: function (data) {},
  });
}


function Delete_Items(id) {
  let sendingData = {
    id: id,
    action: "Delete_Item",
  };
  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "../api/Items.php",
    data: sendingData,
    success: function (data) {
      let response = data.data;
      let status = data.status;
      let th = "";
      let tr = "";
      let html = "";

      if (status) {
        loadData();
      }
    },
    error: function (data) {},
  });
}

function fetch_product_id(id) {
  let sendingData = {
    id: id,
    action: "fetch_products_id",
  };
  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "../api/Items.php",
    data: sendingData,
    success: function (data) {
      let response = data.data;
      let status = data.status;
      let th = "";
      let tr = "";
      let html = "";

      if (status) {
        btnAction = "Update";
        $("#update_products").val(response[0].Id);
        $("#ItemName").val(response[0].ItemName);
        $("#Quantity").val(response[0].Quantity);
        $("#UnitPrice").val(response[0].UnitPrice);
        $("#Subtotal").val(response[0].Subtotal);
        

        $("#varyModal").modal("show");

        loadData();
      }
    },
    error: function (data) {},
  });
}






$("#ItemsTable").on("click", "a.update_products", function () {
  let id = $(this).attr("update_products");
  console.log(id);
  fetch_product_id(id);
});

$("#ItemsTable").on("click", "a.delete_vendor", function () {
  let id = $(this).attr("delete_vendor");
  if (confirm("Are you Sure to delete")) {
    Delete_Items(id);
  }
});