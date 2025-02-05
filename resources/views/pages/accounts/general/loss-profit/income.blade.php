@extends('layouts.master')

@section('title')
    {{ __('Income List') }}
@endsection

@php
    $months = getMonths();
@endphp

@section('main_content')
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="table-header justify-content-end border-0 p-0">
                @include('pages.accounts.general.loss-profit.button')
            </div>
            <div class="tab-content order-summary-tab">
                <div class="tab-pane fade {{ Request::RouteIs('loss-profit.income') ? 'show active' : '' }}" id="payment-status">
                    <div class="table-header">
                        <h4>{{ __('Income List') }}</h4>
                    </div>
                    <div class="total-count-area">
                        <div class="count-item light-orange">
                            <h5>
                                <span class="counter">
                                    <span class="total-income">{{ currency_format(collect($income_data)->flatten(1)->sum('total_amount')) }}</span>
                                </span>
                            </h5>
                            <p>{{ __('Total Income') }}</p>
                        </div>
                    </div>
                    <div class="table-top-form daily-transaction-between-wrapper loss-profit">
                        <div class="grid-5">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <select class="table-select form-control income-year w-100">
                                        @for ($i = date('Y'); $i >= 2000; $i--)
                                            <option @selected($i == date('Y')) value="{{ $i }}">{{ $i == date('Y') ? 'This Year' : $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="table-top-btn-group">
                            <ul>
                                <li>
                                    <a id="download-csv" data-filename="{{ 'Income-List' . formatted_date(now(), "d/m/Y H:i:s") }}" data-table-headings="Category,	January,	February,	March,	April,	May,	June,	July,	August,	September,	October,	November,	December,	Total">
                                        <svg class="w-17 h-16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.9918 7.31267C16.9898 7.28233 16.9841 7.25333 16.9741 7.22467C16.9704 7.214 16.9678 7.20367 16.9631 7.19333C16.9471 7.15867 16.9268 7.126 16.8988 7.09833C16.8984 7.098 16.8984 7.098 16.8984 7.098L14.9961 5.19533V3.33333C14.9961 3.326 14.9924 3.31967 14.9918 3.31233C14.9898 3.283 14.9841 3.25467 14.9748 3.22667C14.9711 3.216 14.9684 3.20567 14.9634 3.19533C14.9471 3.16 14.9268 3.12633 14.8981 3.09767L11.8981 0.0976667C11.8694 0.069 11.8358 0.0483333 11.8001 0.0323333C11.7901 0.0276667 11.7801 0.025 11.7698 0.0216667C11.7414 0.0116667 11.7124 0.006 11.6821 0.00433333C11.6758 0.00333333 11.6698 0 11.6628 0H3.32943C3.14543 0 2.99609 0.149333 2.99609 0.333333V5.19533L1.09376 7.09767C1.09376 7.09767 1.09343 7.098 1.09309 7.09833C1.06509 7.12633 1.04509 7.159 1.02909 7.19333C1.02443 7.20367 1.02176 7.214 1.01809 7.22467C1.00809 7.25333 1.00209 7.28233 1.00043 7.31267C0.99976 7.32 0.996094 7.326 0.996094 7.33333V13.6667C0.996094 13.8507 1.14543 14 1.32943 14H2.99609V15.6667C2.99609 15.8507 3.14543 16 3.32943 16H14.6628C14.8468 16 14.9961 15.8507 14.9961 15.6667V14H16.6628C16.8468 14 16.9961 13.8507 16.9961 13.6667V7.33333C16.9961 7.326 16.9924 7.32 16.9918 7.31267ZM15.8581 7H14.9961V6.138L15.8581 7ZM13.8581 3H11.9961V1.138L13.8581 3ZM3.66276 0.666667H11.3294V3.33333C11.3294 3.51733 11.4788 3.66667 11.6628 3.66667H14.3294V5.33333V7H3.66276V5.33333V0.666667ZM2.99609 6.138V7H2.13409L2.99609 6.138ZM14.3294 15.3333H3.66276V14H14.3294V15.3333ZM16.3294 13.3333H1.66276V7.66667H3.32943H14.6628H16.3294V13.3333Z" fill="#00A551"/>
                                            <path d="M8.80351 9.29507C8.85251 9.24973 8.90751 9.21673 8.96784 9.19573C9.02818 9.17507 9.09051 9.16473 9.15484 9.16473C9.37784 9.16473 9.56284 9.2534 9.71018 9.43107L10.0842 8.94373C9.97451 8.8154 9.83951 8.71807 9.67918 8.65173C9.51851 8.58573 9.33651 8.55273 9.13251 8.55273C8.99284 8.55273 8.85484 8.5764 8.71884 8.6234C8.58284 8.67073 8.46084 8.7434 8.35318 8.84173C8.24551 8.94007 8.15851 9.06373 8.09251 9.21273C8.02651 9.36207 7.99318 9.54073 7.99318 9.7484C7.99318 9.91473 8.01484 10.0571 8.05818 10.1761C8.10151 10.2954 8.16018 10.3991 8.23384 10.4877C8.30751 10.5767 8.39251 10.6531 8.48884 10.7174C8.58518 10.7817 8.68818 10.8401 8.79784 10.8931C8.97151 10.9801 9.11518 11.0744 9.22851 11.1764C9.34184 11.2784 9.39851 11.4164 9.39851 11.5901C9.39851 11.7677 9.35118 11.9054 9.25684 12.0037C9.16251 12.1021 9.04351 12.1511 8.89984 12.1511C8.77151 12.1511 8.64584 12.1207 8.52284 12.0604C8.39984 12.0001 8.29518 11.9167 8.20818 11.8111L7.83984 12.3097C7.95318 12.4421 8.10418 12.5514 8.29318 12.6384C8.48218 12.7254 8.68784 12.7687 8.91084 12.7687C9.06584 12.7687 9.21318 12.7424 9.35284 12.6894C9.49251 12.6364 9.61451 12.5581 9.71851 12.4541C9.82251 12.3504 9.90551 12.2227 9.96784 12.0717C10.0302 11.9207 10.0615 11.7467 10.0615 11.5504C10.0615 11.3804 10.0352 11.2331 9.98218 11.1084C9.92918 10.9837 9.86118 10.8761 9.77818 10.7854C9.69518 10.6947 9.60251 10.6174 9.50051 10.5531C9.39851 10.4887 9.29851 10.4321 9.20018 10.3831C9.03384 10.3001 8.89984 10.2121 8.79784 10.1194C8.69584 10.0271 8.64484 9.89573 8.64484 9.72573C8.64484 9.6274 8.65884 9.5424 8.68751 9.47073C8.71584 9.39907 8.75451 9.3404 8.80351 9.29507Z" fill="#00A551"/>
                                            <path d="M6.0551 9.61807C6.1231 9.48573 6.2081 9.38107 6.3101 9.3034C6.4121 9.22607 6.5311 9.1874 6.6671 9.1874C6.91277 9.1874 7.11277 9.29873 7.26777 9.52173L7.65877 9.04573C7.5491 8.88707 7.40744 8.7654 7.23377 8.68007C7.0601 8.59507 6.85777 8.55273 6.62744 8.55273C6.40444 8.55273 6.20144 8.60473 6.0181 8.7084C5.83477 8.8124 5.6791 8.95773 5.55044 9.14473C5.4221 9.33207 5.32277 9.55473 5.2531 9.8134C5.1831 10.0724 5.14844 10.3547 5.14844 10.6607C5.14844 10.9667 5.18344 11.2481 5.2531 11.5051C5.32277 11.7621 5.4211 11.9837 5.54777 12.1707C5.67444 12.3581 5.8291 12.5044 6.01244 12.6101C6.19577 12.7157 6.40077 12.7687 6.62744 12.7687C6.87677 12.7687 7.08344 12.7197 7.24777 12.6214C7.4121 12.5231 7.5471 12.3947 7.65277 12.2361L7.26177 11.7771C7.19744 11.8754 7.1171 11.9584 7.0211 12.0264C6.9251 12.0944 6.81044 12.1284 6.67844 12.1284C6.53877 12.1284 6.41677 12.0897 6.31277 12.0121C6.20877 11.9347 6.1231 11.8301 6.05477 11.6977C5.98644 11.5654 5.93577 11.4097 5.90177 11.2301C5.86777 11.0507 5.85077 10.8611 5.85077 10.6607C5.85077 10.4567 5.86777 10.2651 5.90177 10.0854C5.9361 9.90607 5.9871 9.7504 6.0551 9.61807Z" fill="#00A551"/>
                                            <path d="M11.6637 11.8735H11.6467L10.9781 8.65479H10.2188L11.1991 12.6668H12.0604L13.0577 8.65479H12.3324L11.6637 11.8735Z" fill="#00A551"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a id="download-xlsx" data-filename="{{ 'Income-List' . formatted_date(now(), "d/m/Y H:i:s") }}" data-table-headings="Category,	January,	February,	March,	April,	May,	June,	July,	August,	September,	October,	November,	December,	Total">
                                        <svg class="w-14 h-17" viewBox="0 0 14 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_675_10353)">
                                                <path d="M9.29648 0C9.43063 0.0980147 9.57676 0.184942 9.6975 0.295818C11.0448 1.53763 12.3859 2.78433 13.7346 4.02437C13.8215 4.09899 13.8901 4.18996 13.9358 4.29117C13.9815 4.39238 14.0032 4.50148 13.9996 4.61112C13.9938 8.53969 13.9925 12.4683 13.9957 16.3968C13.9957 16.8226 13.8041 17 13.3441 17H0.647332C0.201267 17 0.00674319 16.819 0.00674319 16.4039C0.00674319 11.1475 0.00514728 5.89093 0.00195312 0.634213C0.00195312 0.333073 0.103049 0.123294 0.400585 0H9.29648ZM12.9076 15.9977V4.98012H9.21838C8.82214 4.98012 8.61468 4.78587 8.61468 4.41643C8.61468 3.33753 8.61468 2.25833 8.61468 1.17884V1.00853H1.08956V15.999L12.9076 15.9977ZM12.0538 3.98223L9.70613 1.80906V3.98223H12.0538Z" fill="#9A5DFC"/>
                                                <path d="M7.00741 7.30586C8.17902 7.30586 9.35048 7.30586 10.5218 7.30586C10.918 7.30586 11.125 7.49967 11.125 7.86956C11.125 9.81655 11.125 11.7635 11.125 13.7105C11.125 14.0884 10.9188 14.2773 10.5064 14.2773H3.49591C3.07572 14.2773 2.87305 14.0893 2.87305 13.6963V7.88863C2.87305 7.48947 3.07188 7.30586 3.50932 7.30586C4.67615 7.30527 5.84218 7.30527 7.00741 7.30586ZM3.95635 9.28611H6.45306V8.3104H3.95635V9.28611ZM10.0383 9.29587V8.31262H7.55217V9.29454L10.0383 9.29587ZM3.96353 10.2995V11.2819H6.45162V10.2995H3.96353ZM7.55169 10.2995V11.2819H10.0412V10.2986L7.55169 10.2995ZM3.96209 12.2953V13.271H6.45354V12.2953H3.96209ZM10.0422 12.2997H7.54977V13.2754H10.0412L10.0422 12.2997Z" fill="#9A5DFC"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_675_10353">
                                                    <rect class="w-14 h-17" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="print-window"><i class="fa fa-print"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-header justify-content-center border-0 d-block text-center print-inner-page">
                        @include('pages.invoice.header2')
                        <h4 class="mt-2">{{ __('Income List') }}</h4>
                    </div>
                    <div class="responsive-table print-table">
                        <table class="table table-bordered" id="erp-table">
                            <thead>
                            <tr>
                                <th>Category</th>
                                @foreach ($months as $month)
                                    <th>{{ $month }}</th>
                                @endforeach
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody class="report-income-data">
                                @include('pages.accounts.general.loss-profit.income-datas')
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="url" value="{{ route('loss-profit.income.filter') }}">
    <input type="hidden" value="{{ route('loss-profit.income.csv') }}" id="get-income-csv">

@endsection

@push('js')
    <script src="{{ asset('assets/js/custom/custom.js') }}"></script>
    <script src="{{ asset('assets/js/xlsx.full.min.js') }}"></script>
@endpush
