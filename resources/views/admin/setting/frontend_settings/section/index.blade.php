@extends('admin.layouts.app')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{asset('admin/libs/datatable/datatables.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom/image-preview.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/custom/frontend.css')}}"/>
@endpush

@section('content')
<!-- Page content area start -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__content__left">
                        <div class="breadcrumb__title">
                            <h2>{{ __("Frontend Section Settings") }}</h2>
                        </div>
                    </div>
                    <div class="breadcrumb__content__right">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{route('admin.dashboard')}}">{{__('Dashboard')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <input type="hidden" id="frontend-section" value="{{ route('admin.setting.frontend.index') }}">
            <div class="col-xxl-3 col-lg-3 col-md-4 pr-0">
                @include('admin.setting.partials.frontend-sidebar')
            </div>
            <div class="col-xxl-9 col-lg-9 col-md-8">
                <div class="email-inbox__area bg-style form-horizontal__item bg-style admin-general-settings-page">
                    <div class="item-title d-flex flex-wrap justify-content-between">
                        <h2>{{ $pageTitle }}</h2>
                    </div>
                    <div class="customers__table">
                        <table class="row-border table-style common-datatable responsive dataTable no-footer dtr-inline" id="commonDataTable">
                            <thead>
                            <tr>
                                <th>{{ __("SL") }}</th>
                                <th>{{ __("Section Name") }}</th>
                                <th>{{ __("Title") }}</th>
                                <th>{{ __("Image") }}</th>
                                <th class="text-center">{{ __("Status") }}</th>
                                <th><div class="action__buttons d-flex justify-content-end">{{ __("Action") }}</div></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content area end -->
<!-- Edit Modal section start -->
<div class="modal fade" id="edit-modal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

        </div>
    </div>
</div>
<!-- Edit Modal section end -->

@endsection

@push('script')
    <script src="{{asset('admin/libs/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('admin/js/custom/frontend-section.js')}}"></script>
    <script src="{{asset('admin/js/custom/image-preview.js')}}"></script>
@endpush
