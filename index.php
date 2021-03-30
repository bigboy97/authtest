<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth.net Test Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Auth.net Test Site</h1>
            </div><!--END COL-->
        </div><!--END ROW-->
    </div><!--END CONTAINER-->

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="Description" class="form-label">Description</label>
                        <select class="form-select" aria-label="Description Selection" id="Description">
                            <option selected>Please Select A Payment Description</option>
                            <option value="Accounting Services">Accounting Services</option>
                            <option value="Financial Reports">Financial Reports</option>
                            <option value="Tax Preparation">Tax Preparation</option>
                            <option value="Estates and Trusts">Estates and Trusts</option>
                            <option value="Gas Lease and Royalties">Gas Lease and Royalties</option>
                        </select>
                    </div><!--END DIV-->
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text">.00</span>
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="FirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="FirstName">
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="LastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="LastName">
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="Address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="Address">
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="City" class="form-label">City</label>
                        <input type="text" class="form-control" id="City">
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="State" class="form-label">State</label>
                        <input type="text" class="form-control" id="State">
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="Country" class="form-label">Country</label>
                        <input type="text" class="form-control" id="Country">
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="PaymentMethod" class="form-label">Payment Method</label>
                        <select class="form-select" aria-label="Payment Method" id="PaymentMethod">
                            <option selected>Please Select A Payment Description</option>
                            <option value="VISA">VISA</option>
                            <option value="MasterCard">MasterCard</option>
                            <option value="AMEX">AMEX</option>
                            <option value="Discover">Discover</option>
                        </select>
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="CreditCardNumber" class="form-label">Credit Card Number</label>
                        <input type="password" class="form-control" id="CreditCardNumber">
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="ExpirationDate" class="form-label">Expiration Date (MM/YY)</label>
                        <input type="text" class="form-control" id="ExpirationDate">
                    </div><!--END DIV-->
                    <div class="mb-3">
                        <label for="SecurityCode" class="form-label">SecurityCode</label>
                        <input type="text" class="form-control" id="SecurityCode">
                    </div><!--END DIV-->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form><!--END FORM-->
            </div><!--END COL-->
        </div><!--END ROW-->
    </div><!--END CONTAINER-->
</body>
</html>