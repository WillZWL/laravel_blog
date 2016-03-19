@extends('home.layout')
@section('content')
<div class="head-warp">
  <div class="head">
        <div class="nav-box">
          <ul>
              <li class="cur">Will'S Timeline</li>
          </ul>
        </div>
  </div>
</div>
<div class="history_main">
  <div class="history">
    @foreach ($years as $k => $year)
    <div class="history-date">
      <ul>
        <h2 class="first"><a href="#nogo">{{ $k }}</a></h2>
        @foreach ($year as $timeline)
        <li @if ($timeline->difficulty != 'LOW') class="green" @endif>
          <h3>{{ date('m-d', strtotime($timeline->start_date)) }}<span>{{ date('Y', strtotime($timeline->start_date)) }}</span></h3>
          <dl>
            <dt>{{ $timeline->project }}
              <span>SBF#{{ $timeline->sbf_no}}&nbsp;&nbsp;&nbsp;&nbsp; {{ $timeline->subject }}</span>
            </dt>
          </dl>
        </li>
        @endforeach
      </ul>
    </div>
    @endforeach
  </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
@stop
