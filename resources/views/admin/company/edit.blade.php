@extends('layouts.admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Edit Company</h4>
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

                {!! Form::model($company, [
                'method' => 'PATCH',
                'action' => ['AdminCompanyController@update', $company->id],
                'files' => true,
                'class' => 'form-horizontal',
                'name' => 'editcompanyform',
                ]) !!}
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="name">Comapny Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Enter Comapny Name" value="{{ $company->name }}" required>
                            @if ($errors->has('name'))
                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ $company->email }}" required>
                            @if($errors->has('email'))
                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="contact">Contact<span class="text-danger">*</span></label>
                            <input type="number" name="contact" class="form-control" id="contact" placeholder="Enter contact No" value="{{ $company->contact }}" required>
                            @if($errors->has('contact'))
                            <div class="error text-danger">{{ $errors->first('contact') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="logo">Logo<span class="text-danger">*</span></label>
                            <input type="file" name="logo" class="form-control" id="logo">
                            <img src="{{ $company->logo }}" alt="Your logo" width="100px">
                            @if($errors->has('logo'))
                            <div class="error text-danger">{{ $errors->first('logo') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="sign">Sign<span class="text-danger">*</span></label>
                            <input type="file" name="sign" class="form-control" id="sign">
                            <img src="{{ $company->sign }}" alt="Your Logo" width="100px">
                            @if($errors->has('sign'))
                            <div class="error text-danger">{{ $errors->first('sign') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="pan_no">PAN No<span class="text-danger">*</span></label>
                            <input type="text" name="pan_no" class="form-control" id="pan_no" placeholder="Enter PAN No" value="{{ $company->pan_no }}" required>
                            @if($errors->has('pan_no'))
                            <div class="error text-danger">{{ $errors->first('pan_no') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address<span class="text-danger">*</span></label>
                    <textarea type="text" name="address" class="form-control" id="address" placeholder="Enter Address">{{ $company->address }}</textarea>
                    @if ($errors->has('address'))
                    <div class="error text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gst_no">GST No<span class="text-danger">*</span></label>
                            <input type="text" name="gst_no" class="form-control" id="gst_no" placeholder="Enter GST No" value="{{ $company->gst_no }}" required>
                            @if($errors->has('gst_no'))
                            <div class="error text-danger">{{ $errors->first('gst_no') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="cgst">CGST<span class="text-danger">*</span></label>
                            <input type="number" name="cgst" class="form-control" id="cgst" placeholder="Enter CGST" value="{{ $company->cgst }}" required>
                            @if($errors->has('cgst'))
                            <div class="error text-danger">{{ $errors->first('cgst') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="sgst">SGST<span class="text-danger">*</span></label>
                            <input type="number" name="sgst" class="form-control" id="sgst" placeholder="Enter SGST" value="{{ $company->sgst }}" required>
                            @if($errors->has('sgst'))
                            <div class="error text-danger">{{ $errors->first('sgst') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="facebook">Facebook Link<span class="text-danger">*</span></label>
                            <input type="text" name="facebook" class="form-control" id="facebook" placeholder="Enter facebook link" value="{{ $company->facebook }}" required>
                            @if($errors->has('facebook'))
                            <div class="error text-danger">{{ $errors->first('facebook') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="instagram">Instagram Link<span class="text-danger">*</span></label>
                            <input type="text" name="instagram" class="form-control" id="instagram" placeholder="Enter instagram link" value="{{ $company->instagram }}" required>
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
                            <input type="text" name="twitter" class="form-control" id="twitter" placeholder="Enter twitter link" value="{{ $company->twitter }}" required>
                            @if($errors->has('twitter'))
                            <div class="error text-danger">{{ $errors->first('twitter') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="linkdin">Linkdin Link<span class="text-danger">*</span></label>
                            <input type="text" name="linkdin" class="form-control" id="linkdin" placeholder="Enter linkdin link" value="{{ $company->linkdin }}" required>
                            @if($errors->has('linkdin'))
                            <div class="error text-danger">{{ $errors->first('linkdin') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary w-md">Update</button>
                    <a class="btn btn-light w-md" href="{{ URL::to('/admin/company') }}">Back</a>
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

        $("form[name='editcompanyform']").validate({
            rules: {
                name: {
                    required: true,
                },
                gst_no: {
                    required: true,
                },
                pan_no: {
                    required: true,
                },
                email: {
                    required: true,
                },
                contact: {
                    required: true,
                },
                address: {
                    required: true,
                },
                // sign: {
                //     required: true,
                // },
                // logo: {
                //     required: true,
                // },
                cgst: {
                    required: true,
                },
                sgst: {
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
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@endsection