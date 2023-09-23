@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Faq Siyahı</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Faq</h4>
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
                                <div class="tab-pane active" id="ar" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($faqAr as $faq)
                                            <tr>
                                                <td>{{ $faq->id }}</td>
                                                <td>{{ $faq->question_ar}}</td>
                                                <td>{!! Str::limit($faq->answer_ar, 30) !!}  </td>

                                                <td>{{ $faq->status }}</td>

                                                <td>
                                                    <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteFaq({{ $faq->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $faqAr->links() }}
                                </div>

                                <div class="tab-pane" id="en" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($faqEn as $faq)
                                            <tr>
                                                <td>{{ $faq->id }}</td>
                                                <td>{{ $faq->question_en}}</td>
                                                <td>{!! Str::limit($faq->answer_en, 30) !!}</td>

                                                <td>{{ $faq->status }}</td>

                                                <td>
                                                    <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteFaq({{ $faq->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $faqEn->links() }}
                                </div>



                                <div class="tab-pane" id="ru" role="tabpanel">
                                    <table class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($faqRu as $faq)
                                            <tr>
                                                <td>{{ $faq->id }}</td>
                                                <td>{{ $faq->question_ru }}</td>
                                                <td>{!! Str::limit($faq->answer_ru, 30) !!}</td>

                                                <td>{{ $faq->status }}</td>

                                                <td>
                                                    <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-info" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick="deleteFaq({{ $faq->id }})" class="zmdi zmdi-delete" title="delete" style="font-size: 24px; color: red;">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $faqRu->links() }}
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
        function deleteFaq(faqId) {
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
                    window.location.href = `{{ route('admin.faq.delete', '') }}/${faqId}`;
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
