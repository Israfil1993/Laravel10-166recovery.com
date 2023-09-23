@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Xidmətlər Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Xidmətlər</h4>
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
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>İmage</th>
                                            <th>İmage</th>

                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($servicesAr as $service)
                                            <tr>
                                                <td>{{ $service->id }}</td>
                                                <td>{{ $service->title }}</td>
                                                <td>{!! Str::limit($service->description, 30) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($service->image_1))? url('uploads/services/'.$service->image_1): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ (!empty($service->image_2))? url('uploads/services/'.$service->image_2): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $service->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteServices({{ $service->id }})" class="fa fa-trash-alt" title="delete" style="font-size: 24px; color: red;">

                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $servicesAr->links() }}
                                </div>

                                <div class="tab-pane" id="en" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>İmage</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($servicesEn as $service)
                                            <tr>
                                                <td>{{ $service->id }}</td>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ Str::limit($service->description, 30)  }}</td>
                                                <td>
                                                    <img src="{{ (!empty($service->image_1))? url('uploads/services/'.$service->image_1): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ (!empty($service->image_2))? url('uploads/services/'.$service->image_2): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $service->status }}</td>



                                                <td>
                                                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteServices({{ $service->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $servicesEn->links() }}
                                </div>

                                <div class="tab-pane" id="ru" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>İmage</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($servicesRu as $service)
                                            <tr>
                                                <td>{{ $service->id }}</td>
                                                <td>{{ $service->title }}</td>
                                                <td>{{ Str::limit($service->description, 30)  }}</td>

                                                <td>{{ $service->status }}</td>
                                                <td>
                                                    <img src="{{ (!empty($service->image_1))? url('uploads/services/'.$service->image_1): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>
                                                    <img src="{{ (!empty($service->image_2))? url('uploads/services/'.$service->image_2): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>

                                                <td>
                                                    <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteService({{ $service->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $servicesRu->links() }}
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
        function deleteServices(servicesId) {
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
                    window.location.href = `{{ route('admin.services.delete', '') }}/${servicesId}`;
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
