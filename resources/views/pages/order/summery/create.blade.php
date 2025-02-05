<div class="table-header">
    <h4>{{__('Add New order')}}</h4>
</div>
<div class="order-form-section">
    <form action="{{ route('orders.store') }}" method="post" enctype="multipart/form-data" class="ajaxform_instant_reload">
        @csrf
        <div class="row">
            <div class="col-lg-4 mt-2 order-lg-last">
                <div class="order-management-image">
                    <label><b>{{__('Upload Item Image')}}</b></label>
                    <label for="upload" class="upload-img">
                        <input type="file" name="image" id="upload" accept="image/*" class="d-none file-input-change" data-id="image">
                        <i><img src="{{ asset('assets/images/icons/upload.png') }}" id="image" class="img-preview"></i>
                    </label>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 mt-2">
                        <label class="table-select-lebel">{{__('Company/Customer Name')}}</label>
                        <div class="input-group">
                            <select name="party_id" required class="form-control table-select remove-bg-table-select">
                                <option value="">{{__('Select a customer/company')}}</option>
                                @foreach($parties as $party)
                                    <option value="{{ $party->id }}">{{ $party->name }} ({{ optional($party->user)->phone }})</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <a href="{{ route('parties.create') }}" class="modal-btn-ctg input-group-text"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2 {{ auth()->user()->role == 'merchandiser' ? 'd-none' : '' }}">
                        <label class="table-select-lebel">{{__('Merchandiser name')}}</label>
                        <div class="input-group">
                            <select name="merchandiser_id" required class="form-control table-select remove-bg-table-select">
                                <option value="">{{__('Select a Merchandiser')}}</option>
                                @foreach($merchandisers as $merchandiser)
                                    <option value="{{ $merchandiser->id }}">{{ $merchandiser->name }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <a href="{{ route('users.create', ['users' => 'merchandiser']) }}" class="modal-btn-ctg input-group-text"><i class="fal fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2">
                        <label>{{__('Order No.')}}</label>
                        <input type="text" name="order_no" required value="{{ $order_no ?? '' }}" class="form-control" placeholder="Enter Order No." >
                    </div>
                    <div class="col-lg-6 mt-2">
                        <label>{{ __('Order Title') }}</label>
                        <select name="title" required class="form-control">
                            <option value="" disabled selected>Select Order Title</option>
                            <option value="Pp bag">Pp bag</option>
                            <option value="Hessian Cloth">Hessian Cloth</option>
                            <option value="Laminated">Laminated</option>
                            <option value="Inner liner">Inner liner</option>
                            <option value="Jumbo bag">Jumbo bag</option>
                        </select>
                    </div>
                    
                    <div class="col-lg-6 mt-2">
                        <label>{{__('Product Description')}}</label>
                        <input type="text" name="description" class="form-control" placeholder="Enter Order Description">
                    </div>
                    <div class="col-lg-6 mt-2">
                        <label>{{__('Fabrication')}}</label>
                        <input type="text" name="fabrication" class="form-control" placeholder="Enter Fab Name">
                    </div>
                </div>
            </div>
        </div>
        <div class="row new-order-wrapper">
            <div class="col-lg-4 mt-2">
                <label>{{__('GSM')}}</label>
                <input type="text" name="gsm" class="form-control" placeholder="Enter GSM">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Yarn Count')}}</label>
                <input type="text" name="yarn_count" class="form-control" placeholder="Enter Yarn Count">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Shipment Mode')}}</label>
                <input type="text" name="shipment_mode" class="form-control" placeholder="Enter Shipment Mode">
            </div>

            <div class="col-lg-4 mt-2">
                <label>{{__('Bank List')}}</label>
                <input type="text" name="payment_mode" class="form-control" placeholder="Enter Payment Mode">
            </div>
            <div class="col-lg-4 mt-2">
                <label class="table-select-lebel">{{__('Bank Account')}}</label>
                <div class="input-group">
                    <select name="bank_id" required class="form-control table-select remove-bg-table-select">
                        <option value="">{{__('Select a Account')}}</option>
                        @foreach($banks as $bank)
                            <option value="{{ $bank->id }}">{{ $bank->holder_name }} ({{ $bank->account_number  }})</option>
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <a href="{{ route('banks.index') }}" class="modal-btn-ctg input-group-text"><i class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Year')}}</label>
                <input type="text" name="year" class="form-control" placeholder="Enter Year">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Season')}}</label>
                <input type="text" name="season" class="form-control" placeholder="Enter Season">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Pantone')}}</label>
                <input type="text" name="meta[pantone]" class="form-control" placeholder="Enter Pantone">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Consignee & Notify')}}</label>
                <input type="text" name="invoice_details[consignee]" class="form-control" placeholder="Consignee & Notify">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Date of Order')}}</label>
                <input type="date"  name="invoice_details[contact_date]" value="{{ now()->format('Y-m-d') }}" class="form-control" placeholder="Contact Date">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Delivery Date')}}</label>
                <input type="date"  name="invoice_details[expire_date]" value="{{ now()->format('Y-m-d') }}" class="form-control" placeholder="Expiry Date">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Negotiation Period')}}</label>
                <input type="text" name="invoice_details[negotiation]" class="form-control" placeholder="15 Days">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Delivery place')}}</label>
                <input type="text" name="invoice_details[loading]" class="form-control" placeholder="Delivery placeg">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{__('Place of Destination')}}</label>
                <input type="text" name="invoice_details[discharge]" class="form-control" placeholder="Place of Destination">
            </div>
            <div class="col-lg-4 mt-2">
                <label>{{ __('Terms of Payment') }}</label>
                <select name="invoice_details[payment_terms]" class="form-control" required>
                    <option value="" disabled selected>Select Payment Terms</option>
                    <option value="100% advance">100% advance</option>
                    <option value="50% advance and remaining payment upon first delivery">
                        50% advance and remaining payment upon first delivery
                    </option>
                    <option value="30% advance and remaining payment upon first delivery">
                        30% advance and remaining payment upon first delivery
                    </option>
                </select>
            </div>
            
            <div class="col-lg-4 mt-2">
                <label>{{__('Remarks')}}</label>
                <input type="text" name="invoice_details[remarks]" class="form-control" placeholder="Remarks">
            </div>
            <div class="col-lg-12 table-form-section">
                <div class="table-responsive responsive-table mt-4 pb-3">
                    <table class="table table-two daily-production-table-print mw-1000" id="erp-table">
                        <thead>
                        <tr>
                            <th><strong>{{__('STYLE')}}</strong></th>
                            <th><strong>{{__('COLOR')}}</strong></th>
                            <th><strong>{{__('ITEM')}}</strong></th>
                            <th><strong>{{__('SHIPMENT DATE')}}</strong></th>
                            <th><strong>{{__('QTY')}}</strong></th>
                            <th><strong>{{__('UNIT PRICE')}}</strong></th>
                            <th><strong>{{__('TTL PRICE')}}</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="position-relative">
                            <td><div class="add-btn-one"><i class="fal fa-plus" aria-hidden="true"></i></div></td>
                            <td><div class="tr-remove-btn remove-one"><i class="fas fa-trash"></i></div></td>
                        </tr>
                        <tr class="duplicate-one">
                            <td><input type="text" name="style[]" class="form-control style clear-input" required placeholder="Style"></td>
                            <td><input type="text" name="color[]" class="form-control color clear-input" placeholder="Color"></td>
                            <td><input type="text" name="item[]" class="form-control item clear-input" placeholder="Item description"></td>
                            <td><input type="date" name="shipment_date[]" value="{{ now()->format('Y-m-d') }}" required class="form-control shipment_date clear-input"></td>
                            <td><input type="number" name="qty[]" class="form-control count-length qty 0" data-length="0" required placeholder="Qty"></td>
                            <td><input type="number" name="unit_price[]" class="form-control count-length unit_price 0" data-length="0" required placeholder="Unit price"></td>
                            <td><input type="number" name="total_price[]" class="form-control total_price 0" placeholder="Total price" readonly data-length="0" value="0"></td>
                        </tr>
                        <tr class="total">
                            <td colspan="4"><h6 class="text-end">Total</h6></td>
                            <td><h6 class="total_qty">0</h6></td>
                            <td><h6 class="total_unit_price">0</h6></td>
                            <td><h6 class="final_total_price">0</h6></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-12 mt-0">
                <div class="button-group text-center">
                    <a href="{{ route('orders.index') }}" class="theme-btn border-btn m-2">{{__('Cancel')}}</a>
                    <button class="theme-btn m-2 submit-btn">{{__('Save')}}</button>
                </div>
            </div>
        </div>
    </form>
</div>
