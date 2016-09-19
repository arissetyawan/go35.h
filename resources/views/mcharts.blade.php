@extends ('layouts.dashboard')
@section('page_heading','Charts')
@section('section')
<div class="col-sm-12">	
	<div class="row">
		<div class="col-sm-6">
			@section ('cchart1_panel_title','Revenue | More . . .')
			@section ('cchart1_panel_body')
			@include('widgets.charts.clinechart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))

			@section ('cchart3_panel_title','Affilates | More . . .')
			@section ('cchart3_panel_body')
				<div style="max-width:400px; margin:0 auto;">@include('widgets.charts.cdonutchart')</div>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart3'))
		</div>
		<div class="col-sm-6">
			
			@section ('cchart2_panel_title','Booking Statuses | More . . .')
			@section ('cchart2_panel_body')
				<div style="max-width:400px; margin:0 auto;">@include('widgets.charts.cpiechart')</div>
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart2'))

			@section ('cchart4_panel_title','Room Bookings | More . . . ')
			@section ('cchart4_panel_body')
			@include('widgets.charts.cbarchart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart4'))
		</div> 
	</div>
	
	
</div>
@stop
