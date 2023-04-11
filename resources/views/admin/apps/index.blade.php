@extends('admin.layouts.main')
@section('page-title', 'Apps List')
@section('content')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>@yield('page-title')</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active">@yield('page-title')</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
            </div>
        </div>

            <!-- Basic Examples -->
            <div class="container-fluid">
            <div class="row clearfix">
                @include('admin.layouts.message')
                <div class="col-lg-12">
                    <div class="card">
                    <div class="header">
                        <ul class="header-dropdown form-head-button">
                            <li>
								<a href="{{ route('admin.app.create') }}" title="Add App" class="btn btn-success btn-sm" data-toggle="tooltip">
                                <i style="color: white;" class="zmdi zmdi-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">Actions</th>
                                            <th class="border-bottom-0">Logo</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Ratings</th>
                                            <th class="border-bottom-0">Store Links</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
</section>

@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('#datatable').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_',
            },
            // server side 
            // processing: true,
            serverSide: true,
            order: [[ 0, "desc" ]],
            ajax: "{{ route('admin.apps.list') }}",
            columns: [
                { 
                    data: "id",
                    render : function ( data, type, row, meta ) {
                	  	const editUrl = `{{route('admin.app.edit', '')}}/${data}`;
                	  	const viewUrl = `{{route('admin.app.view', '')}}/${data}`;
                	  	const deleteUrl = `{{route('admin.app.delete', '')}}/${data}`;
                        const AppUrl = row.app_auth_url && row.app_email && row.app_password ? `<a target="_blank" style="color:white;" href="${row.app_auth_url}/${row.app_email}/${row.app_password}" class="btn btn-sm btn-primary"><i class="zmdi zmdi-apps zmdi-hc-fw" data-toggle="tooltip" title="Go To App Admin" data-original-title="fa fa-eye"></i></a>` : "";
                        return `
                        <a  href="${editUrl}"" class="btn btn-sm btn-success"><i class="zmdi zmdi-edit zmdi-hc-fw" data-toggle="tooltip" title="Edit App" data-original-title="fa fa-pencil-square-o"></i></a>
                        <a  href="${viewUrl}"" class="btn btn-sm btn-primary"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="tooltip" title="View App" data-original-title="fa fa-eye"></i></a>
                        ${AppUrl}
                        <a  class="btn btn-sm btn-danger universalClickEvent text-white" data-title="Delete App" data-submit="Delete" data-body="Are you sure you want to delete the App ?" data-url="${deleteUrl}" title="Delete App"><i class="zmdi zmdi-hc-fw"></i></a>
                        `;
                    },
                    sortable: false
                },
                { 
                    data: 'logo',
                    render : function ( data, type, row, meta ) {
                        return `<img src="${data}" width="40" alt="Admin">`;
                    },
                    sortable: false
                },
                { 
                    data: 'name',
                    render : function ( data, type, row, meta ) {
                        let string = data.length > 10 ? data.substring(0, 10 - 3) + "..." : data;
                        return `<span title="${data}" style="cursor:pointer;"> ${string}</span>`;
                    },
                },
                { 
                    data: 'ratings',
                    render : function ( data, type, row, meta ) {
                        let span = `<span class="rating rating-index"><label>`
                        if(data){
                            for (let i = 0; i < data; i++) {
                                if(i > 4){
                                    break;
                                }
                                span += `<span class="icon"><i class="zmdi zmdi-star filled-icon filled-icon"></i></span>`;
                            }
                        }
                        span += `</label>( ${row.no_of_reviews} )</span>`
                        return `${span}`;
                    },
                },
                { 
                    data: 'play_store_link',
                    render : function ( data, type, row, meta ) {
                        return `
                                <a title="Play store" target="${data?'_blank':''}" href="${data??'#'}"><i class="zmdi zmdi-hc-fw social-icon-color social-icon-font-size"></i></a>
                                <a title="App store" target="${row.app_store_link?'_blank':''}" href="${row.app_store_link ??'#'}"><i class="zmdi zmdi-hc-fw social-icon-color social-icon-font-size"></i></a>
                        `;
                    },
                },       
            ]
        });
    });
</script>
@endsection