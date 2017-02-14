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
						<h2 class="page-title">เพิ่มเอกสารดาวน์โหลด</h2>
						<input type="button" class="btn btn-warning " data-toggle="modal" data-target="#myModal"value="เพิ่มเอกสารดาวน์โหลด">
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">เอกสารดาวน์โหลด</div>
							<div class="panel-body">

								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>ชื่อเอกสาร</th>
											<th>วันที่</th>
											<th>ประเภทเอกสาร</th>
                      <th>ลบ</th>
										</tr>
									</thead>
									<tbody>
										@foreach  ($data as $dbs )
										<tr>
											<td>{{ $dbs->name }}</td>
											<td>{{ $dbs->date }}</td>
											@if ($dbs->type==0)
											<td>เอกสารทั่วไป</td>
											@elseif ($dbs->type==1)
                    	<td>เอกสารภายใน</td>
											@endif
                      <td><a href="#" class="btn btn-info">ลบ</a></td>
										</tr>
										 @endforeach

									</tbody>
								</table>
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

	<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เพิ่มโดเมน</h4>
      </div>
      <div class="modal-body">
				<form method="post" class="form-horizontal" action="{{ URL::to('/adminsys/download') }}" enctype="multipart/form-data" >
					<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
					<div class="form-group">
						<label class="col-sm-2 control-label">ชื่อเอกสาร</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="name" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">วันที่</label>
						<div class="col-sm-10">
							<input type="text" name="date" class="form-control"  value="<?php echo date("d/m/Y"); ?>" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">ประเภทเอกสาร</label>
						<div class="col-sm-10">
							<select class="form-control"  id="select" name="type">
									<option selected value="0">เอกสารทั่วไป</option>
									<option value="1">เอกสารภายใน</option>
			 				</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">แนบเอกสาร </label>
						<div class="col-sm-10">
							<input type="file" name="file" />
						</div>
					</div>

					<div class="hr-dashed"></div>
					<div class="form-group">
						<div class="col-sm-8 col-sm-offset-2">
							<button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
						</div>
					</div>

				</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>
