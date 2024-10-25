@extends('layout.app')



    
    @push('styles')
        
    <link rel="stylesheet" href="{{ asset('css/favorit.css') }}">
    @endpush


@section('content')   
    <style></style>
    <div class="main-content">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis odit vero nisi nemo debitis similique odio quaerat perspiciatis perferendis! Quam, aliquam! Aut animi omnis dolores explicabo eligendi autem quam officia?
        </div>
    </div>
@endsection