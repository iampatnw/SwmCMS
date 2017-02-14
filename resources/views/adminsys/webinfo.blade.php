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
	<script src="{{ URL::to('/') }}/assets/backend/js/jscolor.min.js"></script>
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

						<h2 class="page-title">ตั้งค่าข้อมูลเว็บไซต์</h2>
									<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">ตั้งค่าข้อมูลเว็บไซต์</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" action="{{ URL::to('/adminsys/webinfo') }}">
											<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
											<div class="form-group">
												<label class="col-sm-2 control-label">ข้อความ Title Bar</label>
												<div class="col-sm-10">
													<input type="text" name="title" class="form-control" value="{{ $data->title }}">
												</div>
											</div>
                                             <div class="form-group">
												<label class="col-sm-2 control-label">รายละเอียดเว็บไซต์</label>
												<div class="col-sm-10">
													<textarea type="text" name="description" class="form-control">{{ $data->description }}</textarea>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">คีย์เวิร์ด</label>
												<div class="col-sm-10">
													<textarea type="text" name="keywords" class="form-control">{{ $data->keywords }} </textarea>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ข้อความวิ่ง</label>
												<div class="col-sm-10">
													<input type="text" name="textruns" class="form-control" value="{{ $data->textruns }}">
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ข้อความด้านล่าง</label>
												<div class="col-sm-10">
													<textarea type="text" class="ckeditor" name="footer" class="form-control">{{ $data->footer }} </textarea>
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">Facebook Fanpage</label>
												<div class="col-sm-10">
													<input type="text" name="fbfanpage" class="form-control" value="{{ $data->fbfanpage }}">
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
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">พื้นหลังเว็บไซต์</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" action="{{ URL::to('/adminsys/webinfo1') }}" enctype="multipart/form-data" >
											<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
											<div class="form-group">
												<label class="col-sm-2 control-label">สีเมนูด้านบน</label>
												<div class="col-sm-10">
													<input class="jscolor" name="menubarcolor" value="{{ $data1->menubarcolor }}">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">สีเมนู</label>
												<div class="col-sm-10">
													<input class="jscolor" name="menucolor" value="{{ $data1->menucolor }}">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">สีพื้นหลัง</label>
												<div class="col-sm-10">
													<input class="jscolor" name="bgcolor" value="{{ $data1->bgcolor }}">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">รูปภาพพื้นหลัง </label>
												<div class="col-sm-10">
													<input type="file" name="image" />
												</div>
											</div>
											<div class="form-group">
												<label class="col-lg-2 control-label">ภาะพื้นหังที่ใช้</label>
												<div class="col-lg-10">
													<p class="form-control-static">{{ $data1->imgbg }}</p>
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
								</div>
							</div>


					</div>
				</div>
			</div>
		</div>
	</div>
    </div>
</body>
</html>
