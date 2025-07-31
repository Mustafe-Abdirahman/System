<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
  <!-- <style>
        body {
            font-family: Arial, sans-serif;
        }
        .invoice {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-header h1 {
            margin: 0;
        }
        .invoice-body {
            margin-bottom: 20px;
        }
        .invoice-body table {
            width: 100%;
            border-collapse: collapse;
        }
        .invoice-body table, .invoice-body th, .invoice-body td {
            border: 1px solid #000;
        }
        .invoice-body th, .invoice-body td {
            padding: 10px;
            text-align: left;
        }
        .invoice-footer {
            text-align: center;
        }
    </style> -->
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            
            <div class="col-12 col-lg-10 col-xl-12">
            <div class="col-md-4 mb-4">
                  <div class="card shadow">
                    <div class="card-body">
                      
                      <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">Add New Item</button>
                      <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true" ">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="varyModalLabel">Add New Item</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form id="ItemForm">
                                    <div class="col-md-12">
                                        <label for="invoiceNumberInput" class="small text-muted text-uppercase">Item Name #</label>
                                        <input type="text" id="ItemName" class="form-control" placeholder="Enter Item Name" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="dueDate" class="small text-muted text-uppercase">Quantity</label>
                                          <input type="text" id="update_products" nam="update_products" class="form-control" placeholder="Enter Vendor Name..." hidden>
                                        <input type="text" class="form-control" id="Quantity"  placeholder="Enter Quantity" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="dueDate" class="small text-muted text-uppercase">Unit Price </label>
                                        <input type="number" id="UnitPrice"  class="form-control" placeholder="Enter UnitPrice" oninput="calculateTotal()">
                                    </div>
                                  
                                    <div class="col-md-12">
                                        <label for="dueDate" class="small text-muted text-uppercase">Subtotal</label>
                                        <input type="number" id="Subtotal"  class="form-control" placeholder="Enter SubToatl" readonly>
                                    </div>
                                   
                                    <div class="modal-footer">
                                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn mb-2 btn-primary">Save the Information</button>
                                    </div>

                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
        
                  
                <div class="col-md-12 my-3">
                  <div class="card shadow">
                    <div class="card-body">
                      <h5 class="card-title">Quotation</h5>
                      <p class="card-text">You can download any quotation by pdf.</p>
                      <table class="table table-hover table-sm" id="ItemsTable">
                        <thead>
                        
                        </thead>
                        <tbody>
                       
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
     
                
                </div>

                
                 <!-- /.card -->
            </div>
        </div> <!-- .row justify-content-center -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->

<?php
include_once 'footer.php';
?>

<script src="../ps/Items.js"></script>

