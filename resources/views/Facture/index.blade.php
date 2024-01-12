<!-- resources/views/user_products_form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User and Products</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyO/dCPR70mIaa2M/6uJf51uoG28JOMhS" crossorigin="anonymous">
    <!-- Include your other CSS stylesheets here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <h2>Add User and Products</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('saveUserProductsFacture') }}" method="POST">
        @csrf
        <!-- User Information -->
        <div class="form-group">
            <label for="name">User Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">User Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Product Selection -->
        <div class="form-group" id="productFieldsContainer">
            <label for="products">Select Products:</label>
            <div class="product-field">
                <select class="form-control" name="products[]" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->Nom }}</option>
                    @endforeach
                </select>
                <input type="number" class="form-control" name="quantities[]" placeholder="Quantity" required>
            </div>
        </div>

        <!-- Additional User and Facture Information -->
        <!-- Add more fields as needed -->

        <button type="button" class="btn btn-primary" id="addProductBtn">Add Product +</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Include Bootstrap JS and other JavaScript scripts here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-VEgISOnbUir7bYcUL2xiGqc/5cwL5A/S9HxMHAvqVM+AYPFb9d6U9j5ksgpFtnT8" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyO/dCPR70mIaa2M/6uJf51uoG28JOMhS" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            var productCounter = 1;
            var selectedProducts = [];

            // Event listener for the "Add Product" button
            $('#addProductBtn').click(function () {
                addProductField();
            });

            // Function to add product fields
            function addProductField() {
                var productFieldHtml = `
                    <div class="form-group">
                        <label for="product${productCounter}">Select Product:</label>
                        <select class="form-control" name="products[]" required>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->Nom }}</option>
                            @endforeach
                        </select>
                        <input type="number" class="form-control" name="quantities[]" placeholder="Quantity" required>
                    </div>
                `;

                // Append the product field to the container
                $('#productFieldsContainer').append(productFieldHtml);

                productCounter++;
            }

            // Event listener for form submission
            $('form').submit(function () {
                var selectedProductOptions = $('select[name="products[]"] option:selected');

                // Check for duplicate selections
                selectedProductOptions.each(function () {
                    var productId = $(this).val();
                    if (selectedProducts.includes(productId)) {
                        alert('Product ' + $(this).text() + ' is already selected.');
                    } else {
                        selectedProducts.push(productId);
                    }
                });
            });
        });
    </script>

    <!-- Include your other JavaScript scripts here -->

</body>
</html>
