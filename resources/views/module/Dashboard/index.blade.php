<?php
$pageinfo=array("Dashboard","Dashboard","","SUL");
?>
@extends('layout.master')
@section('content')
@include('include.coreBarcum')
<div class="row">
	<div class="col-lg-6">
		<div class="cat__core__sortable" id="left-col">
			<section class="card" order-id="card-1">
				<div class="card-header">
					<div class="pull-right cat__core__sortable__control">
						<i class="icmn-minus mr-2 cat__core__sortable__collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"></i>
						<i class="icmn-plus mr-2 cat__core__sortable__uncollapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Uncollapse"></i>
						<i class="icmn-cross cat__core__sortable__close" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove"></i>
					</div>
					<h5 class="mb-0 text-black">
						<strong>Account Information</strong>
						<!--<small class="text-muted">All cards are draggable and sortable!</small>-->
					</h5>
				</div>
				<div class="card-block">
					<div class="row">
						<div class="col-xl-7">
							<div class="cat__core__widget cat__core__widget__2">
								<div class="cat__core__widget__2__head" style="background-image: url('modules/dummy-assets/common/img/photos/7.jpeg');">

                                </div>
                                <div class="cat__core__widget__2__content">
                                 <div class="cat__core__widget__2__left">
                                  <a class="cat__core__avatar cat__core__avatar--90 cat__core__avatar--border-white" href="javascript:void(0);">
                                   <img src="modules/dummy-assets/common/img/avatars/5.jpg" alt="Alternative text to the image">
                               </a>
                               <br />
                               <strong>Mr. Example</strong>
                               <br />
                               <span class="text-muted">demo@example.com</span>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-5">
                 <strong>Company:</strong>
                 <p class="text-muted mb-3">Ipsum is simply dummy</p>
                 <strong>Designation:</strong>
                 <p class="text-muted mb-3">Ipsum is simply dummy</p>
                 <strong>Deapartment:</strong>
                 <p class="text-muted mb-3">Ipsum is simply dummy</p>
                 <strong>Date Of Joining:</strong>
                 <p class="text-muted mb-3">Ipsum is simply dummy</p>
                 <strong>Date Of Birth:</strong>
                 <p class="text-muted mb-3">Ipsum is simply dummy</p>
                 <strong>Date Of Wedding:</strong>
                 <p class="text-muted mb-3">Ipsum is simply dummy</p>

             </div>
         </div>
     </div>
 </section>
 <section class="card" order-id="card-3">
     <div class="card-header">
      <div class="pull-right cat__core__sortable__control">
       <i class="icmn-minus mr-2 cat__core__sortable__collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"></i>
       <i class="icmn-plus mr-2 cat__core__sortable__uncollapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Uncollapse"></i>
       <i class="icmn-cross cat__core__sortable__close" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove"></i>
   </div>
   <h5 class="mb-0 text-black">
       <strong>Leave Summary</strong>
   </h5>
</div>
<div class="card-block">
  <table class="table mb-0">
   <thead>
    <tr>
     <th class="border-top-0">#</th>
     <th class="border-top-0">First Name</th>
     <th class="border-top-0">Username</th>
     <th class="border-top-0 hidden-lg-down">Levels</th>
     <th class="border-top-0"></th>
 </tr>
</thead>
<tbody>
    <tr>
     <th scope="row">
      <input type="checkbox">
  </th>
  <td><a href="javascript: void(0);" class="cat__core__link--underlined cat__core__link--blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #1">Mark Stevenson</a></td>
  <td>@mdo</td>
  <td class="hidden-lg-down">
      <div class="cat__core__steps-inline d-block">
       <a href="javascript: void(0);" class="cat__core__step cat__core__step--success">1</a>
       <a href="javascript: void(0);" class="cat__core__step cat__core__step--success">2</a>
   </div>
</td>
<td>
  <div class="dropdown pull-right">
   <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Actions
</button>
<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
    <a class="dropdown-item" href="javascript: void(0)">Action</a>
    <a class="dropdown-item" href="javascript: void(0)">Another action</a>
    <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
</ul>
</div>
</td>
</tr>
<tr>
 <th scope="row">
  <input type="checkbox">
</th>
<td><a href="javascript: void(0);" class="cat__core__link--underlined cat__core__link--blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #2">Jacob Hoffman</a></td>
<td>@fat</td>
<td class="hidden-lg-down">
  <div class="cat__core__steps-inline d-block">
   <a href="javascript: void(0);" class="cat__core__step cat__core__step--success">1</a>
   <a href="javascript: void(0);" class="cat__core__step">2</a>
</div>
</td>
<td>
  <div class="dropdown pull-right">
   <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Actions
</button>
<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
    <a class="dropdown-item" href="javascript: void(0)">Action</a>
    <a class="dropdown-item" href="javascript: void(0)">Another action</a>
    <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
</ul>
</div>
</td>
</tr>
<tr>
 <th scope="row">
  <input type="checkbox">
</th>
<td><a href="javascript: void(0);" class="cat__core__link--underlined cat__core__link--blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #3">Larry Page</a></td>
<td>@twitter</td>
<td class="hidden-lg-down">
  <div class="cat__core__steps-inline d-block">
   <a href="javascript: void(0);" class="cat__core__step cat__core__step--primary">1</a>
   <a href="javascript: void(0);" class="cat__core__step">2</a>
</div>
</td>
<td>
  <div class="dropdown pull-right">
   <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Actions
</button>
<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
    <a class="dropdown-item" href="javascript: void(0)">Action</a>
    <a class="dropdown-item" href="javascript: void(0)">Another action</a>
    <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
</ul>
</div>
</td>
</tr>
<tr>
 <th scope="row">
  <input type="checkbox">
</th>
<td><a href="javascript: void(0);" class="cat__core__link--underlined cat__core__link--blue" data-toggle="tooltip" data-placement="right" title="" data-original-title="User #1">Mark Stevenson</a></td>
<td>@mdo</td>
<td class="hidden-lg-down">
  <div class="cat__core__steps-inline d-block">
   <a href="javascript: void(0);" class="cat__core__step cat__core__step--success">1</a>
   <a href="javascript: void(0);" class="cat__core__step cat__core__step--success">2</a>
</div>
</td>
<td>
  <div class="dropdown pull-right">
   <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Actions
</button>
<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">
    <a class="dropdown-item" href="javascript: void(0)">Action</a>
    <a class="dropdown-item" href="javascript: void(0)">Another action</a>
    <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
</ul>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<section class="card" order-id="card-4">
 <div class="card-header">
  <div class="pull-right cat__core__sortable__control">
   <i class="icmn-minus mr-2 cat__core__sortable__collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"></i>
   <i class="icmn-plus mr-2 cat__core__sortable__uncollapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Uncollapse"></i>
   <i class="icmn-cross cat__core__sortable__close" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove"></i>
</div>
<h5 class="mb-0 text-black">
   <strong>Live Chat</strong>
   <span class="text-muted">(Send Message To HR)</span>
</h5>
</div>
<div class="card-block">
  <div class="cat__apps__messaging">
   <div class="height-400 custom-scroll cat__core__scrollable">
    <div class="cat__apps__chat-block">
     <div class="cat__apps__chat-block__item clearfix">
      <div class="cat__apps__chat-block__avatar">
       <a class="cat__core__avatar" href="javascript:void(0);">
        <img src="modules/dummy-assets/common/img/avatars/3.jpg" alt="Alternative text to the image" />
    </a>
</div>
<div class="cat__apps__chat-block__content">
   <strong>David Scott</strong>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
</div>
</div>
<div class="cat__apps__chat-block__item clearfix">
  <div class="cat__apps__chat-block__avatar">
   <a class="cat__core__avatar" href="javascript:void(0);">
    <img src="modules/dummy-assets/common/img/avatars/3.jpg" alt="Alternative text to the image" />
</a>
</div>
<div class="cat__apps__chat-block__content">
   <strong>Chris Smith</strong>
   <p>Lorem Ipsum is simply dummy text of the printing</p>
   <img class="cat__apps__profile__wall__message-img" src="modules/dummy-assets/common/img/photos/4.jpeg" />
   <img class="cat__apps__profile__wall__message-img" src="modules/dummy-assets/common/img/photos/3.jpeg" />
</div>
</div>
<div class="cat__apps__chat-block__item cat__apps__chat-block__item--right clearfix">
  <div class="cat__apps__chat-block__avatar">
   <a class="cat__core__avatar" href="javascript:void(0);">
    <img src="modules/dummy-assets/common/img/avatars/4.jpg" alt="Alternative text to the image" />
</a>
</div>
<div class="cat__apps__chat-block__content">
   <strong>Donald Trump</strong>
   <p>Ok. Thanks!</p>
</div>
</div>
<div class="cat__apps__chat-block__item cat__apps__chat-block__item--right clearfix">
  <div class="cat__apps__chat-block__avatar">
   <a class="cat__core__avatar" href="javascript:void(0);">
    <img src="modules/dummy-assets/common/img/avatars/4.jpg" alt="Alternative text to the image" />
</a>
</div>
<div class="cat__apps__chat-block__content">
   <strong>Donald Trump</strong>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy</p>
</div>
</div>
<div class="cat__apps__chat-block__item clearfix">
  <div class="cat__apps__chat-block__avatar">
   <a class="cat__core__avatar" href="javascript:void(0);">
    <img src="modules/dummy-assets/common/img/avatars/3.jpg" alt="Alternative text to the image" />
</a>
</div>
<div class="cat__apps__chat-block__content">
   <strong>David Scott</strong>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
</div>
</div>
<div class="cat__apps__chat-block__item cat__apps__chat-block__item--right clearfix">
  <div class="cat__apps__chat-block__avatar">
   <a class="cat__core__avatar" href="javascript:void(0);">
    <img src="modules/dummy-assets/common/img/avatars/4.jpg" alt="Alternative text to the image" />
</a>
</div>
<div class="cat__apps__chat-block__content">
   <strong>Donald Trump</strong>
   <p>Ok. Thanks!</p>
</div>
</div>
</div>
</div>
<div class="form-group mt-4 mb-0">
    <textarea class="form-control adjustable-textarea" placeholder="Type and press enter"></textarea>
    <div class="mt-3">
     <button class="btn btn-sm btn-primary width-100">
      <i class="fa fa-send mr-2"></i>
      Send
  </button>
  <button class="btn btn-link">
      Attach File
  </button>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<div class="col-lg-6">
 <div class="cat__core__sortable" id="right-col">
  <section class="card" order-id="card-6">
   <div class="card-header">
    <div class="pull-right cat__core__sortable__control">
     <i class="icmn-minus mr-2 cat__core__sortable__collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"></i>
     <i class="icmn-plus mr-2 cat__core__sortable__uncollapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Uncollapse"></i>
     <i class="icmn-cross cat__core__sortable__close" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove"></i>
 </div>
 <h5 class="mb-0 mr-3 d-inline-block text-black">
     <strong>Reminder Notifications</strong>
     <!--<small class="text-muted">(All Notifications)</small>-->
 </h5>
</div>
<div class="card-block">
    <div class="row">
     <div class="col-lg-6">
      <div class="cat__core__widget cat__core__widget__3 bg-default">
       <div class="carousel slide" id="carousel-1" data-ride="carousel">
        <ol class="carousel-indicators">
         <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
         <li data-target="#carousel-1" data-slide-to="1" class=""></li>
     </ol>
     <div class="carousel-inner" role="listbox">
         <div class="carousel-item active">
          <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
           <div class="cat__core__widget__3__icon">
            <i class="icmn-accessibility"></i>
        </div>
        <h2>Sales Growth</h2>
        <p>View Report</p>
    </a>
</div>
<div class="carousel-item">
  <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
   <div class="cat__core__widget__3__icon">
    <i class="icmn-download"></i>
</div>
<h2>All Reports</h2>
<p>Pdf Download</p>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
  <div class="cat__core__widget cat__core__widget__3 bg-default">
   <div class="carousel slide" id="carousel-2" data-ride="carousel">
    <ol class="carousel-indicators">
     <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
     <li data-target="#carousel-2" data-slide-to="1" class=""></li>
 </ol>
 <div class="carousel-inner" role="listbox">
     <div class="carousel-item active">
      <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
       <div class="cat__core__widget__3__icon">
        <i class="icmn-books"></i>
    </div>
    <h2>
        <i class="icmn-books"></i> Todo
    </h2>
    <p>
        1. Upgrade
        <br />
        2. Finish
    </p>
</a>
</div>
<div class="carousel-item">
  <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
   <div class="cat__core__widget__3__icon">
    <i class="icmn-download"></i>
</div>
<h2>
    <i class="icmn-download"></i> Finish
</h2>
<p>
    1. Upgrade
    <br />
    2. Prepare
</p>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
 <div class="col-lg-6">
  <div class="cat__core__widget cat__core__widget__3 bg-default">
   <div class="carousel slide" id="carousel-1" data-ride="carousel">
    <ol class="carousel-indicators">
     <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
     <li data-target="#carousel-1" data-slide-to="1" class=""></li>
 </ol>
 <div class="carousel-inner" role="listbox">
     <div class="carousel-item active">
      <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
       <div class="cat__core__widget__3__icon">
        <i class="icmn-accessibility"></i>
    </div>
    <h2>Sales Growth</h2>
    <p>View Report</p>
</a>
</div>
<div class="carousel-item">
  <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
   <div class="cat__core__widget__3__icon">
    <i class="icmn-download"></i>
</div>
<h2>All Reports</h2>
<p>Pdf Download</p>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
  <div class="cat__core__widget cat__core__widget__3 bg-default">
   <div class="carousel slide" id="carousel-2" data-ride="carousel">
    <ol class="carousel-indicators">
     <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
     <li data-target="#carousel-2" data-slide-to="1" class=""></li>
 </ol>
 <div class="carousel-inner" role="listbox">
     <div class="carousel-item active">
      <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
       <div class="cat__core__widget__3__icon">
        <i class="icmn-books"></i>
    </div>
    <h2>
        <i class="icmn-books"></i> Todo
    </h2>
    <p>
        1. Upgrade
        <br />
        2. Finish
    </p>
</a>
</div>
<div class="carousel-item">
  <a href="javascript: void(0);" class="cat__core__widget__3__body text-white">
   <div class="cat__core__widget__3__icon">
    <i class="icmn-download"></i>
</div>
<h2>
    <i class="icmn-download"></i> Finish
</h2>
<p>
    1. Upgrade
    <br />
    2. Prepare
</p>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="cat__core__margin-fix"><!-- --></div>

</div>
</section>


<section class="card" order-id="card-9">
   <div class="card-header">
    <div class="pull-right cat__core__sortable__control">
     <i class="icmn-minus mr-2 cat__core__sortable__collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"></i>
     <i class="icmn-cross cat__core__sortable__close" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove"></i>
 </div>
 <h5 class="mb-0 text-black">
     <strong>Quick Links</strong>
 </h5>
</div>
<div class="card-block">
    <div class="row">
     <div class="col-xl-6">
      <div class="cat__core__step cat__core__step--success mb-4">
       <span class="cat__core__step__digit">
        <i class="icmn-database"><!-- --></i>
    </span>
    <div class="cat__core__step__desc">
        <span class="cat__core__step__title">Databases</span>
        <p>Total: 61756</p>
    </div>
</div>
</div>
<div class="col-xl-6">
  <div class="cat__core__step cat__core__step--primary mb-4">
   <span class="cat__core__step__digit">
    <i class="icmn-users"><!-- --></i>
</span>
<div class="cat__core__step__desc">
    <span class="cat__core__step__title">Users</span>
    <p>Total: 7658</p>
</div>
</div>
</div>
</div>
<div class="row">
 <div class="col-xl-6">
  <div class="cat__core__step cat__core__step--danger mb-4">
   <span class="cat__core__step__digit">
    <i class="icmn-bullhorn"><!-- --></i>
</span>
<div class="cat__core__step__desc">
    <span class="cat__core__step__title">Connections</span>
    <p>Growth: 56%</p>
</div>
</div>
</div>
<div class="col-xl-6">
  <div class="cat__core__step cat__core__step--default mb-4">
   <span class="cat__core__step__digit">
    <i class="icmn-price-tags"><!-- --></i>
</span>
<div class="cat__core__step__desc">
    <span class="cat__core__step__title">Sales</span>
    <p>Total: 646</p>
</div>
</div>
</div>
</div>
<div class="row">
 <div class="col-xl-6">
  <div class="cat__core__step cat__core__step--secondary mb-4">
   <span class="cat__core__step__digit">
    <i class="icmn-price-tags"><!-- --></i>
</span>
<div class="cat__core__step__desc">
    <span class="cat__core__step__title">Sales</span>
    <p>Total: 646</p>
</div>
</div>
</div>
<div class="col-xl-6">
  <div class="cat__core__step cat__core__step--warning mb-4">
   <span class="cat__core__step__digit">
    <i class="icmn-bullhorn"><!-- --></i>
</span>
<div class="cat__core__step__desc">
    <span class="cat__core__step__title">Connections</span>
    <p>Growth: 56%</p>
</div>
</div>
</div>
</div>
<div class="cat__core__margin-fix"><!-- --></div>
</div>
</section>

<section class="card" order-id="card-12">
   <div class="card-header">
    <div class="pull-right cat__core__sortable__control">
     <i class="icmn-minus mr-2 cat__core__sortable__collapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"></i>
     <i class="icmn-plus mr-2 cat__core__sortable__uncollapse" data-toggle="tooltip" data-placement="left" title="" data-original-title="Uncollapse"></i>
     <i class="icmn-cross cat__core__sortable__close" data-toggle="tooltip" data-placement="left" title="" data-original-title="Remove"></i>
 </div>
 <h5 class="mb-0 text-black">
     <strong>Calendar</strong>
 </h5>
</div>
<div class="card-block">
    <div class="example-calendar-block"></div>
</div>
</section>
</div>
</div>
</div>
@endsection

@section('extraFooter')
<link rel="stylesheet" type="text/css" href="{{url('vendors/fullcalendar/dist/fullcalendar.min.css')}}">
<script src="{{url('vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        ///////////////////////////////////////////////////////////
                    // calendar
                    $('.example-calendar-block').fullCalendar({
                        //aspectRatio: 2,
                        height: 475,
                        header: {
                            left: 'prev, next',
                            center: 'title',
                            right: 'month, agendaWeek, agendaDay'
                        },
                        buttonIcons: {
                            prev: 'none fa fa-arrow-left',
                            next: 'none fa fa-arrow-right',
                            prevYear: 'none fa fa-arrow-left',
                            nextYear: 'none fa fa-arrow-right'
                        },
                        editable: true,
                        eventLimit: true, // allow "more" link when too many events
                        viewRender: function (view, element) {
                            if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
                                $('.fc-scroller').jScrollPane({
                                    autoReinitialise: true,
                                    autoReinitialiseDelay: 100
                                });
                            }
                        },
                        defaultDate: '2017-05-12',
                        events: [
                            {
                                title: 'All Day Event',
                                start: '2017-05-01',
                                className: 'fc-event-success'
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: '2017-05-09T16:00:00',
                                className: 'fc-event-default'
                            },
                            {
                                id: 999,
                                title: 'Repeating Event',
                                start: '2017-05-16T16:00:00',
                                className: 'fc-event-success'
                            },
                            {
                                title: 'Conference',
                                start: '2017-05-11',
                                end: '2017-05-14',
                                className: 'fc-event-danger'
                            }
                        ],
                        eventClick: function (calEvent, jsEvent, view) {
                            if (!$(this).hasClass('event-clicked')) {
                                $('.fc-event').removeClass('event-clicked');
                                $(this).addClass('event-clicked');
                            }
                        }
                    });

    });
</script>
@endsection