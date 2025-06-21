@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Album</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {!! Form::model($image, [
                'method' => 'PATCH',
                'action' => ['AdminGalleryController@update', $image->id],
                'files' => true,
                'class' => 'form-horizontal',
                'name' => 'editAlbumForm',
                ]) !!}
                @csrf

                {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Enter name" value="{{ $image->name }}" required>
                @if ($errors->has('name'))
                <div class="error text-danger">{{ $errors->first('name') }}
                </div>
                @endif
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="file">Image<span class="text-danger">*</span></label>
                <input type="file" name="file" class="form-control" id="file"
                    placeholder="Enter file" value="{{ $image->file }}">
                <img src="{{ $image->file }}" alt="{{ $image->file }}" width="100px">
                @if ($errors->has('file'))
                <div class="error text-danger">{{ $errors->first('file') }}
                </div>
                @endif
            </div>
        </div>
    </div>


    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary w-md">update</button>
        <a class="btn btn-light w-md" href="{{ URL::to('/admin/album') }}">Back</a>
    </div>
    </form>
</div>
<!-- end card body -->
</div>
<!-- end card -->
</div>
<!-- end col -->
</div>
<!-- end row -->
@endsection

@section('script')
<script>
    $(function() {
        $("form[name='editAlbumForm']").validate({
            rules: {
                file: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection