<section class="section{{!empty($size) ? ' '.$size : ''}}{{!empty($color) ? ' bg-'.$color : ''}}{{!empty($text) ? ' text-'.$text : ''}}">
    <div class="container">
        <h2 class="text-center text-6xl font-bold akk-mb-8">{{$title}}</h2>
        <form action="{{ route('brain.newsletter.subscribers.store') }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5 w-35 akk-mb-6 mb-md-0">
                    <input type="hidden" name="origin" value="{{!empty($origin) ? $origin : null}}">
                    <input id="email"
                           type="email"
                           class="form-control form-control-lg {{!empty($rounded) ? ' rounded-'.$rounded : ''}}{{!empty($color) ? ' border-none' : ' border-2'}} @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}"
                           placeholder="{{__('Your e-mail address')}}"
                           required>
                    @include('includes.error', ['error' => 'email'])
                </div>
                <div class="col-12 col-md-3 col-lg-2 text-center">
                    <button type="submit" class="btn btn-lg akk-px-10{{!empty($btn) ? ' btn-'.$btn : ''}}{{!empty($rounded) ? ' rounded-'.$rounded : ''}}">{{__('Submit')}}</button>
                </div>
            </div>
        </form>
    </div>
</section>
