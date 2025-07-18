<x-app-layout>
    @push('links')
    <link href="{{ asset('admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    @endpush

    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header border-bottom bg-white d-flex justify-content-between align-items-center">
                    @lang('locale.product', ['suffix'=>'s'])
                    <span class="ms-auto">
                        <a class="btn btn-xs btn-soft-success" data-bs-toggle="modal" data-bs-target="#new-product"><i class="fas fa-folder-plus"></i> @lang('locale.add')</a>
                    </span>
                </h5>
                <div class="card-body table-responsive">
                    <table id="responsive-datatable" class="table table-sm table-bordered table-bordered dt-responsive">
                        <thead>
                            <th>#</th>
                            <th>@lang('locale.category', ['suffix'=>app()->getLocale() == 'en' ? 'y' : ''])</th>
                            <th>@lang('locale.name')</th>
                            <th>@lang('locale.unit_price')</th>
                            <th>@lang('locale.qty')</th>
                            <th>@lang('locale.available')</th>
                            <th>@lang('locale.actions')</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ moneyFormat($item->price) }}</td>
                                <td>{{ $item->qty }} @lang('locale.unit')</td>
                                <td>{{ $item->qty-$item->details->sum('qty') }} @lang('locale.unit')</td>
                                <td>
                                    <a style="display: inline-block" class="btn btn-xs btn-soft-info" data-bs-toggle="modal" data-bs-target="#product-{{ $item->id }}"><i class="fas fa-edit"></i></a>
                                    <x-edit-product :item="$item" :categories="$categories"></x-edit-product>
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
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                    <label for="category" class="form-label">@lang('locale.category', ['suffix'=>app()->getLocale() == 'en' ? 'y' : '']) <span class="text-danger">*</span></label>
                                    <select class="form-control" id="category" name="category_id" required>
                                        <option value="">@lang('locale.select')</option>
                                        @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
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
    
    <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
    <script>
        $('[data-toggle="select2"]').select2()
    </script>
    <script>
        $("#responsive-datatable").DataTable()
    </script>
    @endpush
</x-app-layout>
