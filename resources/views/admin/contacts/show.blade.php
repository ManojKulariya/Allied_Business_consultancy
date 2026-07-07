@extends('admin.layouts.app')

@section('title', 'Enquiry from '.$contact->name)

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.contacts.index') }}">Contact Enquiries</a></li>
    <li class="breadcrumb-item active">{{ $contact->name }}</li>
@endsection

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <h1 class="h4 mb-0">Enquiry from {{ $contact->name }}</h1>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Back to List
        </a>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <span class="badge {{ $contact->is_read ? 'bg-secondary' : 'bg-primary' }}">{{ $contact->is_read ? 'Read' : 'New' }}</span>
                            <span class="badge {{ $contact->isReplied() ? 'bg-success' : 'bg-warning text-dark' }}">{{ ucfirst($contact->reply_status) }}</span>
                            @if($contact->source === 'chatbot')
                                <span class="badge bg-info-subtle text-info-emphasis"><i class="bi bi-chat-dots"></i> Chatbot Lead</span>
                            @endif
                        </div>
                        <span class="small text-muted">{{ $contact->created_at->format('d M Y, h:i A') }}</span>
                    </div>

                    @if($contact->service_interested)
                        <p class="mb-2"><strong>Service Interested In:</strong> {{ $contact->service_interested }}</p>
                    @endif

                    <p class="mb-2"><strong>Message:</strong></p>
                    <p class="mb-0" style="white-space: pre-line;">{{ $contact->message }}</p>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body">
                    <h2 class="h6 mb-3">Technical Details</h2>
                    <div class="row small text-muted">
                        <div class="col-md-6 mb-2"><strong>IP Address:</strong> {{ $contact->ip_address ?: '—' }}</div>
                        <div class="col-md-6 mb-2"><strong>User Agent:</strong> {{ Str::limit($contact->user_agent, 60) ?: '—' }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="h6 mb-3">Contact Information</h2>
                    <p class="mb-2"><i class="bi bi-envelope me-2 text-muted"></i><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                    <p class="mb-2"><i class="bi bi-telephone me-2 text-muted"></i><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                    @if($contact->company_name)
                        <p class="mb-0"><i class="bi bi-building me-2 text-muted"></i>{{ $contact->company_name }}</p>
                    @endif
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="h6 mb-3">Actions</h2>
                    <div class="d-grid gap-2">
                        @if($contact->is_read)
                            <form method="POST" action="{{ route('admin.contacts.mark-unread', $contact->id) }}">
                                @csrf @method('PATCH')
                                <button class="btn btn-sm btn-outline-secondary w-100"><i class="bi bi-envelope me-1"></i> Mark as Unread</button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('admin.contacts.mark-read', $contact->id) }}">
                                @csrf @method('PATCH')
                                <button class="btn btn-sm btn-outline-secondary w-100"><i class="bi bi-envelope-open me-1"></i> Mark as Read</button>
                            </form>
                        @endif

                        <form method="POST" action="{{ route('admin.contacts.reply-status', $contact->id) }}">
                            @csrf @method('PATCH')
                            <input type="hidden" name="reply_status" value="{{ $contact->isReplied() ? 'pending' : 'replied' }}">
                            <button class="btn btn-sm {{ $contact->isReplied() ? 'btn-outline-warning' : 'btn-outline-success' }} w-100">
                                <i class="bi bi-check2-circle me-1"></i> Mark as {{ $contact->isReplied() ? 'Pending' : 'Replied' }}
                            </button>
                        </form>

                        <form method="POST" action="{{ route('admin.contacts.destroy', $contact->id) }}" class="delete-form">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger w-100"><i class="bi bi-trash me-1"></i> Move to Trash</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
