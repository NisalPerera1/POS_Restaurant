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
