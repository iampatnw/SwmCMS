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

						<h2 class="page-title">ตั้งค่าข้อมูลโรงเรียน</h2>
									<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">ตั้งค่าข้อมูลโรงเรียน</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal" action="{{ URL::to('/adminsys/setting') }}">
											<div class="form-group">
												<label class="col-sm-2 control-label">ชื่อโรงเรียน (ไทย)</label>
												<div class="col-sm-10">
													<input type="text" name="school_th" class="form-control" value="{{ $data->school_th }}">
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ชื่อโรงเรียน (อังกฤษ)</label>
												<div class="col-sm-10">
													<input type="text" name="school_en" class="form-control" value="{{ $data->school_en }}">
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">สังกัด</label>
												<div class="col-sm-10">
													<select name="school_cate" class="form-control">
                                                                      <option <?php if($data->school_cate==1){ echo 'selected="selected"'; }?>  value="1">สำนักงานเขตพื้นที่การศึกษาประถมศึกษา</option>
                                                                      <option <?php if($data->school_cate==2){ echo 'selected="selected"'; }?>  value="2">สำนักงานเขตพื้นที่การศึกษามัธยมศึกษา</option>
                                                                      <option <?php if($data->school_cate==3){ echo 'selected="selected"'; }?>  value="3">องค์การบริหารส่วนจังหวัด</option>
                                                                      <option <?php if($data->school_cate==4){ echo 'selected="selected"'; }?>  value="4">องค์กรปกครองส่วนท้องถิ่น</option>
                                                                      <option <?php if($data->school_cate==5){ echo 'selected="selected"'; }?>  value="5">สังกัดสำนักงานเขต</option>

                                                    </select>
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">เขต</label>
												<div class="col-sm-10">
													<input type="text" name="school_area" class="form-control" value="{{ $data->school_area }}">
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ระดับที่เปิดสอน</label>
												<div class="col-sm-10">
													<input type="text" name="course" class="form-control" value="{{ $data->course }}">
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ประเภท รัฐ/เอกชน</label>
												<div class="col-sm-10">
													<select name="schooltype" class="form-control">
                                                         <option <?php if($data->schooltype==1){ echo 'selected="selected"'; }?>  value="1">รัฐบาล</option>
                                                        <option <?php if($data->schooltype==2){ echo 'selected="selected"'; }?>  value="2">เอกชน</option>

                                                    </select>
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">วัน-เดือน-ปี ก่อตั้ง</label>
												<div class="col-sm-10">
													<input type="text" name="bday" class="form-control" value="{{ $data->bday }}">
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ผู้ก่อตั้ง (เฉพาะ ร.ร.เอกชน)</label>
												<div class="col-sm-10">
													<input type="text" name="founder_name" class="form-control" value="{{ $data->founder_name }}">
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ผู้รับใบอนุญาต (เฉพาะ ร.ร.เอกชน)	</label>
												<div class="col-sm-10">
													<input type="text" name="llicensee_name" class="form-control" value="{{ $data->llicensee_name }}">
												</div>
											</div>
                                             <div class="form-group">
												<label class="col-sm-2 control-label">ที่อยู่		</label>
												<div class="col-sm-10">
													<textarea type="text" name="address" class="form-control">{{ $data->address }}</textarea>
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ตำบล	</label>
												<div class="col-sm-10">
													<input type="text" name="tumbol" class="form-control" value="{{ $data->tumbol }}">
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">อำเภอ	</label>
												<div class="col-sm-10">
													<input type="text" name="amphur" class="form-control" value="{{ $data->amphur }}">
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">จังหวัด	</label>
												<div class="col-sm-10">
													<input type="text" name="province" class="form-control" value="{{ $data->province }}">
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">รหัสไปรษณีย์	</label>
												<div class="col-sm-10">
													<input type="text" name="zipcode" class="form-control" value="{{ $data->zipcode }}">
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">โทรศัพท์</label>
												<div class="col-sm-10">
													<input type="text" name="phone" class="form-control" value="{{ $data->phone }}">
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">โทรสาร</label>
												<div class="col-sm-10">
													<input type="text" name="fax" class="form-control" value="{{ $data->fax }}">
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ชื่อผู้บริหาร	</label>
												<div class="col-sm-10">
													<input type="text" name="manager" class="form-control" value="{{ $data->manager }}">
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">เบอร์ติดต่อ</label>
												<div class="col-sm-10">
													<input type="text" name="phone_dir" class="form-control" value="{{ $data->phone_dir }}">
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">Email	</label>
												<div class="col-sm-10">
													<input type="text" name="email" class="form-control" value="{{ $data->email }}">
												</div>
											 </div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">ที่URL เว็บไซต์</label>
												<div class="col-sm-10">
													<p class="form-control-static"><a href="{{ URL::to('/') }}" target="_blank" >{{ URL::to('/') }}</a> </p>
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
