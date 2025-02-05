@extends('layouts.master')

@section('main_content')
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="cards">
            @include('pages.users.buttons')
            <div class="tab-content order-summary-tab">
                <div class="tab-pane fade show active" id="add-new-user">
                    <div class="table-header">
                        <h4>{{__('Add')}} {{ ucfirst(request('users') ?? request('type')) }}</h4>
                    </div>
                    <div class="order-form-section">
                        {{-- form start --}}
                        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data" class="ajaxform_instant_reload">
                            @csrf
                            <div class="add-suplier-modal-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 mt-2">
                                        <label>{{('Full Name')}}</label>
                                        <input type="text" name="name" required class="form-control" placeholder="Enter Name" >
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Phone')}}</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" >
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Role')}}</label>
                                        <div class="blade-up-down-arrow position-relative">
                                            <select name="role" required class="select-2 form-control w-100" >
                                                <option value=""> {{__('Select a role')}}</option>
                                                @foreach ($roles as $role)
                                                <option value="{{ $role->name }}" @selected(request('users') == $role->name)> {{ ucfirst($role->name) }} </option>
                                                @endforeach
                                            </select>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('User Name')}}</label>
                                        <input type="text" name="email" required class="form-control" placeholder="Enter Email Address" >
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Password')}}</label>
                                        <input type="password" name="password" required class="form-control" placeholder="Enter Password">
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label>{{__('Confirm password')}}</label>
                                        <input type="password" name="password_confirmation" required class="form-control" placeholder="Enter Confirm password">
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
                                    <div class="col-lg-12">
                                        <div class="button-group text-center mt-5">
                                            <a href="" class="theme-btn border-btn m-2">{{__('Cancel')}}</a>
                                            <button class="theme-btn m-2 submit-btn">{{__('Save')}}</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="add-profile-photo m-5 mt-0">
                                    <label for="add-profile" class="add-profile-photo-wrapper">
                                        <input type="file" name="image" accept="image/*" class="d-none" id="add-profile">
                                        <div class="image-wrapper">
                                            <img class="image-preview" src="{{ asset('assets/images/profile/avatar.jpg') }}" alt="profile-img">
                                        </div>
                                        <div class="icons"><i class="fal fa-camera"></i>
                                        </div>
                                    </label>
                                    <p>{{__('Upload Image')}}</p>
                                </div>

                            </div>
                        </form>
                        {{-- form end --}}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
