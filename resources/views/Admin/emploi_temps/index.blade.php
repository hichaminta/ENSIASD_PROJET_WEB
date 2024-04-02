@php
    use App\Models\Filiere;
    $filieres = Filiere::all();
@endphp

<x-mastercompentAdminPage title="Emplois de temps" titre="Emplois de temps">

    @if (session('success'))
        <x-alertement type="success">
            {{ session('success') }}
        </x-alertement>
    @endif


    <!-- Button to trigger add emploi de temps modal -->
    <h6 class="m-0 font-weight-bold text-primary">
        <a type="button" data-toggle="modal" data-target="#addEmploiDeTempsModal"><i class="fas fa-plus" style="color: blue;"></i></a>
    </h6>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>PDF</th>
                <th>Filière</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your emploi de temps -->
            @foreach ($emploisDeTemps as $emploiDeTemps)
                <tr>
                    <td>{{ $emploiDeTemps->id }}</td>
                    <td>{{ $emploiDeTemps->titre }}</td>
                    <td> <a href="../assets/pdf/emploi_de_temps/{{$emploiDeTemps->pdf}}">PDF</a></td>
                    <td>{{ $emploiDeTemps->filiere_titre }}</td> <!-- Assuming you have a relationship with the filiere table -->
                    <td>
                        <a class="btn btn-success" data-toggle="modal" data-target="#editModal{{ $emploiDeTemps->id }}"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{ route('admin.emploidetemepss.delete', $emploiDeTemps->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <!-- Modal for Editing Emploi De Temps -->
<div class="modal fade" id="editModal{{ $emploiDeTemps->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $emploiDeTemps->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $emploiDeTemps->id }}">Modifier l'emploi de temps</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for Editing Emploi De Temps -->
                <form action="{{ route('admin.emploidetemepss.update', $emploiDeTemps->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="titre">Titre de l'emploi de temps:</label>
                        <input type="text" class="form-control" id="titre" name="titre" value="{{ $emploiDeTemps->titre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf">PDF:</label>
                        <input type="file" class="form-control-file" id="pdf" name="pdf">
                    </div>
                    <div class="form-group">
                        <label for="filiere_id">Filière:</label>
                        <select class="form-control" id="filiere_id" name="filiere_id" required>
                            @foreach ($filieres as $filiere)
                                <option value="{{ $filiere->id }}" {{ $emploiDeTemps->id_emploi_filiere == $filiere->id ? 'selected' : '' }}>{{ $filiere->titre }}</option>
                            @endforeach
                        </select>
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

    @if ($emploisDeTemps->isEmpty())
        <p>Aucun emploi de temps</p>
    @endif

 <!-- Add Emploi De Temps Modal -->
<div class="modal fade" id="addEmploiDeTempsModal" tabindex="-1" role="dialog" aria-labelledby="addEmploiDeTempsModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmploiDeTempsModalLabel">Ajouter un nouvel emploi de temps</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form to add emploi de temps -->
                <form action="{{ route('admin.emploidetemepss.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titre">Titre de l'emploi de temps:</label>
                        <input type="text" class="form-control" id="titre" name="titre" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf">PDF:</label>
                        <input type="file" class="form-control-file" id="pdf" name="pdf" required>
                    </div>
                    <div class="form-group">
                        <label for="filiere_id">Filière:</label>
                        <select class="form-control" id="filiere_id" name="filiere_id" required>
                            @foreach ($filieres as $filiere)
                                <option value="{{ $filiere->id }}">{{ $filiere->titre }}</option>
                            @endforeach
                        </select>
                    </div>
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
