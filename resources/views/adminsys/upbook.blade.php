<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Harmony - Free responsive Bootstrap admin template by Themestruck.com</title>
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/backend/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/backend/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/backend/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/backend/css/bootstrap-social.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/backend/css/fileinput.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/backend/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/backend/css/style.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/assets/backend/css/notifIt.css">
	<script src="{{ URL::to('/') }}/assets/backend/js/jquery.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/bootstrap-select.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/bootstrap.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/jquery.dataTables.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/dataTables.bootstrap.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/Chart.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/fileinput.js"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/chartData.js"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/main.js"></script>
	<script src="{{ URL::to('/') }}/assets/ckeditor/ckeditor.js"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/jscolor.min.js'"></script>
	<script src="{{ URL::to('/') }}/assets/backend/js/notifIt.js"></script>

</head>
<body>
        <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info','error'] as $msg)
      @if(Session::has('alert-' . $msg))

      	<script>
    $(document).ready(function() {
      notif({
	   msg: "<b>{{ Session::get('alert-' . $msg) }}",
	   type: "{{ $msg }}",
	   position: "center"
     });
    });
    </script>

      @endif
    @endforeach
  </div> <!-- end .flash-message -->
<div class="brand clearfix">
		<a href="index.html" class="logo"><img src="{{ URL::to('/') }}/assets/custom/img/logo.jpg" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li><a href="#" target="_blank">ดูเว็บไซต์</a></li>
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="#">เปลี่ยนรหัส</a></li>
					<li><a href="#">ออกจากระบบ</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
        <nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">เมนูหลัก</li>
				<li><a href="index.html"><i class="fa fa-dashboard"></i> ข้อมูลสถานศึกษา</a></li>
				<li><a href="index.html"><i class="fa fa-dashboard"></i> ข่าวประชาสัมพันธ์</a></li>
                <li><a href="index.html"><i class="fa fa-dashboard"></i> ปฏิทินกิจกรรม</a></li>
                <li><a href="index.html"><i class="fa fa-dashboard"></i> คณะกรรมการสถานศึกษา</a></li>
                <li><a href="index.html"><i class="fa fa-dashboard"></i> ข้อมูลสถานศึกษา</a></li>
                <li><a href="#"><i class="fa fa-desktop"></i> ฝ่ายบริหารและบุคลากร</a>
					<ul>
						<li><a href="panels.html">คณะผู้บริหาร</a></li>
                        <li><a href="panels.html">กลุ่มสาระฯ ภาษาไทย</a></li>
                        <li><a href="panels.html">กลุ่มสาระฯ คณิตศาสตร์</a></li>
                        <li><a href="panels.html">กลุ่มสาระฯ วิทยาศาสตร์</a></li>
                        <li><a href="panels.html">กลุ่มสาระฯ สังคมศึกษาฯ</a></li>
                        <li><a href="panels.html">กลุ่มสาระฯ สุขศึกษาฯ</a></li>
                        <li><a href="panels.html">กลุ่มสาระฯ การงานอาชีกฯ</a></li>
                        <li><a href="panels.html">กลุ่มสาระฯ ภาษาต่างประเทศ</a></li>
                        <li><a href="panels.html">กลุ่มสาระฯ ศิลปะ</a></li>
					</ul>
				</li>
                <li><a href="tables.html"><i class="fa fa-table"></i> ลิงค์ภายนอก</a></li>
				<li><a href="tables.html"><i class="fa fa-table"></i> ติดต่อ</a></li>
				<li><a href="forms.html"><i class="fa fa-edit"></i> ระบบสมุดเยี่ยมชม</a></li>
				<li><a href="charts.html"><i class="fa fa-pie-chart"></i> ข้อมูลร้องเรียน</a></li>
                <li><a href="tables.html"><i class="fa fa-table"></i> ตั้งค่าเว็บไซค์</a></li>
				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li class="ts-account">
						<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
                            <li><a href="#">เปลี่ยนรหัส</a></li>
					        <li><a href="#">ออกจากระบบ</a></li>
						</ul>
					</li>
				</ul>
			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">สมุดเยี่ยมชม</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">สมุดเยี่ยมชม</div>
							<div class="panel-body">
                <form method="post" action="{{ URL::to('/adminsys/guestbook') }}">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>

											<th>ผู้โพสต์</th>
											<th>ข้อความ</th>
											<th>วันที่</th>
											<th>ไอพี</th>
                                            <th>สถานะ</th>
                                            <th>เปลี่ยนสถานะ</th>
											<th>อนุมัติ</th>
										</tr>
									</thead>
									<tbody>

										<tr>
                                           <input type="hidden" name="id" value="{{ $data->id }}">
                                            <td>{{ $data->name}}</td>
                                            <td>{{ $data->message}}</td>
                                            <td>{{ $data->date}}</td>
                                            <td>{{ $data->ipaddress}}</td>
                                            @if ($data->status==0)
                                            <td><span class="label label-danger">รอการอนุมัติ </span></td>
                                            @else
                                            <td><span class="label label-success">อนุมัติเรียบร้อย </span></td>
                                            @endif
                                            <td>
                                             @if ($data->status==0)
                                            <select class="form-control"  id="select" name="status">
						                          <option value="0">ไม่อนุมัติ</option>
						                          <option  selected value="1">อนุมัติ</option>
					                           </select>
                                             @else
                                            <select class="form-control"  id="select" name="status">
						                          <option selected value="0">ไม่อนุมัติ</option>
						                          <option value="1">อนุมัติ</option>
					                           </select>
                                            @endif
                                            </td>

                                            <td><button type="submit" class="btn btn-primary">อัพเดท</button></td>
										</tr>
									</tbody>
								</table>
                                   </form>
							</div>
						</div>

					</div>
				</div>

				<div class="row">
					<div class="clearfix pt pb">
						<div class="col-md-12">
							<em>Thank you for using <a href="http://themestruck.com/theme/harmony/"> Harmony Admin Theme </a> by <a href="http://themestruck.com/">ThemeStruck</a></em>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>
