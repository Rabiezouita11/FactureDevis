@extends('layouts.index')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <!-- Include Select2 CSS -->
    <!-- Include your other CSS stylesheets here -->

    <!-- Include jQuery and Select2 JS -->
    <!-- Include Bootstrap JS and other JavaScript scripts here -->

<!-- Include Select2 JavaScript and CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    
   
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
                                <h1 class="font-medium text-xl mb-1 block dark:text-slate-100">Facture</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Tables</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Facture</li>
                                </ol>
                            </div>
                            <div class="flex items-center">
                            <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600" data-toggle="modal" data-target="#addFactureModal">Ajouter Facture</button>
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
<div class="container mx-auto px-2 min-h-[calc(100vh-138px)] relative pb-14">
    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
        <div class="sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Facture</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <!-- component -->
                        <div class="relative overflow-x-auto sm:rounded">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-collapse border-gray-300">
                     <thead class="justify-between">
                 <tr class="bg-gray-800 dark:bg-slate-700">
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                <strong>Id</strong>
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                <strong>Nom Client</strong>
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                <strong>Mf Client</strong>
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                <strong>Adresse</strong>
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                <strong>Email</strong>
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                <strong>Prix hors Taxe</strong>
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                <strong>Prix avec Taxe</strong>
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                <strong>Date de création</strong>
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                <strong>Action</strong>
            </th>
        </tr>
    </thead>
  
    <tbody class="bg-gray-200">
        @forelse($factures  as $facture)
            <tr class="bg-white dark:bg-slate-900/95">
                <td class="border-b border-gray-300 px-5 py-3">
                    <span class="text-center font-medium text-lg">{{ $facture->id }}</span>
                </td>
                <td class="border-b border-gray-300 px-5 py-3">
                    <span class="text-center font-medium text-lg">{{ $facture->user_name }}</span>
                </td>
                <td class="border-b border-gray-300 px-5 py-3">
                    @if ($facture->Mf_Client === null)
                        <span class="text-center font-medium text-lg">
                            <!-- Icon for when the client does not have MF -->
                            <i class="fas fa-times-circle text-red-500"></i>
                        </span>
                    @else
                        <span class="text-center font-medium text-lg">{{ $facture->Mf_Client }}</span>
                    @endif
                </td>
                <td class="border-b border-gray-300 px-5 py-3">
                    <span class="text-center font-medium text-lg">{{ $facture->adresse }}</span>
                </td>
                <td class="border-b border-gray-300 px-5 py-3">
    @if ($facture->user_email === null)
        <span class="text-center font-medium text-lg">
            <!-- Icon for when there is no email -->
            <i class="fas fa-times-circle text-red-500"></i>
        </span>
    @else
        <span class="text-center font-medium text-lg">{{ $facture->user_email }}</span>
    @endif
</td>

                <td class="border-b border-gray-300 px-5 py-3">
                    <span class="text-center font-medium text-lg">{{ $facture->prix_hors_taxe }}</span>
                </td>
                <td class="border-b border-gray-300 px-5 py-3">
                    <span class="text-center font-medium text-lg">{{ $facture->prix_avec_taxe }}</span>
                </td>
                <td class="border-b border-gray-300 px-5 py-3">
                    <span class="text-center font-medium text-lg">{{ $facture->created_at->format('d/m/Y') }}</span>
                </td>
                <td class="border-b border-gray-300 px-5 py-3">
                    <!-- View Details Icon -->
                    <a href="http://localhost:8000/generate-pdf_{{$facture->id}}" class="text-green-500 hover:text-green-700">
                        <i class="far fa-eye text-xl"></i>
                    </a>
                </td>
            </tr>
        @empty
            <tr>    
                <td colspan="9" class="text-center py-4 text-gray-500 dark:text-gray-400 border-b border-gray-300">
                    <p>Aucune facture trouvée.</p>
                </td>
            </tr>
        @endforelse
    </tbody>
   
</table>


<!-- Pagination Links -->
<br>

{{ $factures->links() }}

                        </div>

                    </div><!--end card-body-->
                </div> <!--end card-->
                
            </div><!--end col--> 

                 
        </div><!--end inner-grid-->
        <!-- footer --> 
      

    
    </div><!--end container-->
<!-- Add Facture Modal -->
<!-- ... (previous HTML code) ... -->

<!-- ... (previous HTML code) ... -->

<div class="modal fade" id="addFactureModal" tabindex="-1" role="dialog" aria-labelledby="addFactureModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFactureModalLabel">Ajouter Facture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for adding user and products -->
                <h2 class="mb-4">Ajouter Facture</h2>
              
                <form action="{{ route('saveUserProductsFacture') }}" method="POST">
                    @csrf
                    <!-- User Information -->
                    <div class="form-group">
        <label for="clientType">Type de client :</label>
        <select class="form-control" id="clientType" name="clientType" required>
            <option value="particulier">Particulier</option>
            <option value="entreprise">Entreprise</option>
        </select>
    </div>
    <div id="entrepriseFields" style="display: none;">
        <div class="form-group">
            <label for="mf">Matricule Fiscal :</label>
            <input type="text" class="form-control" id="mf" name="mf" placeholder="Entrez le matricule fiscal">
        </div>
    </div>
                    <div class="form-group">
        <label for="name">Nom du client :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom du client" required>
    </div>

    <div class="form-group">
        <label for="email">Email du client :</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez l'email du client " >
    </div>
    <div class="form-group">
    <label for="email">Adresse du client :</label>
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrez l'adresse du client" >
</div>


                    <!-- Product Selection -->
                    <div class="form-group" id="productFieldsContainer">
        <label for="products">Sélectionnez les produits :</label>
        <div class="input-group mb-3">
            <select class="form-control js-select2" name="products[]" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->Nom }}</option>
                @endforeach
            </select>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="addProductBtn">Ajouter Produit +</button>
            </div>
        </div>
        <input type="number" class="form-control" name="quantities[]" placeholder="Quantité" required>
    </div>
                    <!-- Additional User and Facture Information -->
                    <!-- Add more fields as needed -->

                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Include jQuery before Select2 -->


<!-- ... (remaining HTML code) ... -->


<!-- ... (remaining HTML code) ... -->

<!-- Add Facture Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Two or more products cannot be selected multiple times. Please remove duplicate selections.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.js-select2').select2();

        var productCounter = 1;
        var selectedProducts = [];

        // Event listener for the "Add Product" button
        $('#addProductBtn').click(function () {
            addProductField();
        });

        // Event listener for the "Remove Product" button
        $('#productFieldsContainer').on('click', '.removeProductBtn', function () {
            $(this).closest('.form-group').remove();
        });

        // Function to add product fields
        function addProductField() {
            var productFieldHtml = `
                <div class="form-group">
                    <label for="product${productCounter}">Select Product:</label>
                    <div class="input-group mb-3">
                        <select class="form-control js-select2" name="products[]" required>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->Nom }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-outline-danger removeProductBtn" type="button">Remove Product -</button>
                        </div>
                    </div>
                    <input type="number" class="form-control" name="quantities[]" placeholder="Quantity" required>
                </div>
            `;

            // Append the product field to the container
            $('#productFieldsContainer').append(productFieldHtml);

            // Initialize Select2 for the new field
            $('.js-select2').select2();

            productCounter++;
        }

        // Event listener for form submission
        $('form').submit(function (event) {
            var selectedProductOptions = $('select[name="products[]"] option:selected');

            // Reset selectedProducts array before checking for duplicates
            selectedProducts = [];

            // Check for duplicate selections
            selectedProductOptions.each(function () {
                var productId = $(this).val();
                if (selectedProducts.includes(productId)) {
                    // Show error modal if duplicate selections found
                    $('#errorModal').modal('show');
                    event.preventDefault(); // Prevent form submission
                    return false;
                } else {
                    selectedProducts.push(productId);
                }
            });
        });
    });
</script>

<script>
    // Ajoutez un écouteur d'événement pour détecter les changements dans le type de client
    document.getElementById("clientType").addEventListener("change", function() {
        var clientType = this.value; // Récupérer la valeur sélectionnée du type de client
        var entrepriseFields = document.getElementById("entrepriseFields"); // Sélectionner le bloc des champs entreprise

        // Si le type de client est "entreprise", afficher les champs pour l'entreprise, sinon masquer
        if (clientType === "entreprise") {
            entrepriseFields.style.display = "block"; // Afficher les champs pour l'entreprise
        } else {
            entrepriseFields.style.display = "none"; // Masquer les champs pour l'entreprise
        }
    });
</script>
@endsection


