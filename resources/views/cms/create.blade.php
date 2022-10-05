@extends('layouts.main')
@push('page-css')
<link href="{{asset('assets/summernote/summernote-lite.min.css')}}" rel="stylesheet" type="text/css">
@endpush
@section('content')
<form action="{{route('cms.store')}}" id="form" method="post">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title float-left">Create CMS</h4>
        </div>
        <div class="nk-block-des text-right">
            <button type="submit" class="btn btn-primary">Create CMS</button>
            <a href="{{route('cms.index')}}" class="btn btn-secondary"><em class="icon ni ni-arrow-left"></em>Back</a>
        </div>
    </div>
    <div class="card card-bordered">
        <div class="card-inner">
            @csrf
            <div class="row gy-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Title<span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <input type="text" data-msg="This field is required" class="form-control required" name="title" placeholder="Eg. About Us" required>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Description<span class="text-danger">*</span></label>
                        <div class="form-control-wrap">
                            <textarea cols="500" class="form-control summernote" name="description" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Create CMS</button>
                </div>
            </div><!-- .row -->
        </div><!-- .row -->
    </div>
</form>
@endsection
@push('page-scripts')
<script src="{{asset('assets/summernote/summernote-lite.min.js')}}"></script>
@endpush
@push('custom-js')
<script>
    $('.summernote').summernote({
        placeholder: 'Enter Description',
        tabsize: 2,
        height: 350,
    });
</script>
@endpush