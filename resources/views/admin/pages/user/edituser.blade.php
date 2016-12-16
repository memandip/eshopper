@extends('admin.admin')

@section('page_title')
  | Edit User
@endsection

@section('page-header')
  Edit User
@endsection

@section('content')

<h1>Edit User Form <sup style="font-size:12px;">*fields with asterisk are mandatory.</sup></h1>

@include('inc/messages')

{{Form::open(['url'=>'es/admin/user/'.$user->id.'/edit'])}}

  <div class="col-md-6">

    <input type="hidden" name="user_id" value="{{$user->id}}">
    <label for="firstname">First name:<sup>*</sup></label>
    <input type="text" name="firstname" id="firstname" placeholder="Firstname" class="form-control" value="{{old('firstname') ? old('firstname') : $user->first_name}}">
    <label for="lastname">Last name:<sup>*</sup></label>
    <input type="text" name="lastname" id="lastname" placeholder="Lastname" class="form-control" value="{{old('lastname') ? old('lastname') : $user->last_name}}">
    <label for="username">Username:<sup>*</sup></label>
    <input type="text" name="username" id="username" placeholder="Username" class="form-control" value="{{old('username') ? old('username') : $user->username}}">
    <label for="email">Email:<sup>*</sup></label>
    <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="{{old('email') ? old('email') : $user->email}}">
    <label for="username">Password:<sup>*</sup></label>
    <input type="password" name="password" id="username" placeholder="Password" class="form-control" value="{{old('password')}}">
    <label for="usergroup">Group:<sup>*</sup></label>
    <select class="form-control" id="usergroup" name="usergroup">
      <option value="">---</option>
      @foreach($usergroups as $group)
      <option value="{{$group->id}}" {{(old('usergroup') ? old('usergroup') : $user->group_id) == $group->id ? 'selected':'not-selected'}} <?php if(old('usergroup')==$group->id){echo 'selected';} ?>>{{$group->group_name}}</option>
      @endforeach
    </select>
    <label for="country">Country:<sup>*</sup></label>
    <select class="form-control" id="country" name="country">
      <option value="">---</option>
      @foreach($countries as $country)
      <option value="{{$country->id}}" {{(old('country') ? old('country') : $user->country_id) == $country->id ? 'selected':'not-selected'}}  <?php if(old('country')==$country->id){echo 'selected';} ?>>{{$country->name}}</option>
      @endforeach
    </select>

  </div>

  <div class="col-md-6">

    <label for="address1">Address 1:<sup>*</sup></label>
    <input type="text" name="address1" id="address1" placeholder="Address 1" class="form-control" value="{{old('address1') ? old('address1') : $user->address1}}">
    <label for="address2">Address 2:<sup>*</sup></label>
    <input type="text" name="address2" id="address2" placeholder="Address 2" class="form-control" value="{{old('address2') ? old('address2') : $user->address2}}">
    <label for="company">Company:<sup>*</sup></label>
    <input type="text" name="company" id="company" placeholder="Company" class="form-control" value="{{old('company') ? old('company') : $user->company_name}}">
    <label for="job">Job title:<sup>*</sup></label>
    <input type="text" name="job" id="job" placeholder="Job title" class="form-control" value="{{old('job') ? old('job') : $user->job_title}}">
    <label for="phone_number">Home number:<sup>*</sup></label>
    <input type="text" name="phone_number" id="phone_number" placeholder="Home number" class="form-control" value="{{old('phone_number') ? old('phone_number') : $user->phone_number}}">
    <label for="mobile_number">Mobile number:<sup>*</sup></label>
    <input type="text" name="mobile_number" id="mobile_number" placeholder="Mobile number" class="form-control" value="{{old('mobile_number') ? old('mobile_number') : $user->mobile_number}}">
    <label for="fax">Fax number:<sup>*</sup></label>
    <input type="text" name="fax" id="fax" placeholder="Fax number" class="form-control" value="{{old('fax') ? old('fax') : $user->fax}}">
    <br>

  </div>

  <input type="submit" value="Submit" class="btn btn-primary">

@endsection
