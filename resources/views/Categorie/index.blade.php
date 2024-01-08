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
                                <h1 class="font-medium text-xl mb-1 block dark:text-slate-100">Categorie</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Tables</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Categorie</li>
                                </ol>
                            </div>
                            <div class="flex items-center">
                            <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600" data-toggle="modal" data-target="#addCategoryModal">Ajouter Categorie</button>
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
                        <h4 class="card-title">List Categories</h4>
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
                Nom
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
        @forelse($categories as $category)
            <tr class="bg-white dark:bg-slate-900/95">
            <td class="border-b border-gray-300">
                    <span class="text-center ml-2 font-medium">{{ $category->id }}</span>
                </td>
                <td class="border-b border-gray-300">
                    <span class="text-center ml-2 font-medium">{{ $category->Nom }}</span>
                </td>
                <td class="px-5 py-3 border-b border-gray-300">
                    <span>{{ $category->created_at->format('d/m/Y') }}</span>
                </td>
                <td class="px-5 py-3 border-b border-gray-300">
                    <!-- Update Icon -->
                    <a href="#" class="text-blue-500 hover:text-blue-700 mr-2">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <!-- Delete Icon -->
                    <a href="#" class="text-red-500 hover:text-red-700 delete-category-btn" data-toggle="modal" data-target="#deleteCategoryModal" data-category-id="{{ $category->id }}" data-category-name="{{ $category->Nom }}">
    <i class="fas fa-trash"></i>
</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center py-4 text-gray-500 dark:text-gray-400 border-b border-gray-300">
                    Aucune catégorie trouvée.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<!-- Pagination Links -->
<br>

{{ $categories->links() }}

                        </div>

                    </div><!--end card-body-->
                </div> <!--end card-->
                
            </div><!--end col--> 

                 
        </div><!--end inner-grid-->
        <!-- footer --> 
      

    
    </div><!--end container-->
<!-- Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Ajouter Catégorie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for category input -->
                <form id="addCategoryForm" action="{{ route('add.category') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="categoryName">Nom de la catégorie:</label>
        <input type="text" class="form-control @error('categoryName') is-invalid @enderror" id="categoryName" name="categoryName" required value="{{ old('categoryName') }}">
        @error('categoryName')
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
    Êtes-vous sûr de vouloir supprimer la catégorie "{{ $category->Nom }}" ?
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


@endsection


