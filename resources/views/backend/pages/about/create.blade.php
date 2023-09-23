@extends('backend.layouts.master')

@section('content')

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

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
                                                <label for="example-text-input" class="col-sm-2 col-form-label">About Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="about_title_ar"
                                                    >
                                                    @error('about_title_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">About Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="about_description_ar"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('about_description_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3" >
                                                <label for="example-text-input" class="col-sm-2 ">About Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="file"
                                                           name="about_image"
                                                           id="about_image">
                                                    @error('about_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Our Values Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="our_values_title_ar"
                                                    >
                                                    @error('our_values_title_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Our Values  Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="our_values_description_ar"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('our_values_description_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Vision Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="vision_description_ar"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('vision_description_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3" >
                                                <label for="example-text-input" class="col-sm-2 ">Vision Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="file"
                                                           name="vision_image"
                                                           id="vision_image">
                                                    @error('vision_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Mission Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="mission_description_ar"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('mission_description_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3" >
                                                <label for="example-text-input" class="col-sm-2 ">Mission Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="file"
                                                           name="mission_image"
                                                           id="mission_image">
                                                    @error('mission_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option selected disabled>Status Seç</option>
                                                        <option value="Inactive">In Aktiv</option>
                                                        <option value="Active">Aktiv</option>
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
                                                <label for="example-text-input" class="col-sm-2 col-form-label">About Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="about_title_en"
                                                    >
                                                    @error('about_title_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">About Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="about_description_en"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('about_description_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Our Values Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="our_values_title_en"
                                                    >
                                                    @error('our_values_title_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Our Values  Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="our_values_description_en"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('our_values_description_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Vision Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="vision_description_en"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('vision_description_en')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Mission Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="mission_description_en"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('mission_description_ar')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option selected disabled>Status Seç</option>
                                                        <option value="Inactive">In Aktiv</option>
                                                        <option value="Active">Aktiv</option>
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
                                                <label for="example-text-input" class="col-sm-2 col-form-label">About Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="about_title_ru"
                                                    >
                                                    @error('about_title_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">About Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="about_description_ru"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('description_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Our Values Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control"
                                                           type="text"
                                                           name="our_values_title_ru"
                                                    >
                                                    @error('our_values_title_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Our Values  Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="our_values_description_ru"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('our_values_description_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Vision Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="vision_description_ru"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('vision_description_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Mission Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control"
                                                              name="mission_description_ru"
                                                              id="editor"
                                                              cols="30"
                                                              rows="10"></textarea>
                                                    @error('mission_description_ru')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Select</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example" name="status">
                                                        <option selected disabled>Status Seç</option>
                                                        <option value="Inactive">In Aktiv</option>
                                                        <option value="Active">Aktiv</option>
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
                                <a href="{{ route('admin.services.list') }}" class="btn btn-danger">Geri</a>

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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#imageShow').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection
