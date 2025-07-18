<x-app-layout>
    @push('links')
    <link href="{{ asset('admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    @endpush

    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header border-bottom bg-white d-flex justify-content-between align-items-center">
                    @lang('locale.rate', ['suffix'=>'s'])
                </h5>
                <div class="card-body table-responsive">
                    <table id="responsive-datatable" class="table table-sm table-bordered table-bordered dt-responsive">
                        <thead class="bg-soft-warning">
                            <th>#</th>
                            <th>@lang('locale.rate', ['suffix'=>''])</th>
                            <th>@lang('locale.user', ['suffix'=>''])</th>
                            <th>@lang('locale.product', ['suffix'=>''])</th>
                        </thead>
                        <tbody>
                            @foreach ($rates as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->rate }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->product->name }}</td>
                            </tr>
                            @endforeach                                
                        </tbody>
                    </table>
                </div>
            </div>           
        </div>
    </div> 

    @push('scripts')
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    
    <script>
        $("#responsive-datatable").DataTable()
    </script>
    @endpush
</x-app-layout>
