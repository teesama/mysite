<meta charset="utf-8">
<!DOCTYPE html>
  <?php

  include 'navbar.php';
  ?>
<html>
  <head>
    <title>หน้าแรก-ระบบการแข่งขัน </title>
    <style>
    body {
        background-image: url("../img/index11.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Prompt', sans-serif;
        z-index: 1;
				}
    </style>
  </head>

  <body class="body">
    <div class="container" style="border:1px white solid; width:1700px; height: 550px;  background-color:white; opacity:0.9;">
      <div class="hover11" style="width:200px;margin-top:50px; margin-left:30px;"  class="row text-left">
          <a href="../student/stu.php">
        <figure><img src="../img/card.png" style="width:100px;"  style="margin-left:30px;"></figure>
        <span>จัดการข้อมูลนักกีฬา</span>
      </div></a>

      <div class="hover11"  style="width:200px;margin-top:-122px; margin-left:270px;"  class="row text-left">
<a href="../sport_type/sport1.php">
        <figure><img src="../img/football.png" width="100" height="100" style="margin-left:30px;"></figure>
        <span>จัดการข้อมูลประเภทกีฬา</span>
      </div></a>

      <div class="hover11"  style="width:200px;margin-top:-122px; margin-left:550px;"  class="row text-left">
          <a href="../match/match.php">
        <figure><img src="../img/maten.png" width="100" height="100" style="margin-left:30px;"></figure>
        <span>จัดการข้อมูลตารางการแข่งขัน</span>
      </div></a>

      <div class="hover11"  style="width:200px;margin-top:-125px; margin-left:890px;"  class="row text-left">
<a href="../candidate_team/candidate.php">
        <figure>  <img src="../img/victory.png" width="100" height="100" style="margin-left:30px;"></figure>
        <span>จัดการข้อมูลผลการแข่ง</span>
      </div></a>

      <div class="hover11"  style="width:260px;margin-top:60px; margin-left:10px;"  class="row text-left">
  <a href="../team/team.php">
        <figure>  <img src="../img/team.png" width="100" height="100" style="margin-left:30px;"></figure>
        <span>จัดการข้อมูลทีมนักกีฬา</span>
      </div></a>

      <div class="hover11"  style="width:260px;margin-top:-123px; margin-left:270px;"  class="row text-left">
             <a href="../sport_unit/Unit.php">
        <figure> <img src="../img/torch.png" width="100" height="100" style="margin-left:30px;"></figure>
        <span>จัดการข้อมูลหน่วยกีฬา</span>
      </div>

      <div class="hover11"  style="width:200px;margin-top:-125px; margin-left:550px;"  class="row text-left">
        <a href="../level/level.php">
      <figure> <img src="../img/rising.png" width="100" height="100" style="margin-left:20px;"></figure>
        <span>จัดการข้อมูลระดับชั้น</span>
      </div>  </a>

      <div class="hover11"  style="width:200px;margin-top:-125px; margin-left:890px;"  class="row text-left">
          <a href="../major/major.php">
            <figure> <img src="../img/scholarship.png" width="100" height="100" style="margin-left:20px;"></figure>
        <span>จัดการข้อมูลสาขาวิชา</span>
      </div></a>

      <div class="hover11"  style="width:200px;margin-top:30px; margin-left:270px;"  class="row text-left">
              <a href="../department/department.php">
                <figure> <img src="../img/department.png" width="100" height="100" style="margin-left:10px;"></figure>
        <span>จัดการข้อมูลแผนก</span>
      </div>  </a>

      <div class="hover11"  style="width:200px;margin-top:-120px; margin-left:550px;"  class="row text-left">
      <a href="../committee/committee.php">
        <figure> <img src="../img/coach.png" width="100" height="100" style="margin-left:20px;"></figure>
        <span>จัดการข้อมูลกรรมการ</span>
      </a></div>


        </div>
    </div>
  </div>
  <div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
  </body>
  <style>
  figure {
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
figure:hover+span {
	bottom: -36px;
	opacity: 1;
}



/* Zoom In #1 */
.hover01 figure img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover01 figure:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}

/* Zoom In #2 */
.hover02 figure img {
	width: 300px;
	height: auto;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover02 figure:hover img {
	width: 350px;
}

/* Zoom Out #1 */
.hover03 figure img {
	-webkit-transform: scale(1.5);
	transform: scale(1.5);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover03 figure:hover img {
	-webkit-transform: scale(1);
	transform: scale(1);
}

/* Zoom Out #2 */
.hover04 figure img {
	width: 400px;
	height: auto;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover04 figure:hover img {
	width: 300px;
}

/* Slide */
.hover05 figure img {
	margin-left: 30px;
	-webkit-transform: scale(1.5);
	transform: scale(1.5);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover05 figure:hover img {
	margin-left: 0;
}

/* Rotate */
.hover06 figure img {
	-webkit-transform: rotate(15deg) scale(1.4);
	transform: rotate(15deg) scale(1.4);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover06 figure:hover img {
	-webkit-transform: rotate(0) scale(1);
	transform: rotate(0) scale(1);
}

/* Blur */
.hover07 figure img {
	-webkit-filter: blur(3px);
	filter: blur(3px);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover07 figure:hover img {
	-webkit-filter: blur(0);
	filter: blur(0);
}

/* Gray Scale */
.hover08 figure img {
	-webkit-filter: grayscale(100%);
	filter: grayscale(100%);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover08 figure:hover img {
	-webkit-filter: grayscale(0);
	filter: grayscale(0);
}

/* Sepia */
.hover09 figure img {
	-webkit-filter: sepia(100%);
	filter: sepia(100%);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover09 figure:hover img {
	-webkit-filter: sepia(0);
	filter: sepia(0);
}

/* Blur + Gray Scale */
.hover10 figure img {
	-webkit-filter: grayscale(0) blur(0);
	filter: grayscale(0) blur(0);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover10 figure:hover img {
	-webkit-filter: grayscale(100%) blur(3px);
	filter: grayscale(100%) blur(3px);
}

/* Opacity #1 */
.hover11 figure img {
	opacity: 1;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover11 figure:hover img {
	opacity: .5;
}

/* Opacity #2 */
.hover12 figure {
	background: #1abc9c;
}
.hover12 figure img {
	opacity: 1;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover12 figure:hover img {
	opacity: .5;
}

/* Flashing */
.hover13 figure:hover img {
	opacity: 1;
	-webkit-animation: flash 1.5s;
	animation: flash 1.5s;
}
@-webkit-keyframes flash {
	0% {
		opacity: .4;
	}
	100% {
		opacity: 1;
	}
}
@keyframes flash {
	0% {
		opacity: .4;
	}
	100% {
		opacity: 1;
	}
}

/* Shine */
.hover14 figure {
	position: relative;
}
.hover14 figure::before {
	position: absolute;
	top: 0;
	left: -75%;
	z-index: 2;
	display: block;
	content: '';
	width: 50%;
	height: 100%;
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	-webkit-transform: skewX(-25deg);
	transform: skewX(-25deg);
}
.hover14 figure:hover::before {
	-webkit-animation: shine .75s;
	animation: shine .75s;
}
@-webkit-keyframes shine {
	100% {
		left: 125%;
	}
}
@keyframes shine {
	100% {
		left: 125%;
	}
}

/* Circle */
.hover15 figure {
	position: relative;
}
.hover15 figure::before {
	position: absolute;
	top: 50%;
	left: 50%;
	z-index: 2;
	display: block;
	content: '';
	width: 0;
	height: 0;
	background: rgba(255,255,255,.2);
	border-radius: 100%;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	opacity: 0;
}
.hover15 figure:hover::before {
	-webkit-animation: circle .75s;
	animation: circle .75s;
}
@-webkit-keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}
@keyframes circle {
	0% {
		opacity: 1;
	}
	40% {
		opacity: 1;
	}
	100% {
		width: 200%;
		height: 200%;
		opacity: 0;
	}
}
  </style>
</html>
