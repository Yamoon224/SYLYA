<div class="modal fade" id="category-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-soft-primary">
                <h4 class="modal-title">@lang('locale.category', ['suffix'=>app()->getLocale() == 'en' ? 'y' : ''])</h4>
                <button type="button" class="text-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('categories.update', $item->id) }}" method="post">
                @csrf @method('PUT')
                <div class="modal-body">
                    <div class="d-grid">
                        <label for="name[{{ $item->id }}]" class="form-label">@lang('locale.name') <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name[{{ $item->id }}]" value="{{ $item->name }}" name="name" placeholder="Ex: Scie" required/> 
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