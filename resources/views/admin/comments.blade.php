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
                    @lang('locale.comment', ['suffix'=>'s'])
                </h5>
                <div class="card-body table-responsive">
                    <table id="responsive-datatable" class="table table-sm table-bordered table-bordered dt-responsive">
                        <thead class="bg-soft-warning">
                            <th>#</th>
                            <th>@lang('locale.product', ['suffix'=>''])</th>
                            <th>@lang('locale.name')</th>
                            <th>@lang('locale.comment', ['suffix'=>''])</th>
                            <th>@lang('locale.actions')</th>
                        </thead>
                        <tbody>
                            @foreach ($comments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->product->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->comment }}</td>
                                <td>
                                    <form action="{{ route('comments.destroy', $item->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-xs btn-soft-danger" onclick="if(!confirm('Confirmez-Vous cette Suppression ?')) return false"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
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
    
    <script> $("#responsive-datatable").DataTable() </script>
    @endpush
</x-app-layout>
