@extends('layouts.admin')
@section('content')
@section('style')
<style>
    .form-check-input {
        width: 2em;
        height: 1em;
        background-color: #e4e4e4;
        border-radius: 1em;
        position: relative;
        appearance: none;
        outline: none;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .form-check-input:checked {
        background-color: #4caf50;
    }

    .form-check-input::before {
        content: '';
        position: absolute;
        top: 2px;
        left: 2px;
        width: 0.8em;
        height: 0.8em;
        background-color: white;
        border-radius: 50%;
        transition: transform 0.3s ease-in-out;
    }

    .form-check-input:checked::before {
        transform: translateX(1em);
    }
</style>
@endsection

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Albums</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">
                    Add Album
                </h4>

                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                'action' => 'AdminGalleryController@store',
                'files' => true,
                'class' => 'form-horizontal',
                'name' => 'addAlbumForm',
                ]) !!}
                @csrf

                {{-- <div class="row">
                    <div class="mb-3">
                        <label for="name">Name<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter Designation" value="{{ old('name') }}">
                @if ($errors->has('name'))
                <div class="error text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
        </div> --}}

        <div class="row">
            <div class="mb-3">
                <label for="file">Image<span class="text-danger">*</span></label>
                <input type="file" name="file" class="form-control" id="file"
                    placeholder="Enter file" value="">
                @if ($errors->has('file'))
                <div class="error text-danger">{{ $errors->first('file') }}</div>
                @endif
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary w-md">Submit</button>
        </div>

        </form>

    </div>
</div>
</div> <!-- end col -->

<div class="col-md-8">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Album List</h4>

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="mdi mdi-check-all me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 mt-3">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Image</th>
                        <th>Show/Hide</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($images as $image)
                    <tr>
                        <td>
                            <a href="{{ route('admin.album.edit', $image->id) }}"
                                class="btn btn-outline-primary waves-effect waves-light"><i
                                    class="fa fa-edit"></i></a>
                            <a href="{{ route('admin.album.destroy', $image->id) }}"
                                onclick="return confirm('Sure ! You want to delete ?');"
                                class="btn btn-outline-danger waves-effect waves-light"><i
                                    class="fa fa-trash"></i></a>
                        </td>
                        <td><img src="{{ $image->file }}" alt="{{ $image->file }}" width="100px"></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input toggle-status-switch" type="checkbox"
                                    id="toggleSwitch{{ $image->id }}" data-id="{{ $image->id }}"
                                    {{ $image->is_active ? 'checked' : '' }}>
                                <label class="form-check-label" for="toggleSwitch{{ $image->id }}">
                                    {{ $image->is_active ? 'Show' : 'Hide' }}
                                </label>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div> <!-- end col -->

</div> <!-- end row -->
@endsection

@section('script')
<script>
    $(function() {
        $("form[name='addAlbumForm']").validate({
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

<script>
    $(document).on('change', '.toggle-status-switch', function() {
        const toggleSwitch = $(this);
        const agentId = toggleSwitch.data('id');
        const isChecked = toggleSwitch.is(':checked');

        $.ajax({
            url: "{{ route('admin.album.active') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: agentId
            },
            success: function(response) {
                if (response.success) {
                    toggleSwitch.next('label').text(response.status);
                    alert('Status updated successfully');
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('An error occurred. Please try again.');
                // Revert toggle state in case of an error
                toggleSwitch.prop('checked', !isChecked);
            }
        });
    });
</script>
@endsection