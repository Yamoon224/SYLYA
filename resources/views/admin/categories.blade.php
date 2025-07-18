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
                    @lang('locale.category', ['suffix'=>app()->getLocale() == 'en' ? 'ies' : 's'])
                    <span class="ms-auto">
                        <a class="btn btn-xs btn-soft-success" data-bs-toggle="modal" data-bs-target="#new-category"><i class="fas fa-folder-plus"></i> @lang('locale.add')</a>
                    </span>
                </h5>
                <div class="card-body table-responsive">
                    <table id="responsive-datatable" class="table table-sm table-bordered table-bordered dt-responsive">
                        <thead>
                            <th>#</th>
                            <th>@lang('locale.name')</th>
                            <th>@lang('locale.actions')</th>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a style="display: inline-block" class="btn btn-xs btn-soft-info" data-bs-toggle="modal" data-bs-target="#category-{{ $item->id }}"><i class="fas fa-edit"></i></a>
                                    <x-edit-category :item="$item"></x-edit-category>
                                    <form action="{{ route('categories.destroy', $item->id) }}" method="post" style="display: inline-block">
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

    <div class="modal fade" id="new-category" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-soft-success">
                    <h4 class="modal-title">@lang('locale.category', ['suffix'=>app()->getLocale() == 'en' ? 'y' : ''])</h4>
                    <button type="button" class="text-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="d-grid">
                            <label for="name" class="form-label">@lang('locale.name') <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Scie" required/> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-xs btn-soft-success">@lang('locale.submit') <i class="fas fa-check"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-dialog -->
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
