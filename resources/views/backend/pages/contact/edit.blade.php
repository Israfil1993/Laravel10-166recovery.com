@extends('backend.layouts.master')

@section('content')

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Language Tabs -->
                    <div class="col-xl-12">
                        <div class="row mb-3">
                            <div class="col-xl-9"></div>
                            <div class="col-xl-3">
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#ar" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">Ar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#en" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">En</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#ru" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">Ru</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="ar" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">(Ar)</h4>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           value="{{ $contact->title_ar }}"
                                                           name="title_ar">
                                                    @error('title_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="description_ar"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10">{!! $contact->description_ar !!}</textarea>
                                                    @error('description_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Emial</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="email"
                                                           value="{{ $contact->email }}"
                                                           name="email">
                                                    @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           value="{{ $contact->phone }}"
                                                           name="phone">
                                                    @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Loaction</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           value="{{ $contact->location_ar}}"
                                                           name="location_ar">
                                                    @error('location_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option selected disabled>Status Seç</option>
                                                        <option value="Inactive" {{ $contact == 'Inactive' ? 'selected' : ''}}>In Aktiv</option>
                                                        <option value="Active" {{ $contact == 'Active' ? 'selected' : ''}}>Aktiv</option>

                                                    </select>
                                                    @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content for English (En) -->
                        <div class="tab-pane" id="en" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">(En)</h4>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           value="{{ $contact->title_en }}"
                                                           name="title_en">
                                                    @error('title_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="description_en"
                                                              id="editor_en"
                                                              cols="30"
                                                              rows="10">{!! $contact->description_en !!}</textarea>
                                                    @error('description_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>




                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Loaction</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           value="{{ $contact->location_en }}"
                                                           name="location_en">
                                                    @error('location_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option selected disabled>Status Seç</option>
                                                        <option value="Inactive" {{ $contact == 'Inactive' ? 'selected' : ''}}>In Aktiv</option>
                                                        <option value="Active" {{ $contact == 'Active' ? 'selected' : ''}}>Aktiv</option>
                                                    </select>
                                                    @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content for Russian (Ru) -->
                        <div class="tab-pane" id="ru" role="tabpanel">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">(Ru)</h4>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           value="{{ $contact->title_ru }}"
                                                           name="title_ru">
                                                    @error('title_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="description_ru"
                                                              id="editor_ru"
                                                              cols="30"
                                                              rows="10">{!! $contact->description_ru !!}</textarea>
                                                    @error('description_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Loaction</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           value="{{ $contact->location_ru }}"
                                                           name="location_ru">
                                                    @error('location_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option selected disabled>Status Seç</option>
                                                        <option value="Inactive" {{ $contact == 'Inactive' ? 'selected' : ''}}>In Aktiv</option>
                                                        <option value="Active" {{ $contact == 'Active' ? 'selected' : ''}}>Aktiv</option>
                                                    </select>
                                                    @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="row mt-3">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <label for="example-text-input" class="col-sm-2"></label>
                                <input type="submit" class="btn btn-info bg-primary" value="Yadda Saxla">
                                <label for="example-text-input" class="col-sm-2"></label>
                                <a href="{{ route('admin.contact.list') }}" class="btn btn-danger">Geri</a>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>


    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#editor_en' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#editor_ru' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
