@extends('layouts.index')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
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
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-collapse border-gray-300">
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
                <a href="#" class="text-blue-500 hover:text-blue-700 show-description-btn" data-toggle="modal" data-target="#showDescriptionModal" data-product-description="{{ $Produit->Description }}" data-product-name="{{ $Produit->Nom }}">
    <i class="far fa-eye"></i>
    </a>
                    <!-- Update Icon -->
                    <a href="#" class="text-green-500 hover:text-green-700 edit-category-btn" data-toggle="modal" data-target="#editCategoryModal" data-category-id="{{ $Produit->id }}" data-category-name="{{ $Produit->Nom }}">
                        <i class="fas fa-pencil-alt"></i>
                    </a>

                    <!-- Delete Icon -->
                    <a href="#" class="text-red-500 hover:text-red-700 delete-category-btn" data-toggle="modal" data-target="#deleteCategoryModal" data-category-id="{{ $Produit->id }}" data-category-name="{{ $Produit->Nom }}">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center py-4 text-gray-500 dark:text-gray-400 border-b border-gray-300">
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
                <form id="addProductForm" action="{{ route('add.product') }}" method="POST">
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

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategoryModalLabel">Confirmation de suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
    Êtes-vous sûr de vouloir supprimer la catégorie  ?
</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                <!-- Add a form for deletion -->
                <form id="deleteCategoryForm" action="{{ route('delete.category', ':id') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalLabel">Modifier Catégorie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for category update -->
                <form id="editCategoryForm" action="{{ route('update.category', ':id') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="editCategoryName">Nouveau nom de la catégorie:</label>
                        <input type="text" class="form-control @error('editCategoryName') is-invalid @enderror" id="editCategoryName" name="editCategoryName" required>
                        @error('editCategoryName')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </form>
            </div>
        </div>
    </div>
</div>
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
                <!-- Display the product description here -->
                <p id="productDescription"></p>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript to update modal body -->
<script>
    $(document).ready(function () {
        // Handle click on delete icon
        $('.delete-category-btn').on('click', function () {
            var categoryId = $(this).data('category-id');
            var categoryName = $(this).data('category-name');
            var deleteUrl = "{{ route('delete.category', ':id') }}".replace(':id', categoryId);
            
            // Update form action
            $('#deleteCategoryForm').attr('action', deleteUrl);

            // Update modal body
            $('#deleteCategoryModal .modal-body').html('Êtes-vous sûr de vouloir supprimer la catégorie "' + categoryName + '" ?');
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Handle click on edit icon
        $('.edit-category-btn').on('click', function () {
            var categoryId = $(this).data('category-id');
            var categoryName = $(this).data('category-name');
            var editUrl = "{{ route('update.category', ':id') }}".replace(':id', categoryId);
            
            // Update form action
            $('#editCategoryForm').attr('action', editUrl);

            // Populate the input field with the current category name
            $('#editCategoryName').val(categoryName);

            // Show the modal
            $('#editCategoryModal').modal('show');
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Handle click on eye icon
        $('.show-description-btn').on('click', function () {
            var productDescription = $(this).data('product-description');
            var productName = $(this).data('product-name'); // Add a data attribute with product name
            
            // Update modal title and body with product information
            $('#showDescriptionModal #productName').text(productName);
            $('#showDescriptionModal #productDescription').text(productDescription);

            // Show the modal
            $('#showDescriptionModal').modal('show');
        });
    });
</script>

@endsection


