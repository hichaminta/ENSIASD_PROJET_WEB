
<x-mastercompentAdminPage title="Annonces" titre="Annonces">

    @if (session('success'))
        <x-alertement type="success">
            {{ session('success') }}
        </x-alertement>
    @endif

    <!-- Button to trigger add annonce modal -->
    <h6 class="m-0 font-weight-bold text-primary">
        <a type="button" data-toggle="modal" data-target="#addAnnonceModal"><i class="fas fa-plus" style="color: blue;"></i></a>
    </h6>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Date Annonce</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your annonces -->
            @foreach ($annonces as $annonce)
                <tr>
                    <td>{{ $annonce->id }}</td>
                    <td>{{ $annonce->titre }}</td>
                    <td>{{ $annonce->date_annonce }}</td>
                    <td>{{ $annonce->Description }}</td>

                    <td>
                        <a class="btn btn-success" data-toggle="modal" data-target="#editModal{{ $annonce->id }}"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{ route('admin.annonces.delete', $annonce->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <!-- Modal for Editing Annonce -->
                <!-- Edit Annonce Modal -->
<div class="modal fade" id="editModal{{ $annonce->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $annonce->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $annonce->id }}">Modifier l'annonce</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for Editing Annonce -->
                <form action="{{ route('admin.annonces.update', $annonce->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="titre">Titre:</label>
                        <input type="text" class="form-control" id="titre" name="titre" value="{{ $annonce->titre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="date_annonce">Date de l'annonce:</label>
                        <input type="date" class="form-control" id="date_annonce" name="date_annonce" value="{{ $annonce->date_annonce }}" required>
                    </div>
                    <div class="form-group">
                        <label for="Description">Description:</label>
                        <textarea class="form-control" id="Description" name="Description" rows="3" required>{{ $annonce->Description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Image">Image:</label>
                        <input type="file" class="form-control-file" id="Image" name="Image">
                    </div>
                    <!-- Add more form fields if needed -->
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

            @endforeach
        </tbody>
    </table>

    @if ($annonces->isEmpty())
        <p>Aucune annonce</p>
    @endif

   <!-- Add Annonce Modal -->
   <div class="modal fade" id="addAnnonceModal" tabindex="-1" role="dialog" aria-labelledby="addAnnonceModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAnnonceModalLabel">Add New Annonce</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add new annonce -->
                <form action="{{ route('admin.annonces.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titre">Titre:</label>
                        <input type="text" class="form-control" id="titre" name="titre" required>
                    </div>
                    <div class="form-group">
                        <label for="date_annonce">Date Annonce:</label>
                        <input type="date" class="form-control" id="date_annonce" name="date_annonce" required>
                    </div>
                    <div class="form-group">
                        <label for="Description">Description:</label>
                        <textarea class="form-control" id="Description" name="Description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Image">Image:</label>
                        <input type="file" class="form-control-file" id="Image" name="Image">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Annonce</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



</x-mastercompentAdminPage>
