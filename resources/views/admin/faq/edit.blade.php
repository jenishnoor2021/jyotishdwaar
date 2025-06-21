@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Faq</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit</h4>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {!! Form::model($faq, [
                'method' => 'PATCH',
                'action' => ['AdminFaqController@update', $faq->id],
                'files' => true,
                'class' => 'form-horizontal',
                'name' => 'editfaqform',
                ]) !!}
                @csrf

                <div class="row">
                    <div class="mb-3">
                        <label for="title">Title<span class="text-danger">*</span></label>
                        <textarea type="text" name="title" class="form-control" id="title" placeholder="Enter title" required>{{ $faq->title }}</textarea>
                        @if ($errors->has('title'))
                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="body">Content<span class="text-danger">*</span></label>
                        <textarea type="text" name="body" class="form-control" id="body" placeholder="Enter body" required>{{ $faq->body }}</textarea>
                        @if ($errors->has('body'))
                        <div class="error text-danger">{{ $errors->first('body') }}</div>
                        @endif
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-md">Update</button>
                    <a class="btn btn-light w-md" href="{{ URL::to('/admin/faq') }}">Back</a>
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

        $("form[name='editfaqform']").validate({
            rules: {
                title: {
                    required: true,
                },
                body: {
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