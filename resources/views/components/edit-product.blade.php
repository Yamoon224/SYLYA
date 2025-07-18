<div class="modal fade" id="product-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-soft-primary">
                <h4 class="modal-title">@lang('locale.product', ['suffix'=>''])</h4>
                <button type="button" class="text-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('products.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="d-grid gap-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                <label for="category" class="form-label">@lang('locale.category', ['suffix'=>app()->getLocale() == 'en' ? 'y' : '']) <span class="text-danger">*</span></label>
                                <select class="form-control" id="category" name="category_id" required>
                                    <option value="">@lang('locale.select')</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $item->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                <label for="name[{{ $item->id }}]" class="form-label">@lang('locale.name') <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name[{{ $item->id }}]" value="{{ $item->name }}" name="name" placeholder="Ex: Scie" required/> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                <label for="price[{{ $item->id }}]" class="form-label">@lang('locale.price') <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="price[{{ $item->id }}]" value="{{ $item->price }}" name="price" placeholder="Ex: 2000" required/> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                <label for="qty[{{ $item->id }}]" class="form-label">@lang('locale.qty') <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="qty[{{ $item->id }}]" value="{{ $item->qty }}" name="qty" placeholder="Ex: 50" required/> 
                            </div>

                            {{-- THE PRODUCT IMAGES FRONT | BACK --}}
                            <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                <label for="front" class="form-label">@lang('locale.front')</label>
                                <input type="file" accept=".png, .jpg, .jpeg" class="form-control" id="front" name="img_front" placeholder="Ex: 2000"/> 
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 mb-2">
                                <label for="back" class="form-label">@lang('locale.back')</label>
                                <input type="file" accept=".png, .jpg, .jpeg" class="form-control" id="back" name="img_back" placeholder="Ex: 50"/> 
                            </div>

                            <div class="col-12">
                                <label for="descrpition" class="form-label">@lang('locale.description')</label>
                                <textarea row="4" style="resize: none" class="form-control" name="description" placeholder="Ex: @lang('locale.description')">{{ $item->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-xs btn-soft-success">@lang('locale.submit') <i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>