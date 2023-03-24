@extends('admin.layouts.main')
@section('page-title', 'Contacts')
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
                        <div class="body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">Sr no</th>
                                            <th class="border-bottom-0">Name</th>
                                            <th class="border-bottom-0">Email</th>
                                            <th class="border-bottom-0">Mobile</th>
                                            <th class="border-bottom-0">Message</th>
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
		let i = 1;
        $('#datatable').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_',
            },
            // server side 
            processing: true,
            serverSide: true,
            order: [[ 1, "desc" ]],
            ajax: "{{ route('admin.contacts.list') }}",
            columns: [
				{
					data: "id",
					render: function (data, type, row, meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
                { data: 'name'},
                { data: 'email'},
                { data: 'mobile'},
                { 
					data: 'message',
					render : function ( data, type, row, meta ) {
                        let string = data.length > 10 ? data.substring(0, 10) + "..." : data;
                        return `<span title="${data}" style="cursor:pointer;"> ${string}</span>`;
                    }
			 	},       
            ]
        });
    });
</script>
@endsection