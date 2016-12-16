@extends('layouts.basic')

@section('styles')
  <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  <link href="assets/css/core.css" rel="stylesheet" type="text/css">
  <link href="assets/css/components.css" rel="stylesheet" type="text/css">
  <style type="text/css">
    .badge {
      display: inline-block;
      min-width: 10px;
      padding: 3px 7px;
      font-size: 12px;
      font-weight: bold;
      line-height: 1;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      background-color: #999;
      border-radius: 10px;
    }
  </style>
@endsection

@section('content')

<div class="col-md-3">
  <ul class="nav" role="tablist">
    <li class="active"><a href="#profile" role="tab" data-toggle="tab">profile</a></li>
    <li><a href="#setting" role="tab" data-toggle="tab">Setting</a></li>
    <li><a href="#cart" role="tab" data-toggle="tab">Cart</a></li>
    <li><a href="#transaction" role="tab" data-toggle="tab">Transactions</a></li>
  </ul>
</div>

<div class="col-md-9">
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane" id="cart">
      @include('customer.partials.cart')
    </div>
    <div class="tab-pane active" id="profile">
      @include('customer.partials.profile')
    </div>
    <div class="tab-pane" id="transaction">
    	@include('customer.partials.transaction')
    </div>
    <div class="tab-pane" id="setting">
    	@include('customer.partials.setting')
    </div>
  </div>
</div>

@endsection