@extends('layouts.app')
@section('content')

<div id="content" class="main-content">
  <div class="layout-px-spacing">
    <div class="row layout-top-spacing layout-spacing">
      <div class="col-lg-12">
        <div class="breadcrumb-five">
          <ul class="breadcrumb">
            <li class="mb-2"><a href="{{ url('/') }}">ニュース一覧</a></li>
            <li class="active mb-2"><a href="">ニュース詳細</a></li>
          </ul>
        </div>
        <div class="statbox widget box box-shadow">
          <div class="widget-header">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4>ニュース詳細</h4>
              </div>
            </div>
          </div>
          <div class="widget-content widget-content-area">
            <p class="lead">{{ $news->title }}</p>
            <hr>
            <div class="table-responsive my-4 style-1">
              <div id="style-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                <div class="row">
                  <div class="ql-editor" data-gramm="false" contenteditable="false"
                    data-placeholder="Compose an epic...">
                    {!! $news->mark_content !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection