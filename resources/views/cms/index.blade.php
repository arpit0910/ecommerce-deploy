@extends('layouts.main')
@section('content')
<!-- content @s -->
<div class="nk-block-head">
    <div class="nk-block-head-content">
        <div class="float-left">
            <h4 class="nk-block-title mt-3">CMS</h4>
        </div>
        <div class="nk-block-des text-right">
            <a href="{{route('cms.create')}}"><button class="btn btn-primary"><em class="icon ni ni-plus"></em>&nbsp Add CMS Item</button></a>
        </div>
    </div>
</div>
<div class="alert-div" id="alert"></div>
<x-alert />
<div class="card card-preview">
    <div class="card-inner">
        <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
            <thead>
                <tr class="nk-tb-item nk-tb-head">
                    <th class="nk-tb-col">#</th>
                    <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                    <th class="nk-tb-col"><span class="sub-text">Actions</span></th>
                </tr>
            </thead>
            <tbody>
                @forelse($cmss as $key=>$cms)
                <tr class="nk-tb-item">
                    <td class="nk-tb-col">
                        {{$key+1}}
                    </td>
                    <td class="nk-tb-col">
                        <a href="{{route('cms.show', $cms->slug)}}">{{ucfirst($cms->key)}}</a>
                    </td>
                    <td class="nk-tb-col">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input toggle-status" data-id="{{$cms->id}}" {{ $cms->status == 1 ? 'checked' : '' }} id="{{$cms->id}}">
                            <label class="custom-control-label" for="{{$cms->id}}"></label>
                        </div>
                    </td>
                    <td class="nk-tb-col nk-tb-col-tools">
                        <h5><a href="{{route('cms.edit', $cms->slug)}}"><em class="icon ni ni-edit"></em></a>
                        </h5>
                    </td>
                </tr>
                <!-- .nk-tb-item  -->
                @empty
                <tr class="nk-tb-item">
                    <td colspan="7" class="text-center p-2">No Records Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div><!-- .card-preview -->
<!-- content @s -->
<form id="delete_form" style="display:none" method="post">
    @csrf
    @method('delete')
</form>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $('.toggle-status').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{route('cms.toggleStatus')}}",
            data: {
                '_token': '{{csrf_token()}}',
                'status': status,
                'id': id
            },
            success: function(data) {
                $('#alert').html('<div class="alert alert-success">Status changed successfully.</div>');
                window.setTimeout(function() {
                    $(".alert").fadeTo(1000, 0).slideUp(500, function() {
                        $('#alert').html('');
                    });
                }, 1000);
            },
            error: function(data) {
                $('#alert').html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
                window.setTimeout(function() {
                    $(".alert").fadeTo(1000, 0).slideUp(500, function() {
                        $('#alert').html('');
                    });
                }, 1000);
            }
        });
    });
</script>
@endsection