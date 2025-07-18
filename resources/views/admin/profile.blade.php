<x-app-layout>
    <div class="row">
        <div class="col-xl-4 mx-auto">
            <div class="card">
                <div class="text-center card-body">
                    <div>
                        <img src="{{ asset('images/profile.png') }}" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="profile-image">
    
                        <p class="text-muted font-13 mb-3">{{ auth()->user()->group->name }}</p>
    
                        <div class="text-start">
                            <p class="text-muted font-13"><strong>@lang('locale.name'):</strong> <span class="ms-2">{{ auth()->user()->name }}</span></p>
                            <p class="text-muted font-13"><strong>@lang('locale.phone') :</strong><span class="ms-2">{{ auth()->user()->phone }}</span></p>
                            <p class="text-muted font-13"><strong>@lang('locale.email') :</strong> <span class="ms-2">{{ auth()->user()->email }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>