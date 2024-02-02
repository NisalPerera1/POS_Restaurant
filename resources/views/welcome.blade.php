@extends('layouts.app')

@section('content')

  <section class="section">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-7">
          <div class="card-style mb-30">
            <div class="title d-flex flex-wrap align-items-center justify-content-between">
              <div class="col-xl-6 col-lg-4 col-sm-6">
                <div class="icon-card mb-301">
                  <div class="content">
                      <div class="CustomerInfo">
                          @if(session('customer'))
                              <h6 class="customer">Customer:</h6>
                              <h6 class="customerdata">{{ session('customer')->name }}</h6>
                          @endif
                      </div>
                  </div>
              </div>
              
                <!-- End Icon Cart -->
              </div>
              




<div class="col-xl-3 col-lg-4 col-sm-6" id="customerSection">
    <div class="icon-card mb-30">
        <div class="content">
            <div class="icon success">
                <img src="assets/images/user.png" alt="Search Image" class="custom-image-size">
            </div>
            <h6 class="HeadBox text-bold mb-10">Customer</h6>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
      // Target the customer section by its id
      $('#customerSection').click(function() {
          // Load and show the create customer modal
          $.get("{{ route('customers.create') }}", function(data) {
              // Append the modal HTML to the body
              $('body').append(data);
              // Trigger the modal to show
              $('#createCustomerModal').modal('show');
          });
      });
  });
</script>


              <!-- End Col -->
  
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                  
                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/user.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">Steward</h6>
                  
                  </div>
                </div>
                <!-- End Icon Cart -->
              </div>
              <!-- End Col -->
  
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                  
                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/table.jpg" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">Table Id</h6>
                  
                  </div>
                </div>
              </div>
            </div>


          <div class="amount">
            <div class="row">
                      <div class="col-lg-7">
                        <div class="icon-card2 mb-30">
                        <div class="content">
                          <h6 class="mb-10">Pick Up</h6>
                          
                        </div>
                        <label class="switch">
                          <input type="checkbox" class ="checkbox" >
                          <span class="slider"></span>
                      </label>
                      </div>
                    </div>
                    
                    <div class="col-lg-5 align-self-end">
                      <div class="icon-card2 mb-30">
                        <div class="content">
                          <h6 class=" amounth6 mb-10">Net Amount (Rs): 40.00</h6>
                        
                        </div>
                      </div>
                  </div>
                  <hr>
                                  <!-- Table -->
        <div class="row">
              <div class="table-container">
                <table class="table table-hover">
                  <thead>
                        <tr>
                          <th>NO</th>
                          <th>CODE</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>QTY</th>
                          <th>Amount</th>
                        </tr>
                      </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>ABC123</td>
                            <td>Product A</td>
                            <td>$20.00</td>
                            <td>2</td>
                            <td>$40.00</td>
                          </tr>                             
                         </tbody>
                    </table>
                </div>
        </div>
          <!-- end of table -->
                </div>

            </div>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-5">
          <div class="row3">

          <!-- First Row -->
          <div class="row">
            <!-- First Card -->
            <div class="col-lg-4 mb-30">
                <div class="icon-card">
                  <a href="#">
                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/search.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">SEARCH</h6>
                  </div>
                </a>
                </div>
                <!-- End Icon Card -->
            </div>
            <!-- End First Card -->
        
            <!-- Second Card -->
            <div class="col-lg-4 mb-30">
                <div class="icon-card">
                  <a href="#">
                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/reset.jpg" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">RESET</h6>
                  </div>
                </a>
                </div>
            </div>
            <!-- End Second Card -->
        
            <!-- Third Card -->
            <div class="col-lg-4 mb-30">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/print.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">REPRINT</h6>
                  </div>
                </a>
                </div>
                <!-- End Icon Card -->
            </div>
            <!-- End Third Card -->
          </div>
          <!-- End First Row -->
        
          <!-- Second Row -->
          <div class="row">
            <!-- Fourth Card -->
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/remark.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">REMARKS</h6>
                  </div>
                </a>
                </div>
            </div>
            <!-- End Fourth Card -->
        
            <!-- Fifth Card -->
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/clear.jpg" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">CLEAR</h6>
                  </div>
                </a>
                </div>

            </div>
            <!-- End Fifth Card -->
        
            <!-- Sixth Card -->
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/cancel.jpg" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">CANCEL</h6>
                  </div>
                </a>
                </div>
            </div>
            <!-- End Sixth Card -->
          </div>
          <!-- End Second Row -->
        

          <div class="row">
            <div class="col-lg-4 mb-31" >
              <div class="icon-card" >
                <a href="#">
                <div class="content">

                    <div class="icon success">
                      <img src="assets/images/takeaway.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">TAKE AWAY / PICKUP</h6>
                  </div>
                  </a>

                </div>
            </div>
        
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/pickuporder.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">PICKUP ORDER LIST</h6>
                  </div>
                </a>
                </div>

            </div>
        


            <div class="col-lg-4 mb-31">
              <div class="icon-card">
                <a href="#">

                <div class="content">
                  <div class="icon success">
                    <img src="assets/images/diningorderlist.jpg" alt="Search Image" class="custom-image-size">
                  </div>
                  <h6 class="HeadBox text-bold mb-10">DINING ORDER LIST</h6>
                </div>
              </a>
              </div>

          </div>
          </div>
        

          <div class="row">
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/diningorder.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">DINING ORDER</h6>
                  </div>
                </a>
                </div>
            </div>
        
            <div class="col-lg-4 mb-31">
              <div class="icon-card">
                <a href="#">

                <div class="content">
                  <div class="icon success">
                    <img src="assets/images/discount.png" alt="Search Image" class="custom-image-size">
                  </div>
                  <h6 class="HeadBox text-bold mb-10">NET DIS % </h6>
                </div>
              </a>
              </div>
          </div>
        
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/payment.jpg" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">PAYMENT</h6>
                  </div>
                </a>
                </div>
            </div>
          </div>
        

          <div class="row">
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/cashin.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">CASH IN</h6>
                  </div>
                </a>
                </div>
            </div>
        
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/cashout.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">CASH OUT</h6>
                  </div>
                </a>
                </div>

            </div>
        
            <div class="col-lg-4 mb-31">
                <div class="icon-card3">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/hold2.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox2 text-bold mb-10">HOLD</h6>
                  </div>
                </a>
                </div>
            </div>
          </div>
        

          <div class="row">
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/recall.jpg" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">RECALL</h6>
                  </div>
                </a>
                </div>
            </div>
        
            <div class="col-lg-4 mb-31">
                <div class="icon-card3">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/closebill2.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox2 text-bold mb-10">BILL CLOSE</h6>
                  </div>
                </a>
                </div>

            </div>
        
            <div class="col-lg-4 mb-31">
                <div class="icon-card">
                  <a href="#">

                  <div class="content">
                    <div class="icon success">
                      <img src="assets/images/exit.png" alt="Search Image" class="custom-image-size">
                    </div>
                    <h6 class="HeadBox text-bold mb-10">EXIT</h6>
                  </div>
                </a>
                </div>
            </div>
          </div>
        </div>

        </div>
        
    </div>
    <!-- end container -->
  </section>


@endsection