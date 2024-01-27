@extends('layouts.index')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<script>
    // Display modal if there are validation errors
    @if($errors->any())
        $(document).ready(function() {
            $('#addCategoryModal').modal('show');
        });
    @endif

    // Display toastr message if there is a session message
   
</script>
<div class="container  mx-auto px-2">        
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">                    
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-medium text-xl mb-1 block dark:text-slate-100">Produit</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Tables</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Produit</li>
                                </ol>
                            </div>
                            <div class="flex items-center">
                            <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600" data-toggle="modal" data-target="#addProductModal">Ajouter Produit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
    <center>
  @if (session('success'))
  <div class="alert alert-success" role="alert">
    {{session('success')}}
  </div>
  @endif
</center>
<style>
    /* Style for the search container */
    .search-container {
        max-width: 300px; /* Adjust the maximum width as needed */
        margin: 0 auto; /* Center the container horizontally */
    }

    /* Style for the search input */
    #searchInput {
        width: 100%; /* Take up the full width of the container */
        padding: 10px; /* Add padding for better visual appeal */
        border: 1px solid #ccc; /* Add a border to the input */
        border-radius: 5px; /* Add some border-radius for rounded corners */
        box-sizing: border-box; /* Include padding and border in the element's total width and height */
    }
</style>

<div class="container mx-auto px-2 min-h-[calc(100vh-138px)]  relative pb-14 ">         
        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
          
            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Produit</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <!-- component -->
                        <div class="relative overflow-x-auto  sm:rounded">
<!-- Wrap the search input in a container for better styling -->
<div class="search-container mb-4">
    <input type="text" id="searchInput" placeholder="Search products" class="form-control">
</div>

<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-collapse border-gray-300"  id="productTable">
    <thead class="bg-white border-b border-gray-300">
        <tr>
            <th scope="col" class="px-6 py-4 text-lg font-semibold border-r border-gray-300">
                Id
            </th>
            <th scope="col" class="px-6 py-4 text-lg font-semibold border-r border-gray-300">
                Nom
            </th>
            <th scope="col" class="px-6 py-4 text-lg font-semibold border-r border-gray-300">
                Quantité
            </th>
            <th scope="col" class="px-6 py-4 text-lg font-semibold border-r border-gray-300">
                Prix
            </th>
            <th scope="col" class="px-6 py-4 text-lg font-semibold border-r border-gray-300">
    Image
</th>
            <th scope="col" class="px-6 py-4 text-lg font-semibold border-r border-gray-300">
                Catégorie
            </th>
            <th scope="col" class="px-6 py-4 text-lg font-semibold border-r border-gray-300">
                Date de création
            </th>
            <th scope="col" class="px-6 py-4 text-lg font-semibold">
                Action
            </th>
        </tr>
    </thead>
    <tbody class="bg-gray-200">
        @forelse($products as $Produit)
 <tr class="bg-white dark:bg-slate-900/95">
            <td class="px-6 py-4 text-lg font-semibold border-r border-gray-300">
    {{ $Produit->id }}
</td>

<td class="px-6 py-4 text-lg border-r border-gray-300">
    {{ $Produit->Nom }}
</td>
<td class="px-6 py-4 text-lg border-r border-gray-300">
    <span class="flex items-center">
        <i class="fas fa-cubes mr-2"></i> <!-- Adjust the icon class accordingly -->
        {{ $Produit->quantite }}
    </span>
</td>

<td class="px-6 py-4 text-lg border-r border-gray-300">
    <span class="flex items-center">
        <i class="fas fa-money-bill-wave mr-2"></i> <!-- Adjust the icon class accordingly -->
        {{ $Produit->Prix }} TND
    </span>
</td>
<td class="px-6 py-4 text-lg border-r border-gray-300">
    @if ($Produit->image)
        <div class="flex items-center">
            <img src="{{ asset('storage/' . $Produit->image) }}" alt="{{ $Produit->Nom }}" class="w-14 h-14 rounded-full object-cover">
        </div>
    @else
        No Image
    @endif
</td>


<td class="px-6 py-4 text-lg border-r border-gray-300">
    <span class="flex items-center">
        <i class="fas fa-folder mr-2"></i> <!-- Adjust the icon class accordingly -->
        {{ $Produit->category->Nom }}
    </span>
</td>

<td class="px-6 py-4 text-lg border-r border-gray-300">
    <span class="flex items-center">
        <i class="far fa-calendar-alt mr-2"></i> <!-- Adjust the icon class accordingly -->
        {{ $Produit->created_at->format('d/m/Y') }}
    </span>
</td>


                <td class="px-6 py-4">
                <a href="#" class="text-blue-500 hover:text-blue-700 show-description-btn" data-toggle="modal" data-target="#showDescriptionModal" data-product-description="{{ $Produit->Description }}" data-product-name="{{ $Produit->Nom }}" data-product-image="{{ asset('storage/' . $Produit->image) }}">
    <i class="far fa-eye"></i>
</a>
    
                    <!-- Update Icon -->
                    <a href="#" class="text-green-500 hover:text-green-700 edit-product-btn" 
   data-toggle="modal" data-target="#editProductModal" 
   data-product-id="{{ $Produit->id }}" 
   data-product-name="{{ $Produit->Nom }}" 
   data-product-description="{{ $Produit->Description }}" 
   data-product-quantity="{{ $Produit->quantite }}" 
   data-product-price="{{ $Produit->Prix }}" 
   data-product-category="{{ $Produit->category->id }}">
   <i class="fas fa-pencil-alt"></i>
</a>

                    <!-- Delete Icon -->
                    <a href="#" class="text-red-500 hover:text-red-700 delete-product-btn" data-toggle="modal" data-target="#deleteProductModal" data-product-id="{{ $Produit->id }}" data-product-name="{{ $Produit->Nom }}">
    <i class="fas fa-trash"></i>
</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center py-4 text-gray-500 dark:text-gray-400 border-b border-gray-300">
                    Aucun produit trouvé.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>


<!-- Pagination Links -->
<br>

{{ $products->links() }}

                        </div>

                    </div><!--end card-body-->
                </div> <!--end card-->
                
            </div><!--end col--> 

                 
        </div><!--end inner-grid-->
        <!-- footer --> 
      

    
    </div><!--end container-->
<!-- Modal -->
<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Ajouter Produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for product input -->
                <form id="addProductForm" action="{{ route('add.product') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="productName">Nom du produit:</label>
                        <input type="text" class="form-control @error('productName') is-invalid @enderror" id="productName" name="productName" required value="{{ old('productName') }}">
                        @error('productName')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Description du produit:</label>
                        <textarea class="form-control @error('productDescription') is-invalid @enderror" id="productDescription" name="productDescription" required>{{ old('productDescription') }}</textarea>
                        @error('productDescription')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="productQuantity">Quantité:</label>
                        <input type="number" class="form-control @error('productQuantity') is-invalid @enderror" id="productQuantity" name="productQuantity" required value="{{ old('productQuantity') }}">
                        @error('productQuantity')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Prix:</label>
                        <input type="number" class="form-control @error('productPrice') is-invalid @enderror" id="productPrice" name="productPrice" required value="{{ old('productPrice') }}">
                        @error('productPrice')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
        <label for="productImage">Image:</label>
        <input type="file" class="form-control" id="productImage" name="productImage">
          @error('productImage')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
    </div>
                    <div class="form-group">
                        <label for="productCategory">Catégorie:</label>
                        <select class="form-control @error('productCategory') is-invalid @enderror" id="productCategory" name="productCategory" required>
                            <!-- You may populate the dropdown options with category data -->
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->Nom }}</option>
                            @endforeach
                        </select>
                        @error('productCategory')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Show description -->
<div class="modal fade" id="showDescriptionModal" tabindex="-1" role="dialog" aria-labelledby="showDescriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Updated modal title with product name -->
                <h5 class="modal-title" id="showDescriptionModalLabel">Description du Produit: <span id="productName"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <img src="" alt="Product Image" id="productImage" class="w-full h-auto mb-4">

                <!-- Display the product description here -->
                <p id="productDescription"></p>
            </div>
        </div>
    </div>
</div>

<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Modifier Produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for editing product -->
                <form id="editProductForm" action="{{ route('update.product') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use the PUT method for update -->
                    <input type="hidden" name="productId" id="editProductId" value="">

                    <div class="form-group">
                        <label for="editProductName">Nom du produit:</label>
                        <input type="text" class="form-control" id="editProductName" name="editProductName" required>
                    </div>

                    <div class="form-group">
                        <label for="editProductDescription">Description du produit:</label>
                        <textarea class="form-control" id="editProductDescription" name="editProductDescription" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="editProductQuantity">Quantité:</label>
                        <input type="number" class="form-control" id="editProductQuantity" name="editProductQuantity" required>
                    </div>

                    <div class="form-group">
                        <label for="editProductPrice">Prix:</label>
                        <input type="number" class="form-control" id="editProductPrice" name="editProductPrice" required>
                    </div>
                    <div class="form-group">
                        <label for="currentProductImage">Image actuelle:</label>
                        <br>
                      <center>
                      <center>
        @if(isset($Produit) && $Produit)
            <img src="{{ asset('storage/' . $Produit->image) }}" alt="{{ $Produit->Nom }}" style="width: 150px; height: 150px;" class="rounded-full object-cover">
        @else
            <p>No product image available</p>
        @endif
    </center>                       </center> 
                    </div>
                    <div class="form-group">
                    
    <label for="editProductImage">Image:</label>
    <input type="file" class="form-control" id="editProductImage" name="editProductImage">
</div>

                    <div class="form-group">
                        <label for="editProductCategory">Catégorie:</label>
                        <select class="form-control" id="editProductCategory" name="editProductCategory" required>
                            <!-- You may populate the dropdown options with category data -->
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->Nom }}</option>
                            @endforeach
                        </select>
                    </div>

                   

                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProductModalLabel">Confirmation de suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="deleteProductName"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <form id="deleteProductForm" action="{{ route('delete.product') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="productId" id="deleteProductId" value="">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- JavaScript to update modal body -->

<script>
   $(document).ready(function () {
    // Handle click on delete icon for products
    // Use event delegation for dynamically added content
    $(document).on('click', '.delete-product-btn', function () {
        var productId = $(this).data('product-id');
        var productName = $(this).data('product-name');

        // Populate the delete modal fields with product details
        $('#deleteProductId').val(productId);
        $('#deleteProductName').text('Vous êtes sur le point de supprimer le produit "' + productName + '". ');

        // Show the delete modal
        $('#deleteProductModal').modal('show');
    });
});

</script>


<script>
    $(document).ready(function () {
        // Handle click on eye icon
        $('.show-description-btn').on('click', function () {
            var productDescription = $(this).data('product-description');
            var productName = $(this).data('product-name');
            var productImage = $(this).data('product-image');

            // Update modal title and body with product information
            $('#showDescriptionModal #productName').text(productName);
            $('#showDescriptionModal #productDescription').text(productDescription);

            // Set the image source
            $('#showDescriptionModal #productImage').attr('src', productImage);

            // Show the modal
            $('#showDescriptionModal').modal('show');
        });
    });
</script>


<script>
    $(document).ready(function () {
        // Handle click on edit icon for initially loaded products
        $('.edit-product-btn').on('click', function () {
            var productId = $(this).data('product-id');
            var productName = $(this).data('product-name');
            var productDescription = $(this).data('product-description');
            var productQuantity = $(this).data('product-quantity');
            var productPrice = $(this).data('product-price');
            var productCategory = $(this).data('product-category');

            // Populate the edit modal fields with product details
            $('#editProductId').val(productId);
            $('#editProductName').val(productName);
            $('#editProductDescription').val(productDescription);
            $('#editProductQuantity').val(productQuantity);
            $('#editProductPrice').val(productPrice);
            $('#editProductCategory').val(productCategory);

            // Show the edit modal
            $('#editProductModal').modal('show');
        });

        // Handle click on edit icon for dynamically added elements (search results)
        $(document).on('click', '.edit-product-btn', function () {
            var productId = $(this).data('product-id');
            var productName = $(this).data('product-name');
            var productDescription = $(this).data('product-description');
            var productQuantity = $(this).data('product-quantity');
            var productPrice = $(this).data('product-price');
            var productCategory = $(this).data('product-category');

            // Populate the edit modal fields with product details
            $('#editProductId').val(productId);
            $('#editProductName').val(productName);
            $('#editProductDescription').val(productDescription);
            $('#editProductQuantity').val(productQuantity);
            $('#editProductPrice').val(productPrice);
            $('#editProductCategory').val(productCategory);

            // Show the edit modal
            $('#editProductModal').modal('show');
        });

        // Rest of your existing code for search functionality...
    });
</script>



  <div id="loadingSpinner" class="spinner-border text-primary" role="status" style="display: none;">
                            <span class="sr-only">Loading...</span>
                        </div>
<script>
    $(document).ready(function () {
        // Handle keyup event on the search input
        $('#searchInput').on('keyup', function () {
            var searchQuery = $(this).val();

            // Show loading spinner
            $('#loadingSpinner').show();

            // Make an AJAX request to the search route
            $.ajax({
                url: '{{ route('search.products') }}',
                type: 'GET',
                data: { search: searchQuery },
                success: function (data) {
                    // Hide loading spinner
                    $('#loadingSpinner').hide();

                    // Update the product table or other content based on the search results
                    updateProductTable(data.products);
                },
                error: function (xhr, status, error) {
                    // Hide loading spinner in case of an error
                    $('#loadingSpinner').hide();
                    
                    console.error(error);
                }
            });
        });

        // Function to update the product table
        function updateProductTable(products) {
            // Clear existing table content
            $('#productTable tbody').empty();

            // Check if there are products in the search result
            if (products.length > 0) {
                // Append the new products to the table
                $.each(products, function (index, product) {
    // Check if product category is defined
    var categoryName = product.category ? product.category.Nom : 'N/A';
    var datePart = product.created_at.substring(0, 10);

    // Create a new row using the consistent structure
    var row = `<tr class="product-row bg-white dark:bg-slate-900/95">
                  <td class="px-6 py-4 text-lg font-semibold border-r border-gray-300">
                      ${product.id}
                  </td>
                  <td class="px-6 py-4 text-lg border-r border-gray-300">
                      ${product.Nom}
                  </td>
                  <td class="px-6 py-4 text-lg border-r border-gray-300">
                      <span class="flex items-center">
                          <i class="fas fa-cubes mr-2"></i>
                          ${product.quantite}
                      </span>
                  </td>
                  <td class="px-6 py-4 text-lg border-r border-gray-300">
                      <span class="flex items-center">
                          <i class="fas fa-money-bill-wave mr-2"></i>
                          ${product.Prix} TND
                      </span>
                  </td>
                  <td class="px-6 py-4 text-lg border-r border-gray-300">
    <span class="flex items-center">
        ${product.image ? `<img src="/storage/${product.image}" alt="${product.Nom}"class="w-14 h-14 rounded-full object-cover" />` : ''}
    </span>
</td>

                  <td class="px-6 py-4 text-lg border-r border-gray-300">
                      <span class="flex items-center">
                          <i class="fas fa-folder mr-2"></i>
                          ${categoryName}
                      </span>
                  </td>
                  <td class="px-6 py-4 text-lg border-r border-gray-300">
                      <span class="flex items-center">
                          <i class="far fa-calendar-alt mr-2"></i>
                          ${datePart}
                      </span>
                  </td>
                 
                  <td class="px-6 py-4">
                      <div class="flex items-center">
                          <a href="#" class="text-blue-500 hover:text-blue-700 show-description-btn" data-toggle="modal" data-target="#showDescriptionModal" data-product-description="${product.Description}" data-product-name="${product.Nom}">
                              <i class="far fa-eye"></i>
                          </a>
                          <a href="#" class="text-green-500 hover:text-green-700 edit-product-btn" 
                             data-toggle="modal" data-target="#editProductModal" 
                             data-product-id="${product.id}" 
                             data-product-name="${product.Nom}" 
                             data-product-description="${product.Description}" 
                             data-product-quantity="${product.quantite}" 
                             data-product-price="${product.Prix}" 
                             data-product-category="${product.category ? product.category.id : ''}">
                             <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a href="#" class="text-red-500 hover:text-red-700 delete-product-btn" data-toggle="modal" data-target="#deleteProductModal" data-product-id="${product.id}" data-product-name="${product.Nom}">
                              <i class="fas fa-trash"></i>
                          </a>
                      </div>
                  </td>
              </tr>`;

    // Append the new row to the table body
    $('#productTable tbody').append(row);
});


            } else {
                // Handle the case when there are no search results
                var noResultsRow = `<tr>
                                      <td colspan="8" class="text-center py-4 text-gray-500 dark:text-gray-400 border-b border-gray-300">
                                          Aucun produit trouvé.
                                      </td>
                                  </tr>`;

                // Append the "no results" row to the table body
                $('#productTable tbody').append(noResultsRow);
            }
        }
    });
</script>

@endsection


