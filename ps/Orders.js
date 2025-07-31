load_all_data();
Load_Items_By_Name();




let btnAction = "Insert";




$("#orderForm").submit("click", function(e){
    e.preventDefault();

    let Cname = $("#Cname").val();
    let OrderDate = $("#OrderDate").val();
    let Price = $("#Price").val();
    let Status = $("#Status").val(); 
    let ItemName = $("#ItemName").val();
   

    let sendingData = {};

    if (btnAction == "Insert") {
        sendingData = {
            "Cname": Cname,
            "OrderDate": OrderDate,
            "Price": Price,
            "Status": Status,
            "ItemName": ItemName,
          
            "action": "register_order"
            
        }
        
    }

    $.ajax({
        method: "POST",
        dataType: "JSON",
        url: "../api/Orders.php",
        data: sendingData,

        success: function(data){
            let response = data.data;
            let status = data.status

            if (status) {
                 load_all_data();
                alert(response);
               
                
            }
        },
        error: function(data){
           let  response = data.data;
           let  status = data.status;
        }

    })

    
    
})




function load_all_data(){
    $("#orderTable tr").html('');
    let sendingData = {
        "action": "read_all_Orders"
    }

    $.ajax({
        method: "POST",
        dataType: "JSON",
        url: "../api/Orders.php",
        data: sendingData,
        success: function(data){
            let response = data.data;
            let status  = data.status
            let th = '';
            let tr = '';
            let html = '';
    
            if (status) {
    
                response.forEach(res=>{
    
                    th = "<tr>";
                    for(let r in res){
                        th +=  `<th>${r}</th>`
                    }
                    th += "<th>Action</th></tr>";
    
                    tr +="<tr>";
                    for(let r in res){
                        tr += `<td>${res[r]}</td>`;
                    }
                    tr += `<td><a class="btn btn-primary update_products" update_products=${res['Id']}><i class="fe fe-check-square"style="color:white"></i></a>
                    <a class="btn btn-danger delete_vendor" delete_vendor=${res['id']}><i  class="fe fe-trash-2" style="color:white"></i></a></td>`
                    tr += "</tr>"
                })
                $("#orderTable thead").append(th);
                $("#orderTable tbody").append(tr);
                
            }
        },
        error: function(data){
    
        }
       })
}

// worked
function Load_Items_By_Name() {
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
          html += `<option value="${res["id"]}">${res["ItemName"]}</option>`;
        });

        $("#ItemName").append(html);
      }
    },
    error: function (data) {},
  });
}





//update the data 
function fetch_product_id(id) {
  let sendingData = {
    id: id,
    action: "Fetch_Orders_By_ID",
  };
  $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "../api/Orders.php",
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
        $("#Cname").val(response[0].CustomerName);
        $("#OrderDate").val(response[0].OrderDate);
        $("#Status").val(response[0].Status);
        $("#ItemName").val(response[0].ItemName);
        $("#Price").val(response[0].Price);
       

        $("#zero").modal("show");

        loadData();
      }
    },
    error: function (data) {},
  });
}



$("#orderTable").on("click", "a.update_products", function () {
  let id = $(this).attr("update_products");
  console.log(id);
 
  fetch_product_id(id);
});