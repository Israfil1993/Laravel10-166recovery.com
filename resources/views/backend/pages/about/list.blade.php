@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Haqqımızda Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Haqqımızda </h4>
                            <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#az" role="tab">Ar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#en" role="tab">En</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#ru" role="tab">Ru</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="az" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>About Title</th>
                                            <th>About Description</th>
                                            <th>About İmage</th>
                                            <th>Our Values Title</th>
                                            <th>Our Values Description</th>
                                            <th>Vision Description</th>
                                            <th>Vision Image</th>
                                            <th>Mission Description</th>
                                            <th>Mission Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($aboutsAr as $about)
                                            <tr>
                                                <td>{{ $about->id }}</td>
                                                <td>{{ $about->about_title_ar }}</td>
                                                <td>{{ Str::limit($about->about_description_ar, 30)  }}</td>


                                                <td>
                                                    <img src="{{ (!empty($about->about_image))? url('uploads/abouts/'.$about->about_image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $about->our_values_title_ar }}</td>
                                                <td>{{ $about->our_values_description_ar }}</td>
                                                <td>{{ $about->vision_description_ar }}</td>
                                                <td>
                                                    <img src="{{ (!empty($about->vision_image))? url('uploads/abouts/'.$about->vision_image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $about->mission_description_ar }}</td>
                                                <td>
                                                    <img src="{{ (!empty($about->mission_image))? url('uploads/abouts/'.$about->mission_image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>







                                                <td>{{ $about->status }}</td>



                                                <td>
                                                    <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteAbout({{ $about->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $aboutsAr->links() }}
                                </div>

                                <div class="tab-pane" id="en" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>About Title</th>
                                            <th>About Description</th>
                                            <th>About İmage</th>
                                            <th>Our Values Title</th>
                                            <th>Our Values Description</th>
                                            <th>Vision Description</th>
                                            <th>Vision Image</th>
                                            <th>Mission Description</th>
                                            <th>Mission Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($aboutsEn as $about)
                                            <tr>
                                                <td>{{ $about->id }}</td>
                                                <td>{{ $about->about_title_en }}</td>
                                                <td>{{ Str::limit($about->about_description_en, 30)  }}</td>


                                                <td>
                                                    <img src="{{ (!empty($about->about_image))? url('uploads/abouts/'.$about->about_image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $about->our_values_title_en }}</td>
                                                <td>{{ $about->our_values_description_en }}</td>
                                                <td>{{ $about->vision_description_en }}</td>
                                                <td>
                                                    <img src="{{ (!empty($about->vision_image))? url('uploads/abouts/'.$about->vision_image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $about->mission_description_en }}</td>
                                                <td>
                                                    <img src="{{ (!empty($about->mission_image))? url('uploads/abouts/'.$about->mission_image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>







                                                <td>{{ $about->status }}</td>



                                                <td>
                                                    <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteAbout({{ $about->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $aboutsEn->links() }}
                                </div>

                                <div class="tab-pane" id="ru" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>About Title</th>
                                            <th>About Description</th>
                                            <th>About İmage</th>
                                            <th>Our Values Title</th>
                                            <th>Our Values Description</th>
                                            <th>Vision Description</th>
                                            <th>Vision Image</th>
                                            <th>Mission Description</th>
                                            <th>Mission Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($aboutsRu as $about)
                                            <tr>
                                                <td>{{ $about->id }}</td>
                                                <td>{{ $about->about_title_ru }}</td>
                                                <td>{{ Str::limit($about->about_description_ru, 30)  }}</td>


                                                <td>
                                                    <img src="{{ (!empty($about->about_image))? url('uploads/abouts/'.$about->about_image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $about->our_values_title_ru }}</td>
                                                <td>{{ $about->our_values_description_ru }}</td>
                                                <td>{{ $about->vision_description_ru }}</td>
                                                <td>
                                                    <img src="{{ (!empty($about->vision_image))? url('uploads/abouts/'.$about->vision_image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $about->mission_description_ru }}</td>
                                                <td>
                                                    <img src="{{ (!empty($about->mission_image))? url('uploads/abouts/'.$about->mission_image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>







                                                <td>{{ $about->status }}</td>



                                                <td>
                                                    <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteAbout({{ $about->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $aboutsRu->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function deleteAbout(aboutId) {
            Swal.fire({
                title: 'Silməyə əminsiniz?',
                text: "Bu əməliyyatı geri ala bilməzsiniz!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Bəli, sil!',
                cancelButtonText: 'Xeyr'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `{{ route('admin.about.delete', '') }}/${aboutId}`;
                }
            })
        }
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
@endsection
