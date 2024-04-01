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
        <a type="button" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus" style="color: blue;"></i></a>
    </h6>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre d'événement</th>
                <th>Description</th>
                <th>Image</th>
                <th>Date d'événement</th>
                <th>Afficher Plus</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your events -->
            @foreach ($evenements as $evenement)
                <tr>
                    <td>{{ $evenement->id }}</td>
                    <td>{{ $evenement->titre }}</td>
                    <td>{{ $evenement->description }}</td>
                    <td><img src="{{ asset('storage/' . $evenement->image) }}" alt="Event Image" width="100px" height="100px"></td>
                    <td>{{ $evenement->date }}</td>
                    <td>
                        <a class="btn btn-info"><i class="fas fa-copy"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-warning" data-toggle="modal" data-target="#detailModal{{ $evenement->id }}"><i class="fas fa-eye"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-success" data-toggle="modal" data-target="#editModal{{ $evenement->id }}"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('admin.evenement.delete', $evenement->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($evenements->isEmpty())
        <p>Aucun événement</p>
    @endif




</x-mastercompentAdminPage>
