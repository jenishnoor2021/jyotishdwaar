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
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="row">

            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Testimonials</p>
                                <h4 class="mb-0">{{ $countTesomonials }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Albums</p>
                                <h4 class="mb-0">{{ $countAlbums }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Tarot</p>
                                <h4 class="mb-0">{{ $countTarots }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Faqs</p>
                                <h4 class="mb-0">{{ $countFaqs }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Contacts</p>
                                <h4 class="mb-0">{{ $countContacts }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Inquires</p>
                                <h4 class="mb-0">{{ $countInquires }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Today Inquires</h4>
                @if (count($todayInquiries) > 0)
                <div class="table-responsive">
                    <table id="" class="table table-bordered dt-responsive nowrap w-100 mt-3">
                        <thead class="table-light">
                            <tr>
                                <th>Action</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                {{-- <th>Subject</th>
                                    <th>Message</th> --}}
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todayInquiries as $inquiry)
                            <tr>
                                <td>
                                    <!-- <a href="{{ route('admin.inquiry.edit', $inquiry->id) }}"
                                                class="btn btn-outline-primary waves-effect waves-light"><i
                                                    class="fa fa-edit"></i></a> -->
                                    <a href="{{ route('admin.inquiry.destroy', $inquiry->id) }}"
                                        onclick="return confirm('Sure ! You want to delete ?');"
                                        class="btn btn-outline-danger waves-effect waves-light"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                                <td>{{ $inquiry->name }}</td>
                                <td>{{ $inquiry->email }}</td>
                                <td>{{ $inquiry->contact }}</td>
                                {{-- <td>
                                        <p class="add-read-more show-less-content">{{ $inquiry->subject }}</p>
                                </td>
                                <td>
                                    <p class="add-read-more show-less-content">{{ $inquiry->message }}</p>
                                </td> --}}
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input toggle-status-switch" type="checkbox"
                                            id="toggleSwitch{{ $inquiry->id }}" data-id="{{ $inquiry->id }}"
                                            data-type="inquiry" {{ $inquiry->is_show ? 'checked' : '' }}>
                                        <label class="form-check-label" for="toggleSwitch{{ $inquiry->id }}">
                                            {{ $inquiry->is_show ? 'Read' : 'Unread' }}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Today Contacts</h4>
                @if (count($todayConatcts) > 0)
                <div class="table-responsive">
                    <table id="" class="table table-bordered dt-responsive nowrap w-100 mt-3">
                        <thead class="table-light">
                            <tr>
                                <th>Action</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todayConatcts as $contact)
                            <tr>
                                <td>
                                    <!-- <a href="{{ route('admin.contact.edit', $contact->id) }}"
                                                class="btn btn-outline-primary waves-effect waves-light"><i
                                                    class="fa fa-edit"></i></a> -->
                                    <a href="{{ route('admin.contact.destroy', $contact->id) }}"
                                        onclick="return confirm('Sure ! You want to delete ?');"
                                        class="btn btn-outline-danger waves-effect waves-light"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->contact }}</td>
                                <td>
                                    <p class="add-read-more show-less-content">{{ $contact->subject }}</p>
                                </td>
                                <td>
                                    <p class="add-read-more show-less-content">{{ $contact->message }}</p>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input toggle-status-switch" type="checkbox"
                                            id="toggleSwitch{{ $contact->id }}"
                                            data-id="{{ $contact->id }}" data-type="contact"
                                            {{ $contact->is_show ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                            for="toggleSwitch{{ $contact->id }}">
                                            {{ $contact->is_show ? 'Read' : 'Unread' }}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).on('change', '.toggle-status-switch', function() {
        const toggleSwitch = $(this);
        const agentId = toggleSwitch.data('id');
        const type = toggleSwitch.data('type');
        const isChecked = toggleSwitch.is(':checked');

        let $url = "";
        if (type === 'inquiry') {
            $url = "{{ route('admin.inquiry.active') }}";
        } else if (type === 'contact') {
            $url = "{{ route('admin.contact.active') }}";
        }

        $.ajax({
            url: $url,
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