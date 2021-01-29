{!! form_start($form) !!}
<div class="mb-4">
    <div class="row">
        <div class="col-12 col-sm-6">
            {!! form_row($form->lastname) !!}
        </div>
        <div class="col-12 col-sm-6">
            {!! form_row($form->firstname) !!}
        </div>
        <div class="col-12">
            {!! form_row($form->email) !!}
        </div>
        <div class="col-12 col-sm-6">
            {!! form_row($form->job) !!}
        </div>
        <div class="col-12 col-sm-6">
            {!! form_row($form->phone) !!}
        </div>
        <div class="col-12 col-sm-6">
            {!! form_row($form->company) !!}
        </div>
        <div class="col-12 col-sm-6">
            {!! form_row($form->employees) !!}
        </div>
    </div>
    {{--                    {!! form_rest($form) !!}--}}
</div>
<p class="text-3xs mb-5">En remplissant ce formulaire, vous confirmez accepter le traitement de vos
    données
    personnelles par
    {{ config('general.name') }}, conformément à notre <a href="#" target="_blank" class="text-primary">Politique de
        confidentialité</a>.</p>
<div class="text-center">
    <button type="submit"
            class="btn btn-lg btn-primary rounded-full text-md font-bold akk-px-2 py-3">{{ __('Recontactez-moi') }}</button>
</div>
{!! form_end($form) !!}
