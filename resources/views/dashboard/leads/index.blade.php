<x-app-layout>
    <style>
        .delete {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            color: white
        }

        .delete:hover {
            color: white
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Leads') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="p-5">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($leads))
                            @foreach ($leads as $lead)
                                <tr>
                                    <td>{{ $lead->name }}</td>
                                    <td>{{ $lead->email }}</td>
                                    <td>{{ $lead->phone }}</td>
                                    <td>{{ $lead->message }}</td>
                                    <td>
                                        <a class="delete bg-danger d-flex align-items-center justify-content-center"
                                            href="javascript:void(0)"
                                            data-url="{{ route('contact.destroy', $lead->id) }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">
                                    <b>
                                        No leads created
                                    </b>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @section('scripts')
        <script>
            $('.delete').on('click', function() {
                axios.delete($(this).data('url'))
                    .then(response => response.data)
                    .then(data => {
                        if (data.success) {
                            window.location.reload()
                        } else {
                            swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                            })
                        }
                    })
                    .catch(err => {
                        swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    })
            })
        </script>
    @endsection

</x-app-layout>
