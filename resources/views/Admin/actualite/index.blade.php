<x-mastercompentAdminPage title="Événements" titre="Événements">
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
        <a type="button" data-toggle="modal" data-target="#addEventModal"><i class="fas fa-plus" style="color: blue;"></i></a>

    </h6>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre d'événement</th>
                <th>Description</th>
                <th>Date d'événement</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your events -->
            @foreach ($actualites as $actualite)
                <tr>
                    <td>{{ $actualite->id }}</td>
                    <td>{{ $actualite->Titreactualites }}</td>
                    <td>{{ $actualite->Descriptionactualites }}</td>
                    <td>{{ $actualite->dateactualites }}</td>


                    <td>
                        <a class="btn btn-success" data-toggle="modal" data-target="#editModal{{ $actualite->id }}"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('admin.actualite.delete', $actualite->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                <div class="modal fade" id="editModal{{ $actualite->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $actualite->id }}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $actualite->id }}">Modifier les informations de l'événement</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add your form here to edit event information -->
                                <form action="{{ route('admin.evenement.update', $actualite->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <!-- Add your form fields here -->
                                    <div class="form-group">
                                        <label for="titre">Titre de l'événement:</label>
                                        <input type="text" class="form-control" id="titre" name="titre" value="{{ $actualite->Titreactualites }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description:</label>
                                        <textarea class="form-control" id="description" name="description" rows="3">{{ $actualite->Descriptionactualites }}</textarea>
                                    </div>
                                    <!-- Add more form fields as needed -->
                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Placement d evenement:</label>
                                        <input type="text" class="form-control" id="placeevenement" name="placeevenement" value="{{ $actualite->placeevenement }}">

                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date d'événement:</label>
                                        <input type="date" class="form-control" id="date" name="date" value="{{ $actualite->dateactualites }}">
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

    @if ($actualites->isEmpty())
        <p>Aucun événement</p>
    @endif

<!-- Button to trigger add event modal -->


<!-- Add Event Modal -->
<div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="addEventModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventModalLabel">Ajouter un nouvel événement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.actualite.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titre">Titre de l'événement:</label>
                        <input type="text" class="form-control" id="titre" name="titre" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="placeactualite">placee d' evnement</label>
                        <input type="text" class="form-control" id="placeactualite" name="placeactualite" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date d'événement:</label>
                        <input type="date" class="form-control" id="date" name="date" required>
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
