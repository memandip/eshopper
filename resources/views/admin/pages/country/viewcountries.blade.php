@extends('admin.admin')

@section('page_title')
  | view countries
@endsection

@section('page-header')
  View Countries
@endsection

@section('pagename')
  / view countries
@endsection

@section('content')

<div class="col-md-12">
  @include('inc/messages')
  <table class="table table-bordered table-hover table-striped table-condensed datatable-basic">
    <thead>
      <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Iso 2</th>
        <th>Iso 3</th>
        <th>Dailing code</th>
        <th>Nationality</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $sn = 1; ?>
      @foreach($countries as $country)
      <tr>
        <td>{{$sn}}</td>
        <td>{{$country->name}}</td>
        <td>{{$country->iso_2}}</td>
        <td>{{$country->iso_3}}</td>
        <td>{{$country->dailing_code}}</td>
        <td>{{$country->nationality}}</td>
        <td>{{$country->status == 1 ? 'Active' : 'not-active'}}</td>
        <td>
          <a href="{{url('es/admin/country')}}/{{$country->id.'/edit'}}">
            <button class="btn btn-info">
              <span class="glyphicon glyphicon-edit"></span>
            </button>
          </a>
          <a href="{{url('es/admin/country')}}/{{$country->id.'/delete'}}" onclick="return confirm('Do you really want to delete ??');">
            <button class="btn btn-danger">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </a>
        </td>
      </tr>
      <?php $sn++; ?>
      @endforeach
    </tbody>
  </table>
</div>
@endsection