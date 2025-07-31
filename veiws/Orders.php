<?php

include_once 'header.php';
include_once 'sidebar.php'


?>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            <h2 class="page-title">Order </h2>
              <p class="text-muted">Add all ordered Items </p>
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Add Info</strong>
                </div>
                <div class="card-body">
                 <div class="row">
                 <div class="col-md-12">
                    <form  id="orderForm">
                    
                      <div class="form-group mb-3">
                        <label for="simpleinput">Customer Name</label>
                        <input type="text" name="Cname" required id="Cname" placeholder="Enter Customer Name..." class="form-control">
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-email">OrderDate</label>
                        <input type="date" id="OrderDate" required  name="OrderDate" class="form-control">
                      </div>
                    
                      <div  class="form-group mb-3">
                        <label>Select Status</label>
                        <select name="Status" id="Status" class="form-control mb-3" required>
                            <option class="form-group mb-3" value="Draft">Draft</option>
                            <option class="form-group mb-3" value="Confirmed">Confirmed</option>
                            <option class="form-group mb-3" value="Inprogress">In Progress</option>
                            <option class="form-group mb-3" value="Done">Done</option>
                        </select>
                      </div>
                        <div class="form-group mb-3">
                        <label for="example-email">Total Price </label>
                        <input type="text" id="Price" name="Price" required class="form-control" placeholder="Enter Total Price...">
                      </div>
                          <div  class="form-group mb-3">
                        <label>Select Item Name</label>
                        <select name="ItemName" id="ItemName" class="form-control mb-3" required>
                            <option value="0" selected disabled> Select Item Name</option>
                        </select>
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-email"> </label>
                        <button id="keydixogta" class="form-control btn btn-primary">Save the Info</button>
                      </div>
                    
                    </div> <!-- /.col -->
                   
                     
                    

                   
                    </form>
                    </div>
                   </div>
                   <h4>All Order Listt</h4> 
                   
                  <div class="row">
                    <div class="col-md-12">
                    <table class="table table-hover" id="orderTable">
                        <thead class="thead-dark">
                          
                        </thead>
                        <tbody>
                     
                         
                        
                        </tbody>
                      </table>

                    </div>

                    <div class="modal fade" id="zero" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="varyModalLabel">Update Products</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <div class="col-md-12">
                            <form  id="orderForm">

                            <div class="form-group mb-3">
                                <label for="simpleinput">Products Name:   </label>
                                <input type="text" id="update_products1" name="update_products1" class="form-control" placeholder="Enter Vendor Name..." hidden>
                                <input type="text" id="pname1" class="form-control" placeholder="Enter Vendor Name...">
                            </div>
                          
                           <div class="form-group mb-3">
                            <label for="simpleinput">Select Vendor Name:   </label>
                            <select name="vname1" id="vname1" class="form-control">
                                <option value="0" selected disabled> Select Vendor Name</option>
                              
                            </select>
                           </div>


                           <div class="form-group mb-3">
                              <label for="simpleinput">Select Category Name:   </label>
                              <select name="cname1" id="cname1" class="form-control">
                                  <option value="0" selected disabled> Select Category Name</option>
                                
                              </select>
                           </div>
                          
                          <div class="form-group mb-3">
                              <label for="simpleinput">Quantity:   </label>
                              <input type="number" id="qty1" name="qty1" class="form-control" placeholder="Enter Product Name..."> 
                          </div>

                          <div class="form-group mb-3">
                            <label for="simpleinput">Unit Price:   </label>
                            <input type="number" id="unit_price1" name="unit_price1" class="form-control" placeholder="Enter Product Name..."> 
                          </div>


                          <div class="form-group mb-3">
                              <label for="simpleinput">Sales Price:   </label>
                              <input type="number" id="sprice1" name="sprice1" class="form-control" placeholder="Enter Sales Price..." onkeyup="subt1()">
                          </div>
                            
                          <div class="form-group mb-3">
                              <label for="simpleinput">Profit:   </label>
                              <input type="text" id="profit1" name="profit1" class="form-control" placeholder="Profit" readonly>
                          </div>
                          
                          <div class="modal-footer">
                                  <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn mb-2 btn-primary">Update Vendor</button>
                          </div>
                            
                            </form>
                            </div>
                            </div>
                           
                          </div>
                        </div>
                      </div>
                   </div> 
                  </div>
                  </div>
                       
                </div>     
                    
              </div> 
            </div>
             <!-- .col-12 -->
          </div> 
          
          <!-- .row -->
        </div> <!-- .container-fluid -->
      
       
      </main> <!-- main -->
    </div> <!-- .wrapper -->
   

<?php

include_once 'footer.php';

?>

<script src="../ps/Orders.js"></script>