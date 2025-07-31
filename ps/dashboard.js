load_staff();
load_kharashka_guud();
load_kharashka_gaarka();


function load_staff(){

    let sendingData={
        "action": "read_all_staff",
   }

   $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "../api/dashboard.php",
    data: sendingData,
    success: function(data){
        let response = data.data;
        let status  = data.status
      
        if (status) {
            document.querySelector("#tirada_shaqaalaha").innerText = (response['0'].shaql);    
         // console.log(response[0].member);
        }
    },
    error: function(data){

    }
   })
}

function load_kharashka_guud(){

    let sendingData={
        "action": "read_all_xisaabta_guud",
   }

   $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "../api/dashboard.php",
    data: sendingData,
    success: function(data){
        let response = data.data;
        let status  = data.status
      
        if (status) {
            document.querySelector("#kharashkaguud").innerText = (response['0'].dhigaal);    
         // console.log(response[0].member);
        }
    },
    error: function(data){

    }
   })
}



function load_kharashka_gaarka(){

    let sendingData={
        "action": "read_all_xisaabta_gaar",
   }

   $.ajax({
    method: "POST",
    dataType: "JSON",
    url: "../api/dashboard.php",
    data: sendingData,
    success: function(data){
        let response = data.data;
        let status  = data.status
      
        if (status) {
            document.querySelector("#kharashgaar").innerText = (response['0'].total);    
         // console.log(response[0].member);
        }
    },
    error: function(data){

    }
   })
}
