<!DOCTYPE html>
<html>
<head>
  <title>Payment Form</title>
  <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>Payment Form</title>
</head>
<body>
  <h1>Payment Form</h1>
  <form id="paymentForm" action="process_payment.php" method="POST">
    <label for="cardNumber">Card Number:</label>
    <input type="text" id="cardNumber" name="cardNumber" placeholder="Card Number" required><br><br>
    <label for="expiryDate">Expiry Date:</label>
    <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required><br><br>
    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" placeholder="CVV" required><br><br>
    <label for="amount">Amount:</label>
    <input type="text" id="amount" name="amount" placeholder="Amount" required><br><br>
    <input type="submit" value="Pay Now">
  </form>

  <script>
    // Handle payment form submission
    document.getElementById('paymentForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from submitting

      // Collect payment data
      var cardNumber = document.getElementById('cardNumber').value;
      var expiryDate = document.getElementById('expiryDate').value;
      var cvv = document.getElementById('cvv').value;
      var amount = document.getElementById('amount').value;

      // Perform additional validation if needed

      // Make AJAX request to process payment
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'process_payment.php', true);
      xhr.setRequestHeader('Content-Type', 'application/json');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Payment successful
          console.log('Payment successful');
          // Redirect or show success message to the user
        } else {
          // Payment failed
          console.log('Payment failed');
          // Show error message to the user
        }
      };

      // Send payment data as JSON
      var data = JSON.stringify({ cardNumber: cardNumber, expiryDate: expiryDate, cvv: cvv, amount: amount });
      xhr.send(data);
    });
  </script>
</body>
</html>
</body>
</html>



