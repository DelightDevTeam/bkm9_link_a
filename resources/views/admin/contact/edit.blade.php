@extends('layouts.admin_app')
@section('styles')
<style>
  .transparent-btn {
    background: none;
    border: none;
    padding: 0;
    outline: none;
    cursor: pointer;
    box-shadow: none;
    appearance: none;
    /* For some browsers */
  }


  .custom-form-group {
    margin-bottom: 20px;
  }

  .custom-form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
  }

  .custom-form-group input,
  .custom-form-group select {
    width: 100%;
    padding: 10px 15px;
    border: 1px solid #e1e1e1;
    border-radius: 5px;
    font-size: 16px;
    color: #333;
  }

  .custom-form-group input:focus,
  .custom-form-group select:focus {
    border-color: #d33a9e;
    box-shadow: 0 0 5px rgba(211, 58, 158, 0.5);
  }

  .submit-btn {
    background-color: #d33a9e;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
  }

  .submit-btn:hover {
    background-color: #b8328b;
  }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-icons@1.13.12/iconfont/material-icons.min.css">
@endsection
@section('content')
<div class="row">
  <div class="col-12">
    <div class="container mb-3">
      <a class="btn btn-icon btn-2 btn-primary float-end me-5" href="{{ route('admin.linkss.index') }}">
        <span class="btn-inner--icon mt-1"><i class="material-icons">arrow_back</i>Back</span>
      </a>
    </div>
    <div class="container my-auto mt-5">
      <div class="row">
        <div class="col-lg-10 col-md-2 col-12 mx-auto">
          <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-2 pe-1">
                <h4 class="text-white font-weight-bolder text-center mb-2">Contact Link Edit</h4>
              </div>
            </div>
            <div class="card-body">
            <form action="{{ route('admin.linkss.update', $text_update->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label text-dark fw-bold" for="viber">Viber Link</label>
                <input type="text" class="form-control border border-1 border-secondary px-2" id="viber" name="viber" placeholder="Enter Viber Link" value="{{ old('viber', $text_update->viber) }}" required>
                @error('viber')
                <span class="text-danger d-block">*{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label text-dark fw-bold" for="game_site_link">Game Site Link</label>
                <input type="text" class="form-control border border-1 border-secondary px-2" id="game_site_link" name="game_site_link" placeholder="Enter Game Site Link" value="{{ old('game_site_link', $text_update->game_site_link) }}" required>
                @error('game_site_link')
                <span class="text-danger d-block">*{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label text-dark fw-bold" for="facebook_page">Facebook Page Link</label>
                <input type="text" class="form-control border border-1 border-secondary px-2" id="facebook_page" name="facebook_page" placeholder="Enter Facebook Page Link" value="{{ old('facebook_page', $text_update->facebook_page) }}" required>
                @error('facebook_page')
                <span class="text-danger d-block">*{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label text-dark fw-bold" for="line">Line Link</label>
                <input type="text" class="form-control border border-1 border-secondary px-2" id="line" name="line" placeholder="Enter Line Link" value="{{ old('line', $text_update->line) }}" required>
                @error('line')
                <span class="text-danger d-block">*{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label text-dark fw-bold" for="telegram">Telegram Link</label>
                <input type="text" class="form-control border border-1 border-secondary px-2" id="telegram" name="telegram" placeholder="Enter Telegram Link" value="{{ old('telegram', $text_update->telegram) }}" required>
                @error('telegram')
                <span class="text-danger d-block">*{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label text-dark fw-bold" for="messager">Messenger Link</label>
                <input type="text" class="form-control border border-1 border-secondary px-2" id="messager" name="messager" placeholder="Enter Messenger Link" value="{{ old('messager', $text_update->messager) }}" required>
                @error('messager')
                <span class="text-danger d-block">*{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<script src="{{ asset('admin_app/assets/js/plugins/choices.min.js') }}"></script>
<script src="{{ asset('admin_app/assets/js/plugins/quill.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

@endsection
