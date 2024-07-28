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
                <h4 class="text-white font-weight-bolder text-center mb-2">New Text Create</h4>
              </div>
            </div>
            <div class="card-body">
              <form role="form" class="text-start" action="{{ route('admin.linkss.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-dark fw-bold" for="inputEmail1">Viber Link</label>
                    <input type="text" class="form-control border border-1 border-secondary px-2" id="inputEmail1" name="viber" placeholder="Enter viber Link">
                    @error('viber')
                    <span class="text-danger d-block">*{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-dark fw-bold" for="inputEmail1">GameLink </label>
                    <input type="text" class="form-control border border-1 border-secondary px-2" id="inputEmail1" name="game_site_link" placeholder="Enter game_site_link">
                    @error('game_site_link')
                    <span class="text-danger d-block">*{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-dark fw-bold" for="inputEmail1">FBPage Link</label>
                    <input type="text" class="form-control border border-1 border-secondary px-2" id="inputEmail1" name="facebook_page" placeholder="Enter facebook_page">
                    @error('facebook_page')
                    <span class="text-danger d-block">*{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-dark fw-bold" for="inputEmail1">Line Link</label>
                    <input type="text" class="form-control border border-1 border-secondary px-2" id="inputEmail1" name="line" placeholder="Enter line">
                    @error('line')
                    <span class="text-danger d-block">*{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-dark fw-bold" for="inputEmail1">Telegram Link</label>
                    <input type="text" class="form-control border border-1 border-secondary px-2" id="inputEmail1" name="telegram" placeholder="Enter telegram">
                    @error('telegram')
                    <span class="text-danger d-block">*{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-dark fw-bold" for="inputEmail1">Messager Link</label>
                    <input type="text" class="form-control border border-1 border-secondary px-2" id="inputEmail1" name="messager" placeholder="Enter messager">
                    @error('messager')
                    <span class="text-danger d-block">*{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                  <button class="btn btn-primary" type="submit">Create</button>
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
