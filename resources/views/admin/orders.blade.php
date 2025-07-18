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
                    @lang('locale.order', ['suffix'=>'s'])
                </h5>
                <div class="card-body table-responsive">
                    <table id="responsive-datatable" class="table table-sm table-bordered table-bordered dt-responsive">
                        <thead>
                            <th>#</th>
                            <th>@lang('locale.customer', ['suffix'=>''])</th>
                            <th>@lang('locale.ref')</th>
                            <th>@lang('locale.amount')</th>
                            <th>@lang('locale.discount')</th>
                            <th>@lang('locale.status')</th>
                            <th>@lang('locale.actions')</th>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->customer->name }}</td>
                                <td>{{ $item->ref }}</td>
                                <td>{{ moneyFormat($item->amount) }}</td>
                                <td>{{ moneyFormat($item->discount) }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <form action="{{ route('products.destroy', $item->id) }}" method="post" style="display: inline-block">
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

    <div class="modal fade" id="new-product" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-soft-success">
                    <h4 class="modal-title">@lang('locale.product', ['suffix'=>''])</h4>
                    <button type="button" class="text-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="d-grid gap-3">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <label for="name" class="form-label">@lang('locale.name') <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ex: Scie" required/> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                    <label for="price" class="form-label">@lang('locale.price') <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="Ex: 2000" required/> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                    <label for="qty" class="form-label">@lang('locale.qty') <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="qty" name="qty" placeholder="Ex: 50" required/> 
                                </div>

                                {{-- THE PRODUCT IMAGES FRONT | BACK --}}
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                    <label for="front" class="form-label">@lang('locale.front') <span class="text-danger">*</span></label>
                                    <input type="file" accept=".png, .jpg, .jpeg" class="form-control" id="front" name="img_front" placeholder="Ex: 2000" required/> 
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                    <label for="back" class="form-label">@lang('locale.back') <span class="text-danger">*</span></label>
                                    <input type="file" accept=".png, .jpg, .jpeg" class="form-control" id="back" name="img_back" placeholder="Ex: 50" required/> 
                                </div>

                                <div class="col-12">
                                    <label for="descrpition" class="form-label">@lang('locale.description')</label>
                                    <textarea row="4" style="resize: none" class="form-control" name="description" placeholder="Ex: @lang('locale.description')"></textarea>
                                </div>
                            </div>
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
