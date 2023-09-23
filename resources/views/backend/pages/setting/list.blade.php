@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Tənzimləmələr Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tənzimləmələr</h4>
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
                                            <th>Key</th>
                                            <th>Value</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($settingsAr as $setting)
                                            <tr>
                                                <td>{{ $setting->id }}</td>
                                                <td>{{ $setting->key }}</td>
                                                <td>{!! Str::limit($setting->value, 30)  !!} </td>
                                                <td>
                                                    <img src="{{ (!empty($setting->image))? url('uploads/setting/'.$setting->image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $setting->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.setting.edit', $setting->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteSetting({{ $setting->id }})" class="fa fa-trash-alt" title="delete" style="font-size: 24px; color: red;">

                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $settingsAr->links() }}
                                </div>

                                <div class="tab-pane" id="en" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Key</th>
                                            <th>Value</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($settingsEn as $setting)
                                            <tr>
                                                <td>{{ $setting->id }}</td>
                                                <td>{{ $setting->key }}</td>
                                                <td>{{ Str::limit($setting->value, 30)  }}</td>
                                                <td>
                                                    <img src="{{ (!empty($setting->image))? url('uploads/setting/'.$setting->image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $setting->status }}</td>

                                                <td>
                                                    <a href="" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteSetting({{ $setting->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $settingsEn->links() }}
                                </div>

                                <div class="tab-pane" id="ru" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Key</th>
                                            <th>Value</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($settingsRu as $setting)
                                            <tr>
                                                <td>{{ $setting->id }}</td>
                                                <td>{{ $setting->key }}</td>
                                                <td>{{ Str::limit($setting->value, 30)  }}</td>
                                                <td>
                                                    <img src="{{ (!empty($setting->image))? url('uploads/setting/'.$setting->image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $setting->status }}</td>

                                                <td>
                                                    <a href="" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteSetting({{ $setting->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $settingsRu->links() }}
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
        function deleteSetting(settingId) {
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
                    window.location.href = `{{ route('admin.setting.delete', '') }}/${settingId}`;
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
