@extends('layouts.app')


@section('content')
<section id="reg_delivery" class="reg_delivery">
    <div class="reg_page">
        <div class="reg_page_heading">
            <h1 class="reg_heading">Delivery Hero<br />Pre Registration</h1>
        </div>
        <div class="reg_page_body">
            <div class="reg_form w-form">
                @livewire('delivery-hero')
            </div>
        </div>
    </div>
</section>
@endsection


@push('js')
@livewireScripts
@endpush

@push('css')
@livewireStyles
@endpush
