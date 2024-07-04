@extends('admin.layouts.app')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/libs/datatable/datatables.min.css') }}"/>
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
                                <h2>{{ __('CMS Setting') }}</h2>
                            </div>
                        </div>
                        <div class="breadcrumb__content__right">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="hidden" id="news-list-route" value="{{ route('admin.setting.frontend.faq.index') }}">
                <div class="col-xxl-3 col-lg-3 col-md-4 pr-0">
                    @include('admin.setting.partials.frontend-sidebar')
                </div>
                <div class="col-xxl-9 col-lg-9 col-md-8">
                    <div class="email-inbox__area bg-style form-horizontal__item bg-style admin-general-settings-page">
                        <div class="item-title d-flex flex-wrap justify-content-between">
                            <h2>{{ $pageTitle }}</h2>
                            <div>
                                <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#add-modal">
                                    <i class="fa fa-plus"></i> {{ __('Add New') }}
                                </button>
                            </div>
                        </div>
                        <div class="tickets-topic-table-area">
                            <div class="customers__table">
                                <table
                                    class="row-border table-style common-datatable responsive dataTable no-footer dtr-inline"
                                    id="faqDataTable">
                                    <thead>
                                    <tr>
                                        <th>{{ __('Category Name') }}</th>
                                        <th>{{ __('Question') }}</th>
                                        <th>{{ __('Answer') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="add-modal" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('Add New') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form class="ajax reset" action="{{ route('admin.setting.frontend.faq.store') }}" method="post"
                              data-handler="commonResponseForModal">
                            <input type="hidden" name="faq_category_id" value="{{ $catagory }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input__group mb-25">
                                            <label
                                                class="label-text-title color-heading font-medium mb-2">{{ __('Faq Category') }}</label>
                                            <select name="faq_category_id" class="form-control" required>
                                                <option value="" disabled selected>Select a category</option>
                                                @foreach ($catagory as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input__group mb-25">
                                            <label
                                                class="label-text-title color-heading font-medium mb-2">{{ __('Question') }}</label>
                                            <input type="text" name="question" class="form-control"
                                                   placeholder="{{ __('Question') }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input__group mb-25">
                                            <label
                                                class="label-text-title color-heading font-medium mb-2">{{ __('Answer') }}</label>
                                            <textarea name="answer" class="form-control"
                                                      placeholder="{{ __('Answer') }}"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input__group mb-25">
                                            <label class="form-label">{{ __('Status') }}</label>
                                            <div class="input-group">
                                                <select name="status" class="form-control">
                                                    <option value="1">{{ __('Active') }}</option>
                                                    <option value="0">{{ __('Deactive') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-purple">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Modal section start -->
            <div class="modal fade" id="edit-modal" aria-hidden="true" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('admin/libs/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom/faq.js') }}"></script>
@endpush
