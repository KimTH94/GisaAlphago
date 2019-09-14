<?php
include 'index.php';
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <style type="text/css">
        body {
                margin-left: 0px;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
              }
        #center {
          position:absolute;
          top:40%;
          left:20%;
          width:300px;
          height:200px;
          overflow:hidden;
          margin-top:-150px;
          margin-left:-100px;}
        #a{
          position:absolute;
          top:300px;
          left:300px;
        }
        #b{
          position:absolute;
          top:300px;
          left:400px;
        }
      </style>
  </head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
<script	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"	crossorigin="anonymous"></script>
<script	src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet"	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"	crossorigin="anonymous">
  <body>

    <div id="center" style="color : black;"><h1>관리자 페이지</h1></div>
    <!--실시간 문제 등록 : <button class ="btn btn-danger"id="a" data-toggle="modal" data-target="#z">버튼</button>
    Button trigger modal -->
    <button class="btn btn-danger" data-toggle="modal" data-target="#InsertModal" id="a">문제 등록</button>
    <button class="btn btn-success" data-toggle="modal" data-target="#InsertModal2" id="b">게시물 업로드</button>

<!-- Modal -->
<div class="modal fade" id="InsertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>정보처리기사 문제 등록</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insertPro.php" method="post" id="insertForm" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-row">
        	<div class ="form-group col-sm-2">
            <div style="margin-top : 9px; margin-left : 10px;"><h6><strong>연도</strong></h6></div>
          </div>
          <div class ="form-group col-sm-3">
            <select class="browser-default custom-select" name="year" id="year">
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
            </select>
          </div>
          <div class ="form-group col-sm-1"></div>
          <div class ="form-group col-sm-2">
            <div style="margin-top : 9px; margin-left : 10px;"><h6><strong>회차</strong></h6></div>
          </div>
          <div class ="form-group col-sm-3">
            <select class="browser-default custom-select" name="turn" id="turn">
              <option value="1">1회차</option>
              <option value="2">2회차</option>
              <option value="3">3회차</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class ="form-group col-sm-2">
            <div style="margin-top : 9px; margin-left : 10px;"><h6><strong>유형</strong></h6></div>
          </div>
          <div class ="form-group col-sm-5">
            <select class="browser-default custom-select" name="type" id="type">
              <option value="1">데이터 베이스</option>
              <option value="2">전자 계산기 구조</option>
              <option value="3">운영체제</option>
              <option value="4">소프트웨어 공학</option>
              <option value="5">데이터 통신</option>
            </select>
          </div>
          <div class ="form-group col-sm-2">
            <div style="margin-top : 9px; margin-left : 10px;"><h6><strong>정답</strong></h6></div>
          </div>
          <div class ="form-group col-sm-3">
            <select class="browser-default custom-select" name="correct" id="correct">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="question" style="margin-left : 15px;"><h6><strong>문제</strong></h6></label>
            <textarea class="form-control" id="question" rows="3" cols="57" name="question" style="margin-left : 15px;"></textarea>
          </div>
        </div>
        <div class="form-row">
            <div class ="form-group col-sm-1"><h6 style="margin-left : 10px;"><strong>1.</strong><h6></div>
            <div class ="form-group col-sm-11">
              <textarea class="form-control" name="multiplechoice1" id="multiplechoice1" rows="2"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class ="form-group col-sm-1"><h6 style="margin-left : 10px;"><strong>2.</strong><h6></div>
            <div class ="form-group col-sm-11">
              <textarea class="form-control" name="multiplechoice2" id="multiplechoice2" rows="2"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class ="form-group col-sm-1"><h6 style="margin-left : 10px;"><strong>3.</strong><h6></div>
            <div class ="form-group col-sm-11">
              <textarea class="form-control" name="multiplechoice3" id="multiplechoice3" rows="2"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class ="form-group col-sm-1"><h6 style="margin-left : 10px;"><strong>4.</strong><h6></div>
            <div class ="form-group col-sm-11">
              <textarea class="form-control" name="multiplechoice4" id="multiplechoice4" rows="2"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class ="form-group col-sm-1"><h6 style="margin-left : 10px;"><strong>5.</strong><h6></div>
            <div class ="form-group col-sm-11">
              <textarea class="form-control" name="multiplechoice5" id="multiplechoice5" rows="2"></textarea>
            </div>
        </div>
        <div class="form-row">
          <div class ="form-group col-sm-3"><h6 style="margin-left : 10px;"><strong>그림</strong><h6></div>
          <div class ="form-group col-sm-9">
            <input type ="file" name="img" id="img">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="submitButton">등록</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="InsertModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>정보처리기사 게시글 등록</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insertPro2.php" method="post" id="insertForm2" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-row">
        	<div class ="form-group col-sm-2">
            <div style="margin-top : 9px; margin-left : 10px;"><h6><strong>연도</strong></h6></div>
          </div>
          <div class ="form-group col-sm-3">
            <select class="browser-default custom-select" name="year2" id="year2">
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
            </select>
          </div>
          <div class ="form-group col-sm-1"></div>
          <div class ="form-group col-sm-2">
            <div style="margin-top : 9px; margin-left : 10px;"><h6><strong>회차</strong></h6></div>
          </div>
          <div class ="form-group col-sm-3">
            <select class="browser-default custom-select" name="turn2" id="turn2">
              <option value="1">1회차</option>
              <option value="2">2회차</option>
              <option value="3">3회차</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class ="form-group col-sm-3"><h6 style="margin-left : 10px;"><strong>문서</strong><h6></div>
          <div class ="form-group col-sm-9">
            <input type ="file" name="img2" id="img2">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="submitButton2">등록</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
 <script>
 $("#submitButton").click(function(event){
   var form = $("#insertForm")[0];
   var file_data = $('#img').prop('files')[0];
   var data = new FormData(form);
   data.append('img',file_data);
   $.ajax({
     type: "POST",
     enctype: 'multipart/form-data',
     url: "insertPro.php",
     data: data,
     processData: false,
     contentType: false,
     success: function(data){
       alert("등록 완료");
       $("#insertForm")[0].reset();
     }
   });
 });

 $("#submitButton2").click(function(event){
   var form = $("#insertForm2")[0];
   var file_data = $('#img2').prop('files')[0];
   var data = new FormData(form);
   data.append('img2',file_data);
   $.ajax({
     type: "POST",
     enctype: 'multipart/form-data',
     url: "insertPro2.php",
     data: data,
     processData: false,
     contentType: false,
     success: function(data){
       alert("등록 완료");
       $("#insertForm2")[0].reset();
     }
   });
 });
 </script>
 </html>
