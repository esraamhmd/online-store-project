<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <h1>Welcome to Payment Page</h1>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enter Payment Information</h5>
                        <form action="process_payment.php" method="post" id="paymentForm">
                            <div class="mb-3">
                                <label for="card_number" class="form-label">Card Number</label>
                                <input type="text" class="form-control" id="card_number" name="card_number" pattern="[0-9]{16}" title="Please enter a 16-digit card number" required>
                            </div>
                            <div class="mb-3">
                                <label for="expiry_date" class="form-label">Expiry Date (MM/YYYY)</label>
                                <input type="text" class="form-control" id="expiry_date" name="expiry_date" pattern="^(0[1-9]|1[0-2])\/\d{4}$" title="Please enter a valid expiry date in the format MM/YYYY" required>
                            </div>
                            <div class="mb-3">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cvv" name="cvv" pattern="[0-9]{3,4}" title="Please enter a 3 or 4-digit CVV" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit_payment" onclick="showSuccessMessage()">Submit Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="payment.js"></script>
    <script>
        function showSuccessMessage() {
            alert("Payment process successful!");
        }
    </script>
</body>
</html>
