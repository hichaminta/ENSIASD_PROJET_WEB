<x-mastercompentAdminPage title="filiere" titre="filiere">
    @if (session('success'))
        <x-alertement type="success">
            {{ session('success') }}
        </x-alertement>
    @endif
    @if ($errors->any())
        <ul>
            <x-alertement type="danger">
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </x-alertement>
        </ul>
    @endif

    <h6 class="m-0 font-weight-bold text-primary">
        <a type="button" data-toggle="modal" data-target="#addFiliereModal"><i class="fas fa-plus" style="color: blue;"></i></a>
    </h6>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre de la filière</th>
                <th>PDF</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your filieres -->
            @foreach ($filieres as $filiere)
                <tr>
                    <td>{{ $filiere->id }}</td>
                    <td>{{ $filiere->titre }}</td>
                    <td>{{ $filiere->pdf }}</td>
                    <td>
                        <a class="btn btn-success" data-toggle="modal" data-target="#editModal{{ $filiere->id }}"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{ route('admin.filieres.delete', $filiere->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <div class="modal fade" id="editModal{{ $filiere->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $filiere->id }}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $filiere->id }}">Modifier les informations de la filière</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add your form here to edit filiere information -->
                                <form action="{{ route('admin.filieres.update', $filiere->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!-- Add your form fields here -->
                                    <div class="form-group">
                                        <label for="titre">Titre de la filière:</label>
                                        <input type="text" class="form-control" id="titre" name="titre" value="{{ $filiere->titre }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pdf">PDF:</label>
                                        <input type="file" class="form-control-file" id="pdf" name="pdf">
                                    </div>
                                    <!-- Add more form fields as needed -->
                                    <!-- Add your submit button -->
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

    @if ($filieres->isEmpty())
        <p>Aucune filière</p>
    @endif

   <!-- Add Filiere Modal -->
<div class="modal fade" id="addFiliereModal" tabindex="-1" role="dialog" aria-labelledby="addFiliereModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFiliereModalLabel">Ajouter une nouvelle filière</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your form here to add filiere information -->
                <form action="{{ route('admin.filieres.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titre">Titre de la filière:</label>
                        <input type="text" class="form-control" id="titre" name="titre" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf">PDF:</label>
                        <input type="file" class="form-control-file" id="pdf" name="pdf">
                    </div>
                    <!-- Add more form fields as needed -->
                    <!-- Add your submit button -->
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

</x-mastercompentAdminPage>
