<x-auth-layout>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="username" class="form-label">@lang('locale.email') / @lang('locale.username')</label>
            <input class="form-control" name="email" type="text" id="username" required placeholder="@lang('locale.email') / @lang('locale.username')">
        </div>

        <div class="mb-2">
            <label for="password" class="form-label">@lang('locale.password')</label>
            <input class="form-control" type="password" required name="password" id="password" placeholder="@lang('locale.password')">
        </div>

        <div class="mb-2">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                <label class="form-check-label" for="checkbox-signin">@lang('locale.remember_me')</label>
            </div>
        </div>

        <div class="mb-2 d-grid text-center">
            <button class="btn btn-warning text-white">@lang('locale.sign_in')</button>
        </div>
    </form>
</x-auth-layout>
