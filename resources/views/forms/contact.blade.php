<div class="container akk-py-10">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-7 col-lg-8">
            <form id="contact-form" action="#" method="post">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="lastname">{{ __('Nom') }}</label>
                            <input id="lastname" type="text"
                                   class="form-control @error('lastname') is-invalid @enderror"
                                   name="lastname"
                                   value="{{ old('message') }}" required/>
                            @include('includes.error', ['error' => 'lastname'])
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="firstname">{{ __('Prénom') }}</label>
                            <input id="firstname" type="text"
                                   class="form-control @error('firstname') is-invalid @enderror"
                                   name="firstname"
                                   value="{{ old('message') }}" required/>
                            @include('includes.error', ['error' => 'firstname'])
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">{{ __('E-mail') }}</label>
                    <input id="email" type="text"
                           class="form-control @error('email') is-invalid @enderror"
                           name="email"
                           value="{{ old('email') }}" required/>
                    @include('includes.error', ['error' => 'email'])
                </div>

                <div class="form-group">
                    <label for="phone">{{ __('Téléphone') }}</label>
                    <input id="phone" type="text"
                           class="form-control @error('phone') is-invalid @enderror"
                           name="phone"
                           value="{{ old('phone') }}" required/>
                    @include('includes.error', ['error' => 'phone'])
                </div>

                <div class="form-group">
                    <label for="subject">{{ __('Sujet') }}</label>
                    <input id="subject" type="text"
                           class="form-control @error('subject') is-invalid @enderror"
                           name="subject"
                           value="{{ old('subject') }}" required/>
                    @include('includes.error', ['error' => 'subject'])
                </div>

                <div class="form-group">
                    <label for="message">{{ __('Message') }}</label>
                    <textarea id="message" type="text"
                              class="form-control @error('message') is-invalid @enderror"
                              name="message"
                              rows="8"
                              required>{{ old('message') }}</textarea>
                    @include('includes.error', ['error' => 'message'])
                </div>

                <div class="text-center akk-mt-5">
                    <button type="submit"
                            class="g-recaptcha btn btn-primary akk-px-10"
                            data-sitekey="6LcsZm8UAAAAAGsfPcUBmPro_aiOTZIq1Q6Nmo9u"
                            data-callback='onSubmit'>{{ __('Envoyer') }}</button>
                </div>

            </form>
        </div>
        <div class="col-12 col-sm-6 col-md-5 col-lg-4 akk-pl-8">
            <div class="card border-2 akk-px-10 akk-py-8 akk-mt-8">
                <section class="akk-mb-10">
                    <h2 class="text-3xl font-medium mb-2">{{ config('general.owner') }}</h2>
                    <p class="mb-0">{{ config('general.address.street1') }}</p>
                    <p class="mb-0">{{ config('general.address.zip') }} {{ config('general.address.city') }}</p>
                    <p class="mb-0">{{ config('general.address.country') }}</p>
                </section>
                <section>
                    <h2 class="text-3xl font-medium mb-2">{{__('Appelez-nous !')}}</h2>
                    <p class="mb-0">{{ config('general.contact.phone') }}</p>
                </section>
            </div>
        </div>
    </div>
</div>
