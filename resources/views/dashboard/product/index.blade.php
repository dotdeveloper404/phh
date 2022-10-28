<x-app-layout>
    <style>
        .delete,
        .edit {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            color: white
        }

        .delete:hover,
        .edit:hover {
            color: white
        }

        .image {
            width: 50px;
            height: 50px;
        }
    </style>
    
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>

            <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
        </div>
    </x-slot>

    <div class="container-fluid">
        <div class="p-5">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($products))
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <div class="image">
                                            <img src="{{ asset($product->image) }}" alt="" class="h-100 w-100">
                                        </div>
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="delete bg-danger d-flex align-items-center justify-content-center"
                                                href="javascript:void(0)"
                                                data-url="{{ route('product.destroy', $product->id) }}">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <a class="edit ml-2 bg-primary d-flex align-items-center justify-content-center"
                                                href="{{ route('product.edit', $product->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">
                                    <b>
                                        No products created
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
