<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (request()->routeIs('product.create'))
                {{ __('Add a new Product') }}
            @else
                {{ __('Update Product') }}
            @endif
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="m-5">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST"
                                action="{{ request()->routeIs('product.create') ? route('product.store') : route('product.update', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @if (request()->routeIs('product.edit'))
                                    @method('put')
                                @endif
                                <div class="row">

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" id="name" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') ?? ($product->name ?? '') }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" id="price" name="price"
                                                class="form-control @error('price') is-invalid @enderror"
                                                value="{{ old('price') ?? ($product->price ?? '') }}">
                                            @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" id="image" name="image" accept=".jpg,.jpeg,.png"
                                                class="form-control @error('image') is-invalid @enderror">
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                                rows="5">{{ old('description') ?? ($product->description ?? '') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
