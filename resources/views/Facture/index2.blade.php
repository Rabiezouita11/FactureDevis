@extends('layouts.index')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyO/dCPR70mIaa2M/6uJf51uoG28JOMhS" crossorigin="anonymous">
    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <!-- Include your other CSS stylesheets here -->

    <!-- Include jQuery and Select2 JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- Include Bootstrap JS and other JavaScript scripts here -->




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
    <div class="container mx-auto px-2 min-h-[calc(100vh-138px)]  relative pb-14 ">         
        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
          
            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Facture</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <!-- component -->
                        <div class="relative overflow-x-auto  sm:rounded">
 <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border border-collapse border-gray-300">
    <thead class="justify-between">
        <tr class="bg-gray-800 dark:bg-slate-700">
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                Id
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                Nom Client 
            </th>
             <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
             Adresse 
            </th>
              <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
             Email   
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
             Prix hors Taxe   
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
            Prix avec Taxe   
   
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                Date de création
            </th>
            <th scope="col" class="px-5 py-3 text-slate-200 border-b border-gray-300">
                Action
            </th>
        </tr>
    </thead>
  
    <tbody class="bg-gray-200">
        @forelse($factures  as $facture)
            <tr class="bg-white dark:bg-slate-900/95">
            <td class="border-b border-gray-300">
                    <span class="text-center ml-2 font-medium">{{ $facture->id }}</span>
                </td>
                <td class="border-b border-gray-300">
                    <span class="text-center ml-2 font-medium">{{ $facture->user_name }}</span>
                </td>
                <td class="border-b border-gray-300">
                    <span class="text-center ml-2 font-medium">{{ $facture->adresse }}</span>
                </td>
                <td class="border-b border-gray-300">
                    <span class="text-center ml-2 font-medium">{{ $facture->user_email }}</span>
                </td>
                <td class="border-b border-gray-300">
                    <span class="text-center ml-2 font-medium">{{ $facture->prix_hors_taxe  }}</span>
                </td>
                <td class="border-b border-gray-300">
                    <span class="text-center ml-2 font-medium">{{ $facture->prix_avec_taxe    }}</span>
                </td>
                <td class="px-5 py-3 border-b border-gray-300">
                    <span>{{ $facture->created_at->format('d/m/Y') }}</span>
                </td>
                <td class="px-5 py-3 border-b border-gray-300">
                    <!-- Update Icon -->

                    <a href="#" class="text-green-500 hover:text-green-700 edit-category-btn" data-toggle="modal" data-target="#editCategoryModal" >
                    <i class="fas fa-pencil-alt"></i>
</a>

                    <!-- Delete Icon -->
                    <a href="#" class="text-red-500 hover:text-red-700 delete-category-btn" data-toggle="modal" data-target="#deleteCategoryModal" >
    <i class="fas fa-trash"></i>
</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center py-4 text-gray-500 dark:text-gray-400 border-b border-gray-300">
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
                @include('Facture.index')
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


@endsection


