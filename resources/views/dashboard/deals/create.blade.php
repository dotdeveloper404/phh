@php
    $title = 'Deals';
    $breadcrumbs = [
        [
            'name' => 'Dashboard',
            'link' => route('dashboard'),
        ],
        [
            'name' => $title,
            'link' => route('deals.index'),
        ],
        [
            'name' => request()->routeIs('deals.create') ? 'Add' : 'Update',
            'link' => false,
        ],
    ];
    $isCreatePage = request()->routeIs('deals.create');
@endphp

@extends('layouts.app', [
    'title' => $title,
    'breadcrumbs' => $breadcrumbs,
    'addButton' => true,
    'btn' => [
        'text' => $isCreatePage ? 'Back' : 'Add Deals',
        'link' => $isCreatePage ? url()->previous() : route('deals.create'),
    ],
])

@section('title', $title)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data"
                            action="@route('deals.create') {{ route('deals.store') }} @else {{ route('deals.update', $deal->id) }} @endroute">
                            @csrf
                            @route('deals.edit')
                                @method('put')
                            @endroute
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" id="name" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') ?? ($deal->name ?? '') }}">
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
                                            value="{{ old('price') ?? ($deal->price ?? '') }}">
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
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date"
                                            value="{{ old('date') ?? ($deal->date ?? '') }}"
                                            class="form-control @error('date') is-invalid @enderror" />
                                        @error('date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="start_time" class="form-label">Start Time</label>
                                        <input type="time" id="start_time" name="start_time"
                                            value="{{ old('start_time') ?? ($deal->start_time ?? '') }}"
                                            class="form-control @error('start_time') is-invalid @enderror" />
                                        @error('start_time')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="end_time" class="form-label">End Time</label>
                                        <input type="time" id="end_time" name="end_time"
                                            value="{{ old('end_time') ?? ($deal->end_time ?? '') }}"
                                            class="form-control @error('end_time') is-invalid @enderror" />
                                        @error('end_time')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">
                                            {!! old("description") ?? ($deal->description ?? "") !!}
                                        </textarea>
                                        @error('description')
                                            <div class="invalid-feedback bg-danger text-white rounded p-3">
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
@endsection

@push('scripts')
    <script>
        $(function() {
            CkEditor.create(document.querySelector('#description'), {
                    toolbar: ['bold', 'italic', 'bulletedList', 'numberedList'],
                })
                .catch(err => { console.log(err) })
        })
    </script>
@endpush

@push('styles')
    <style>
        .invalid-feedback {
            font-size: 15px
        }
    </style>
@endpush
