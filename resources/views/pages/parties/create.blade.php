@extends('layouts.master')
@section('main_content')
    <div class="erp-table-section">
        <div class="container-fluid">
            @include('pages.parties.buttons')
            <div class="tab-content order-summary-tab">
                <div class="tab-pane fade show active" id="add-new-supplier">
                    <div class="table-header">
                        <h4>{{__(request('parties-type') ? ucfirst('Add '.request('parties-type')) : 'Add Customer/Company' )}}</h4>
                    </div>
                    <div class="order-form-section">
                        <form action="{{ route('parties.store') }}" method="post" enctype="multipart/form-data" class="ajaxform">
                            @csrf

                            <div class="add-suplier-modal-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Company/Costomer Name')}}</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Company/Costomer Name" required>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Company/Costomer Email')}}</label>
                                        <input type="text" name="email" class="form-control" placeholder="Company/Costomer@gmail.com">
                                    </div>
                                    <div class="col-lg-6 mt-2 {{ request()->has('parties-type') ? 'd-none' : '' }}">
                                        <label>{{__('Company/Costomer Category')}}</label>
                                        <div class="blade-up-down-arrow position-relative">
                                            <select name="type" class="form-control w-100 type Company/Costomer-type">
                                                <option @selected(request('parties-type') == 'buyer') value="buyer">{{__('Buyer')}}</option>
                                                <option @selected(request('parties-type') == 'supplier') value="supplier">{{__('Supplier')}}</option>
                                                <option @selected(request('parties-type') == 'customer') value="customer">{{__('Customer')}}</option>
                                            </select>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Phone')}}</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Password')}}</label>
                                        <input type="password" name="password" class="form-control" placeholder="********" required>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Country')}}</label>
                                        <div class="blade-up-down-arrow position-relative">
                                            <select name="country" class="select-2 form-control w-100" >
                                                <option value="">{{__('Select a country')}}</option>
                                                @foreach($countries  as $country)
                                                    <option value="{{ $country['name'] }}">{{  $country['name'] }}</option>
                                                @endforeach
                                            </select>
                                            <span></span>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Region')}}</label>
                                        <input type="text" name="region" class="form-control" placeholder="Enter Region">
                                    </div>
                                    
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('City')}}</label>
                                        <input type="text" name="city" class="form-control" placeholder="Enter City">
                                    </div>
                                    
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Sub City')}}</label>
                                        <input type="text" name="sub_city" class="form-control" placeholder="Enter Sub City">
                                    </div>
                                    
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Town')}}</label>
                                        <input type="text" name="town" class="form-control" placeholder="Enter Town">
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Address')}}</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Address">
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Opening Balance Type')}}</label>
                                        <select name="opening_balance_type" class="table-select form-control w-100 opening_balance_type">
                                            <option value="">{{__('Select')}}</option>
                                            <option value="advance_payment">{{__('Advance Payment')}}</option>
                                            <option value="due_bill">{{__('Due Bill')}}</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Opening Balance')}}</label>
                                        <input type="number" name="opening_balance" class="form-control opening_balance amount">
                                    </div>
                                    
                                    <div class="col-lg-6 mt-2 receivable_type d-none">
                                        <label class="payment_title">{{ __('Payment Method') }}</label>
                                        <select name="receivable_type" class="table-select form-control w-100 receivable_type_val" required>
                                            <option value="">{{ __('Select') }}</option>
                                            <option value="cash">{{ __('Cash') }}</option>
                                            <option value="bank">{{ __('Bank') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mt-2 d-none bank_id">
                                        <label>{{ __('Select Bank') }}</label>
                                        <select name="bank_id" class="form-control w-100" required>
                                            <option value="">-{{ __('Select Bank') }}-</option>
                                            @foreach($banks as $bank)
                                                <option value="{{ $bank->id }}" >{{ $bank->bank_name }} ({{ $bank->account_number }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Remarks')}}</label>
                                        <input type="text" name="remarks" class="form-control" placeholder="Enter Remarks">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="button-group text-center mt-5">
                                            <button type="reset" class="theme-btn border-btn m-2">{{ __('Reset') }}</button>
                                            <button class="theme-btn m-2 submit-btn">{{__('Save')}}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-profile-photo m-5 mt-0">
                                    <label for="add-profile" class="add-profile-photo-wrapper">
                                        <input type="file" name="image" accept="image/*" class="d-none" id="add-profile">
                                        <div class="image-wrapper">
                                            <img class="image-preview" src="{{ asset('assets/images/profile/avatar.jpg') }}" alt="img">
                                        </div>
                                        <div class="icons">
                                            <i class="fal fa-camera"></i>
                                        </div>
                                    </label>
                                    <p>{{__('Upload Image')}}</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/js/custom/custom.js') }}"></script>
@endpush
