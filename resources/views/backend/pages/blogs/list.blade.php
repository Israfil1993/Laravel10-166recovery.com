@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Blogların Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bloglar</h4>
                            <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#ar" role="tab">Ar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#en" role="tab">En</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#ru" role="tab">Ru</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="ar" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>İmage</th>
                                            <th>Published</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blogsAr as $blog)
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>{{ $blog->title_ar }}</td>
                                                <td>{!! Str::limit($blog->description_ar, 30) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($blog->image))? url('uploads/blogs/'.$blog->image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $blog->published_at }}</td>

                                                <td>{{ $blog->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteBlog({{ $blog->id }})" class="fa fa-trash-alt" title="delete" style="font-size: 24px; color: red;">

                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $blogsAr->links() }}
                                </div>

                                <div class="tab-pane" id="en" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>İmage</th>
                                            <th>Published</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blogsEn as $blog)
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>{{ $blog->title_en }}</td>
                                                <td>{!! Str::limit($blog->description_en, 30) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($blog->image))? url('uploads/blogs/'.$blog->image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $blog->published_at }}</td>

                                                <td>{{ $blog->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteBlog({{ $blog->id }})" class="fa fa-trash-alt" title="delete" style="font-size: 24px; color: red;">

                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $blogsEn->links() }}
                                </div>

                                <div class="tab-pane" id="ru" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>İmage</th>
                                            <th>Published</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blogsRu as $blog)
                                            <tr>
                                                <td>{{ $blog->id }}</td>
                                                <td>{{ $blog->title_ru }}</td>
                                                <td>{!! Str::limit($blog->description_ru, 30) !!}</td>
                                                <td>
                                                    <img src="{{ (!empty($blog->image))? url('uploads/blogs/'.$blog->image): url('uploads/default.jpg') }}"
                                                         style="height: 50px; width: 50px;">
                                                </td>
                                                <td>{{ $blog->published_at }}</td>

                                                <td>{{ $blog->status }}</td>
                                                <td>
                                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteBlog({{ $blog->id }})" class="fa fa-trash-alt" title="delete" style="font-size: 24px; color: red;">

                                                    </a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $blogsRu->links() }}
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
        function deleteBlog(blogId) {
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
                    window.location.href = `{{ route('admin.blog.delete', '') }}/${blogId}`;
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
