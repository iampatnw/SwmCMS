<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $webinfo->description }}" >
    <meta name="keywords" content="{{ $webinfo->keywords }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $webinfo->title }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/fontend/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/fontend/bootstrap/css/fonts.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/fontend/bootstrap/css/custom.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/fontend/bootstrap/css/notifIt.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/fontend/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/fullcalendar/fullcalendar.css">
    <script src="{{ URL::to('/') }}/assets/fontend/bootstrap/js/jquery-1.10.2.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/fontend/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/fullcalendar/fullcalendar.js"></script>
    <script src="{{ URL::to('/') }}/assets/fontend/bootstrap/js/custom.js"></script>
    <script src="{{ URL::to('/') }}/assets/fontend/bootstrap/js/notifIt.js"></script>
    <script src="{{ URL::to('/') }}/assets/fullcalendar/lib/moment.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/fullcalendar/lib/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/fullcalendar/fullcalendar.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/fullcalendar/locale-all.js"></script>
    <script src="{{ URL::to('/') }}/assets/fontend/bootstrap/js/jquery.simplecolorpicker.js"></script>

    <style>
      body {
          background-color: #{{ $webinfo1->bgcolor }} ;
          background-image: url({{ URL::to('/') }}/public/images/{{ $webinfo1->imgbg }});
          background-repeat:repeat;
          background-attachment:fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;;
          }
          .wellfoot {
            min-height: 20px;
            padding: 5x;
            margin-bottom: 0px;
            background-color: #FFEBCF;
            border: 1px solid #e3e3e3;
            border-radius: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
          }
      </style>

  </head>
  <body>
      <div class="container">
      <!-- Slide photo  -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="{{ URL::to('/') }}/assets/fontend/img/12.png" alt="First slide" width="1170px">
          </div>
          <div class="item">
            <img src="{{ URL::to('/') }}/assets/fontend/img/12.png" alt="First slide" width="1170px" >
          </div>
          <div class="item">
            <img src="{{ URL::to('/') }}/assets/fontend/img/12.png" alt="First slide" width="1170px">
          </div>
        </div>
      </div>
          <!-- Header -->
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-home"></i> หน้าแรก</a></li>
                <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> ข่าวประชาสัมพันธ์</a></li>
                <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> คณะผู้บริหาร</a></li>
                <li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> ภาพกิจกรรม</a></li>
                <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> เว็บบอร์ด</a></li>
                <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> สมุดเยี่ยมชม</a></li>
                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> ติดต่อโรงเรียน</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- Well -->
          <div class="well">
              <div class="row">
                  <div class="col-lg-3  ">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-user"></i> ผู้บริหาร</h3>
                        </div>
                        <div class="panel-body">
                            <center><img src="assets/fontend/img/person.png" width="160px" height="200px" class="img-thumbnail"> <br/></center>

                            <p align="center">...............</p>
                            <p align="center">CEO</p>
                        </div>
                    </div>
                    <div class="list-group">
                        <a  class="list-group-item active"><i class="fa fa-bars" aria-hidden="true"></i> เมนูหลัก  </a>
                        <a href="#" class="list-group-item"><i class="fa fa-book"></i> ประวัติโรงเรียน</a>
                        <a href="#" class="list-group-item"><i class="fa fa-location-arrow"></i> ที่ตั้งโรงเรียน</a>
                        <a href="#" class="list-group-item"><i class="fa fa-star"></i> สัญลักษณ์โรงเรียน</a>
                        <a href="#" class="list-group-item"><i class="fa fa-gear"></i> วิสัยทัศน์ / ปรัชญา</a>
                        <a href="#" class="list-group-item"><i class="fa fa-flag"></i> พันธกิจ / เป้าหมาย</a>
                        <a href="#" class="list-group-item"><i class="fa fa-music"></i> เพลงโรงเรียน</a>
                        <a href="#" class="list-group-item"><i class="fa  fa-pencil"></i> หลักสูตรที่เปิดสอน</a>
                        <a href="#" class="list-group-item"><i class="fa fa-calendar"></i> ปฏิทินกิจกรรม</a>
                        <a href="#" class="list-group-item"><i class="fa fa-building"></i> ข้อมูลอาคารสถานที่</a>
                        <a href="#" class="list-group-item"><i class="fa fa-users"></i> ทำเนียบผู้บริหาร</a>
                        <a href="#" class="list-group-item"><i class="fa fa-user-md"></i> คณะกรรมการสถานศึกษา</a>
                        <a href="#" class="list-group-item"><i class="fa fa-user"></i> คณะกรรมการนักเรียน</a>
                        <a href="#" class="list-group-item"><i class="fa fa-list-alt"></i> ข้อมูลนักเรียน</a>

                    </div>
                    <div class="list-group">
                        <a  class="list-group-item active"><i class="fa fa-users"></i> ฝ่ายบริหารและบุคลากร </a>
                        <a href="#" class="list-group-item">คณะบริหาร</a>
                        <a href="#" class="list-group-item">สาระฯ ภาษาไทย</a>
                        <a href="#" class="list-group-item">สาระฯ คณิตศาสตร์</a>
                        <a href="#" class="list-group-item">สาระฯ วิทยาศาสตร์</a>
                        <a href="#" class="list-group-item">สาระฯ สังคมศึกษาฯ</a>
                        <a href="#" class="list-group-item">สาระฯ สุขศึกษาฯ</a>
                        <a href="#" class="list-group-item">สาระฯ การงานอาชีกฯ</a>
                        <a href="#" class="list-group-item">สาระฯ ภาษาต่างประเทศ</a>


                    </div>
                    <div class="list-group">
                        <a  class="list-group-item active"><i class="fa fa-users"></i> ลิงค์ที่หน้าสนใจ </a>
                        <div style="text-align: center;">
                        <a href="http://www.moe.go.th/" target="_blank" ><img src="assets/fontend/img/04-moe.gif"> </a>
                        <a href="http://www.moe.go.th/" target="_blank" ><img src="assets/fontend/img/04-moe.gif" > </a>
                        <a href="http://www.moe.go.th/" target="_blank" ><img src="assets/fontend/img/04-moe.gif" > </a>
                        <a href="http://www.moe.go.th/" target="_blank" ><img src="assets/fontend/img/04-moe.gif" > </a>
                        <a href="http://www.moe.go.th/" target="_blank" ><img src="assets/fontend/img/04-moe.gif" > </a>
                        <a href="http://www.moe.go.th/" target="_blank" ><img src="assets/fontend/img/04-moe.gif" > </a>
                        <a href="http://www.moe.go.th/" target="_blank" ><img src="assets/fontend/img/04-moe.gif" > </a>
                        <a href="http://www.moe.go.th/" target="_blank" ><img src="assets/fontend/img/04-moe.gif" > </a>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-8 col-lg-8">
                  <br>
                  <ul class="breadcrumb">
                        <li><a href="{{ URL::to('/') }}">หน้าเเรก</a></li>
                        <li class="active">ดาวโหลดเอกสาร</li>
                  </ul>

                  <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                      <tr class="success">
                        <th>ชื่อเอกสาร</th>
                        <th>วันที่</th>
                        <th>ประเภทเอกสาร</th>
                        <th>ดาวน์โหลด</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach  ($download as $file )
                      <tr>
                        <td>{{ $file->name }}</td>
                        <td>{{ $file->date }}</td>
                        @if ($file->type==0)
                        <td>เอกสารทั่วไป</td>
                        @endif
                        <td><a href="{{ URL::to('/') }}/public/file/{{ $file->document }}" target="_blank" >ดาวน์โหลด</a></td>
                      </tr>
                       @endforeach

                    </tbody>
                  </table>


                 </div>
        </div>

      </div>
        <div class="wellfoot">
            <?php
            echo "$webinfo->footer";
             ?>
                <br align="center">Copyright © 2016 SWM CMS All rights reserved.
        </div>
    </div>
  </body>
</html>
