@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Testomonial</h4>
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

                {!! Form::model($testomonial, [
                'method' => 'PATCH',
                'action' => ['AdminTestominalController@update', $testomonial->id],
                'files' => true,
                'class' => 'form-horizontal',
                'name' => 'edittestomonialform',
                ]) !!}
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="name">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{ $testomonial->name }}" required>
                            @if($errors->has('name'))
                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="file">Profile image<span class="text-danger">*</span></label>
                            <input type="file" name="file" id="file" class="form-control border border-dark mb-2" accept="image/*">
                            <img src="{{ $testomonial->file }}" alt="Your img" width="100px">
                            @if($errors->has('file'))
                            <div class="error text-danger">{{ $errors->first('file') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="occupation">Position<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter position" value="{{ $testomonial->occupation }}" required>
                            @if($errors->has('occupation'))
                            <div class="error text-danger">{{ $errors->first('occupation') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="message">Message<span class="text-danger">*</span></label>
                    <textarea type="text" name="message" class="form-control" id="message" placeholder="Enter message">{{ $testomonial->message }}</textarea>
                    @if ($errors->has('message'))
                    <div class="error text-danger">{{ $errors->first('message') }}</div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="rate">Rating<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="rate" id="rate" placeholder="Enter Rating between 1 to 5" value="{{ $testomonial->rate }}" min="1" max="5" required>
                            @if($errors->has('rate'))
                            <div class="error text-danger">{{ $errors->first('rate') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="facebook">Facebook Link<span class="text-danger">*</span></label>
                            <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Enter facebook link" value="{{ $testomonial->facebook }}" required>
                            @if($errors->has('facebook'))
                            <div class="error text-danger">{{ $errors->first('facebook') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="instagram">Instagram Link<span class="text-danger">*</span></label>
                            <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Enter instagram link" value="{{ $testomonial->instagram }}" required>
                            @if($errors->has('instagram'))
                            <div class="error text-danger">{{ $errors->first('instagram') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="twitter">Twitter Link<span class="text-danger">*</span></label>
                            <input type="text" name="twitter" class="form-control" id="twitter" placeholder="Enter twitter link" value="{{ $testomonial->twitter }}" required>
                            @if($errors->has('twitter'))
                            <div class="error text-danger">{{ $errors->first('twitter') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="linkdin">Linkdin Link<span class="text-danger">*</span></label>
                            <input type="text" name="linkdin" class="form-control" id="linkdin" placeholder="Enter linkdin link" value="{{ $testomonial->linkdin }}" required>
                            @if($errors->has('linkdin'))
                            <div class="error text-danger">{{ $errors->first('linkdin') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-md">Update</button>
                    <a class="btn btn-light w-md" href="{{ URL::to('/admin/testomonial') }}">Back</a>
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

        $("form[name='edittestomonialform']").validate({
            rules: {
                name: {
                    required: true,
                },
                occupation: {
                    required: true,
                },
                message: {
                    required: true,
                },
                file: {
                    required: true,
                },
                facebook: {
                    required: true,
                },
                instagram: {
                    required: true,
                },
                twitter: {
                    required: true,
                },
                linkdin: {
                    required: true,
                },
                rate: {
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