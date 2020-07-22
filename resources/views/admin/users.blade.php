@extends('admin.layout.default')
@section('css')
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/fontawesome.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/simple-line-icons.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2-bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/pace-theme-minimal.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.mCustomScrollbar.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-datepicker3.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/spectrum.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.fancybox.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-editable.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/table.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
@endsection
@section('content')
<div class="page-content ">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active">Quản trị viên</li>
    </ol>


    <div class="clearfix"></div>
    <div id="main">
        <div class="table-wrapper">
            
            <div class="portlet light bordered portlet-no-padding">
                <div class="portlet-title">
                    <div class="caption">
                        <div class="wrapper-action">
                            <div class="btn-group">
                                <a class="btn btn-secondary dropdown-toggle" href="#" data-toggle="dropdown">Hành động</a>
                                <ul class="dropdown-menu">
                                    
                                    <li>
                                        <a href="" class="delete-many-entry-trigger" data-class-item="">Xoá</a>
                                    </li>
                                 </ul>
                            </div>
                            <button class="btn btn-primary btn-show-table-options">Lọc dữ liệu</button>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-responsive  table-has-actions   table-has-filter ">
                        <div id="table-users_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" style="width: 100%;">
                            <div id="table-users_filter" class="dataTables_filter">
                                <label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="table-users"></label>
                            </div>
                            <div class="dt-buttons btn-group"> 
                                <button class="btn btn-secondary action-item" tabindex="0" aria-controls="table-users">
                                    <span><span data-action="create" data-href="{{URL::route('addUser')}}"><i class="fa fa-plus"></i> Tạo mới</span></span>
                                </button> 
                                <button class="btn btn-secondary buttons-reload" tabindex="0" aria-controls="table-users"><span><i class="fas fa-sync"></i> Tải lại</span></button> 
                            </div>
                            <div id="table-users_processing" class="dataTables_processing card" style="display: none;"></div>
                            <table class="table table-striped table-hover vertical-middle dataTable no-footer" id="table-users" role="grid" aria-describedby="table-users_info" style="width: 1582px;">
                                <thead>
                                    <tr role="row">
                                        <th width="10px" class="text-left no-sort sorting_disabled" title="<input class=&quot;table-check-all&quot; data-set=&quot;.dataTable .checkboxes&quot; type=&quot;checkbox&quot;>" rowspan="1" colspan="1" aria-label="" style="width: 37px;">
                                            <input class="table-check-all" data-set=".dataTable .checkboxes" type="checkbox">
                                        </th>
                                        <th title="Tên đăng nhập" class="text-left column-key-username sorting_desc" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-sort="descending" aria-label="Tên đăng nhậporderby asc" style="width: 181px;">Tên đăng nhập</th>
                                        <th title="Email" class="text-left column-key-email sorting" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-label="Emailorderby asc" style="width: 271px;">Email</th>
                                        
                                        <th title="Ngày tạo" width="100px" class="column-key-created_at sorting" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-label="Ngày tạoorderby asc" style="width: 100px;">Ngày tạo</th>
                                        <th title="Trạng thái" width="300px" class="column-key-status sorting" tabindex="0" aria-controls="table-users" rowspan="1" colspan="1" aria-label="Trạng tháiorderby asc" style="width: 300px;">Trạng thái</th>
                                        
                                        <th title="Tác vụ" width="150px" class="text-right sorting_disabled" rowspan="1" colspan="1" aria-label="Tác vụ" style="width: 150px;">Tác vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=0
                                    @endphp
                                    @foreach($users as $user)
                                        
                                        @if($i%2 == 0)
                                        <tr role="row" class="odd">
                                        @else
                                        <tr role="row" class="even">
                                        @endif
                                            <td class=" text-left no-sort">
                                                <div class="text-left">
                                                    <div class="checkbox checkbox-primary table-checkbox">
                                                        <input type="checkbox" class="checkboxes" name="id[]" value="{{$user->id}}">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-left column-key-username sorting_1">
                                                <a href="{{URL::route('editUser',$user->id)}}">{{$user->name}}</a>
                                            </td>
                                            <td class=" text-left column-key-email">{{$user->email}}</td>
                                            
                                            <td class="  column-key-created_at">{{$user->created_at}}</td>
                                            <td class="  column-key-status">
                                                <a href="#" class="btn btn-success">Active</a>
                                                @if($user->role ==1)
                                                <a href="#" onclick="change({{$user->id}})" class="btn btn-info">Quản trị viên</a>
                                                @else
                                                <a href="#" onclick="change({{$user->id}})" class="btn btn-info">Cộng tác viên</a>
                                                @endif
                                            </td>
                                            
                                            <td class=" text-right">
                                                
                                                <a href="{{URL::route('editUser',$user->id)}}" class="btn btn-icon btn-primary" data-toggle="tooltip" data-original-title="View user's profile"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn btn-icon btn-danger deleteDialog" data-toggle="tooltip" data-section="" role="button" data-original-title="Xóa bản ghi"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            <div class="datatables__info_wrap">
                                <div class="dataTables_paginate paging_simple_numbers" id="table-users_paginate" style="display: none;">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="table-users_previous">
                                            <a href="#" aria-controls="table-users" aria-label="&amp;laquo; Trước" data-dt-idx="0" tabindex="0" class="page-link">« Trước</a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="table-users" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item next disabled" id="table-users_next">
                                            <a href="#" aria-controls="table-users" aria-label="Sau &amp;raquo;" data-dt-idx="2" tabindex="0" class="page-link">Sau »</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dataTables_length" id="table-users_length" style="display: none;">
                                    <label>
                                        <span class="dt-length-style">
                                            <select name="table-users_length" aria-controls="table-users" class="form-control form-control-sm">
                                                <option value="-1">Tất cả</option>
                                                <option value="10">10</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                            </select>
                                        </span>
                                    </label>
                                </div>
                                <div class="dataTables_info" id="table-users_info" role="status" aria-live="polite">
                                    <span class="dt-length-records"><i class="fa fa-globe"></i> <span class="d-none d-sm-inline">Hiển thị từ</span> 1 đến 2 trong tổng số <span class="badge badge-secondary bold badge-dt">2</span> <span class="hidden-xs">bản ghi</span></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-confirm-delete" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title"><i class="til_img"></i><strong>Xác nhận xóa</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body with-padding">
                        <div>Bạn có chắc chắn muốn xóa bản ghi này?</div>
                    </div>

                    <div class="modal-footer">
                        <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                        <button class="float-right btn btn-danger delete-crud-entry">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->
        <div class="modal fade delete-many-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title"><i class="til_img"></i><strong>Xác nhận xóa</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body with-padding">
                        <div>Do you really want to delete selected record(s)?</div>
                    </div>

                    <div class="modal-footer">
                        <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                        <button class="float-right btn btn-danger delete-many-entry-button">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->
        <div class="modal fade modal-bulk-change-items" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title"><i class="til_img"></i><strong>Bulk changes</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body with-padding">
                        <div><div class="modal-bulk-change-content"></div></div>
                    </div>

                    <div class="modal-footer">
                        <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                        <button class="float-right btn btn-info confirm-bulk-change-button" data-load-url="">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal -->
    </div>
</div>
@endsection
@section('js')
    <script src="{{asset('js/admin/respond.min.js')}}"></script>
    <script src="{{asset('js/admin/excanvas.min.js')}}"></script>
    <script src="{{asset('js/admin/ie8.fix.min.js')}}"></script>
    <script src="{{asset('js/admin/modernizr.min.js')}}"></script>
    <script src="{{asset('js/admin/select2.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/admin/core.js')}}"></script>
    <script src="{{asset('js/admin/toastr.min.js')}}"></script>
    <script src="{{asset('js/admin/pace.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('js/admin/jquery.stickytableheaders.js')}}"></script>
    <script src="{{asset('js/admin/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/admin/spectrum.js')}}"></script>
    <script src="{{asset('js/admin/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-editable.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/admin/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap3-typeahead.min.js')}}"></script>
    <script src="{{asset('js/admin/table.js')}}"></script>
    <script src="{{asset('js/admin/filter.js')}}"></script>
@endsection