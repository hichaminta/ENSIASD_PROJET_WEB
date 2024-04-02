<x-mastercompentAdminPage title="Contacts" titre="Contacts">

    @if (session('success'))
        <x-alertement type="success">
            {{ session('success') }}
        </x-alertement>
    @endif

    <!-- Button to trigger add contact modal -->


    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Sujet</th>
                <th>Téléphone</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your contacts -->
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->Nom }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->sujet }}</td>
                    <td>{{ $contact->tele }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.contact.delete', $contact->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if ($contacts->isEmpty())
        <p>Aucun contact</p>
    @endif


</x-mastercompentAdminPage>
