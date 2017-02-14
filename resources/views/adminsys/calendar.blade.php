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
						<h2 class="page-title">ปฏิทินกิจกรรม</h2>

                                    <!-- เพิ่ม ปฏิทินกิจกรรม -->
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">ปฏิทินกิจกรรม</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="{{ URL::to('/adminsys/calendar') }}">
                                 <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">หัวข้อ</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="inputtitle" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textArea" class="col-lg-2 control-label">กิจกรรม</label>
                                    <div class="col-lg-10">
                                        <textarea class="ckeditor" rows="3" name="message" id="textArea"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">เริ่มวันที่</label>
                                    <div class="col-lg-10">
                                        <input type="date" class="form-control" name="startdate" >
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">เริ่มเวลา</label>
                                    <div class="col-lg-10">
                                        <input type="time" class="form-control" name="starttime">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">สิ้นสุดวันที่</label>
                                    <div class="col-lg-10">
                                        <input type="date" class="form-control" name="enddate" >
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">สิ้นสุดเวลา</label>
                                    <div class="col-lg-10">
                                        <input type="time" class="form-control" name="enstime">
                                    </div>
                                 </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">สถานที่ / การเเต่งกาย</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="location">
                                    </div>
                                 </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">หน่วยงานเจ้าของเรื่อง</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="eventwho">
                                    </div>
                                 </div>
                                <div class="form-group">
								    <label class="col-sm-2 control-label">สีพื้นหลัง</label>
								    <div class="col-sm-10">
								        <input class="jscolor" name="bgcolor" value="">
								    </div>
								</div>
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">ปฏิทินกิจกรรม</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>หัวข้อ</th>
											<th>กิจกรรม</th>
											<th>เริ่มวันที่</th>
											<th>เริ่มเวลา</th>
                                            <th>สิ้นสุดวันที่</th>
											<th>สิ้นสุดเวลา</th>
                                            <th>สี</th>
											<th>แก้ไข</th>
                                            <th>ลบ</th>
										</tr>
									</thead>
									<tbody>
                                       @foreach  ($data as $dbs)
										<tr>
                                            <td>{{ $dbs->title }}</td>
                                            <td>{{ $dbs->activities }}</td>
                                            <td>{{ $dbs->start }}</td>
                                            <td>{{ $dbs->time_start }}</td>
                                            <td>{{ $dbs->end }}</td>
                                            <td>{{ $dbs->time_end }}</td>
                                            <td>{{ $dbs->color }}</td>
                                            <td><a href="{{ URL::to('/adminsys/update_calendar') }}/{{ $dbs->id }}" class="btn btn-info">แก้ไข</a></td>
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
</body>
</html>
