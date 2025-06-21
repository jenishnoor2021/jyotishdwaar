@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">ADD Faq</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">ADD</h4>

                @if (session()->has('success'))
                <div class="alert text-white" style="background-color:#7EDD72">
                    {{ session()->get('message') }}
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {!! Form::open([
                'method' => 'POST',
                'action' => 'AdminFaqController@store',
                'files' => true,
                'class' => 'form-horizontal',
                'name' => 'addfaqform',
                ]) !!}
                @csrf

                <div class="row">
                    <div class="mb-3">
                        <label for="title">Title<span class="text-danger">*</span></label>
                        <textarea type="text" name="title" class="form-control" id="title" placeholder="Enter title" required>{{ old('title') }}</textarea>
                        @if ($errors->has('title'))
                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="body">Content<span class="text-danger">*</span></label>
                        <textarea type="text" name="body" class="form-control" id="body" placeholder="Enter body" required>{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                        <div class="error text-danger">{{ $errors->first('body') }}</div>
                        @endif
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-md">Submit</button>
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

        $("form[name='addfaqform']").validate({
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