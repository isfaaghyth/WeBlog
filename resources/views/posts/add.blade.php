@extends('dashboard')
@section('content-blog')
<p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
<form name="sentMessage" id="contactForm" novalidate>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Judul Post</label>
            <input type="text" class="form-control" placeholder="Judul Post" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Isi</label>
            <textarea rows="5" class="form-control" placeholder="Isi" id="message" required data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-default">TAMBAH POST</button>
        </div>
    </div>
</form>
@endsection
