<?php
require_once('include/conn.php');
$ob = new Connect();
?>
<!doctype html>
<html>
    <head>
        <title>T-Shirt Design Tool</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Berkshire+Swash|Black+Han+Sans|Dancing+Script|Do+Hyeon|Francois+One|Gamja+Flower|Gothic+A1|Gugi|Indie+Flower|Montserrat|PT+Sans+Narrow|PT+Serif|Pacifico|Pangolin|Patua+One|Skranji|Titan+One|Titillium+Web" rel="stylesheet">
        <style>
            /*font-family: 'Gothic A1', sans-serif;
font-family: 'Pangolin', cursive;
font-family: 'Montserrat', sans-serif;
font-family: 'Titan One', cursive;
font-family: 'Do Hyeon', sans-serif;
font-family: 'Skranji', cursive;
font-family: 'Titillium Web', sans-serif;
font-family: 'PT Serif', serif;
font-family: 'PT Sans Narrow', sans-serif;
font-family: 'Indie Flower', cursive;
font-family: 'Gugi', cursive;
font-family: 'Pacifico', cursive;
font-family: 'Abril Fatface', cursive;
font-family: 'Dancing Script', cursive;
font-family: 'Black Han Sans', sans-serif;
font-family: 'Acme', sans-serif;
font-family: 'Patua One', cursive;
font-family: 'Gamja Flower', cursive;
font-family: 'Francois One', sans-serif;
font-family: 'Berkshire Swash', cursive;*/
            .des{
                height: 600px;
                width: 500px;
                padding-top: 180px;
                padding-left: 145px;
            }
            .artbox{
                width: 200px;
            }
            .textbox{
                text-align: center;
                font-size: 26px;
            }
            .tprev{
                width: 300px;
                height: 500px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>T-Shirt Design Tool</h2>
            <hr/>
            <div class="row">
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Arts</h3>
                            <div style="width:auto;height:300px;overflow-x:auto">
                                <?php
                            $tshirts = $ob->select_data2("select * from arts");
                            if($tshirts->num_rows>0){
                                while($row = $tshirts->fetch_array()){
                                    echo '<img class="tar" tid="'.$row[0].'" tprice="'.$row[2].'" width="75px;" src="'.$row[3].'" />';
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label>Enter Text</label>
                        <input type="text" class="form-control" id="txt" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" id="addtxt">Add</button>
                    </div>
                    <div class="form-group">
                        <label>Edit Text</label>
                        <input type="text" class="form-control" id="edtxt" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" id="edittxt">Update</button>
                        <button class="btn btn-danger" id="deltxt">Delete</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>T-Shirts</h3>
                            <div style="width:auto;height:300px;overflow-x:auto">
                            <?php
                            $tshirts = $ob->select_data2("select * from tshirt");
                            if($tshirts->num_rows>0){
                                while($row = $tshirts->fetch_array()){
                                    echo '<img class="ts" tid="'.$row[0].'" tprice="'.$row[2].'" width="75px;" src="'.$row[3].'" />';
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label>Select Color</label>
                        <input type="color" class="form-control" id="gcol" />
                    </div>
                    <div class="form-group">
                        <label>Select Font</label>
                        <select class="form-control" id="gfont">
                            <option>'Gothic A1', sans-serif</option>
                            <option>'Pangolin', cursive</option>
                            <option>'Montserrat', sans-serif</option>
                            <option>'Titan One', cursive</option>
                            <option>'Do Hyeon', sans-serif</option>
                            <option>'Skranji', cursive</option>
                            <option>'Titillium Web', sans-serif</option>
                            <option>'PT Serif', serif</option>
                            <option>'PT Sans Narrow', sans-serif</option>
                            <option>'Indie Flower', cursive</option>
                            <option>'Gugi', cursive</option>
                            <option>'Pacifico', cursive</option>
                            <option>'Abril Fatface', cursive</option>
                            <option>'Dancing Script', cursive</option>
                            <option>'Black Han Sans', sans-serif</option>
                            <option>'Acme', sans-serif</option>
                            <option>'Patua One', cursive</option>
                            <option>'Gamja Flower', cursive</option>
                            <option>'Francois One', sans-serif</option>
                            <option>'Berkshire Swash', cursive</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label>Select Font</label>
                        <select class="form-control" id="gfsize">
                         </select>
                    </div>
                    <div class="form-group">
                        <label>Rotate</label>
                        <input type="range" id="rottxt" value="180" min="0" max="360" class="form-control"/>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>Colors</h3>
                            <div style="width:auto;height:300px;overflow-x:auto">
                                <div class="clr"></div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="form-group">
                        <button class="btn-lg btn-primary" data-toggle="modal" data-target="#myModal" id="prev">Preview</button>
                    </div>
                    <div class="form-group">
                        <label>Logo Resize</label>
                        <input type="range" id="resize" value="200" min="50" max="200" class="form-control"/>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h3>T-Shirt</h3>
                    <div class="des" id="des">
                        
                        
                    </div>
                </div>
            </div>
            <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div class="tprev"></div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-primary" id="save">Save</a>
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       
        <script>
            var prevcss = "tshirts/a1.png";
            var element = $(".des"); // global variable
            var getCanvas; // global variable
            
            $(document).ready(function(){
                for(i=10;i<=60;i++){
                    $("#gfsize").append("<option>"+i+"</option>");
                }
                
                $(".des").css({'background':'url(tshirts/a1.png) no-repeat'});
            
                $(".ts").click(function(){
                    var url = $(this).attr("src");
                    var tid = $(this).attr("tid");
                    $(".des").css({'background':'url('+url+') no-repeat'});
                    prevcss = url;
                    $.post("getTcolor.php", {tid: tid}, function(data){
                        $(".clr").html(data);
                    });
                });
            
                $(".tar").click(function(){
                    var url = $(this).attr("src");
                    $(".des").append('<img draggable="true" class="artbox" src="'+url+'" />');
                });
                $(document).on("click", ".tsc", function(){
                    var url = $(this).attr("src");
                    $(".des").css({'background':'url('+url+') no-repeat'});
                    prevcss = url;
                });
            
                $("#addtxt").click(function(){
                    var txt = $("#txt").val();
                    $("#txt").val("");
                    $(".des").append('<div draggable="true" class="textbox">'+txt+'</div>');
                });
                $("#gcol").change(function(){
                    var col = $(this).val();
                    $(".edit").css({"color":col});
                });
                $("#gfont").change(function(){
                    var col = $("#gfont option:selected").val();
                    $(".edit").css({"font-family":col});
                });
            
                $("#gfsize").change(function(){
                    var col = $("#gfsize option:selected").val();
                    $(".edit").css({"font-size":col+"px"});
                });
                $("#rottxt").change(function(){
                    var col = $("#rottxt").val();
                    $(".edit").css({"transform":"rotate("+col+"deg)"});
                });
                
                $("#resize").change(function(){
                    var col = $("#resize").val();
                    $(".edit").css({"width":col});
                });
                
                $("#prev").click(function(){
                    $(".tprev").empty();
                    //var x = $(".des").html();
                    //$(".tprev").css({'background':'url('+prevcss+') no-repeat'});
                    //$(".tprev").html(x);
                    html2canvas(element, {
                        onrendered: function (canvas) {
                            $(".tprev").append(canvas);
                            getCanvas = canvas;
                         }
                     });
                });

                $("#save").click(function(){
                   var imgageData = getCanvas.toDataURL("image/png");
                    // Now browser starts downloading it instead of just showing it
                    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                    $("#save").attr("download", "tshirt.png").attr("href", newData);
                });
                
                
                $(document).on("click",".artbox",function(){
                    
                    //$(this).resizable();
                    $(this).draggable();
                });
                $(document).on("click",".textbox",function(){
                    $(this).draggable();
                    //$(this).resizable();
                });
                
                $(document).on("click",".textbox",function(){
                    $(".edit").css({"border":"0px solid red"});
                    $(".edit").removeClass("edit");
                    $(this).css({"border":"1px solid red"});
                    $(this).addClass("edit");
                    var txt = $(".edit").text();
                    $("#edtxt").val(txt);
                });
                
                $(document).on("click",".artbox",function(){
                    $(".edit").css({"border":"0px solid red"});
                    $(".edit").removeClass("edit");
                    $(this).css({"border":"1px solid red"});
                    $(this).addClass("edit");
                });
                
                $(".des").click(function(){
                    $(".edit").css({"border":"0px solid red"});
                    $(".edit").removeClass("edit");
                });
                
                $("#deltxt").click(function(){
                    $(".edit").remove();
                });
            $("#edittxt").click(function(){
                var utxt = $("#edtxt").val();
                $("#edtxt").val("");
                $(".edit").text(utxt);
            });
        });
            
            
            /*var p = document.querySelector('p'); // element to make resizable

p.addEventListener('click', function init() {
    p.removeEventListener('click', init, false);
    p.className = p.className + ' resizable';
    var resizer = document.createElement('div');
    resizer.className = 'resizer';
    p.appendChild(resizer);
    resizer.addEventListener('mousedown', initDrag, false);
}, false);

var startX, startY, startWidth, startHeight;

function initDrag(e) {
   startX = e.clientX;
   startY = e.clientY;
   startWidth = parseInt(document.defaultView.getComputedStyle(p).width, 10);
   startHeight = parseInt(document.defaultView.getComputedStyle(p).height, 10);
   document.documentElement.addEventListener('mousemove', doDrag, false);
   document.documentElement.addEventListener('mouseup', stopDrag, false);
}

function doDrag(e) {
   p.style.width = (startWidth + e.clientX - startX) + 'px';
   p.style.height = (startHeight + e.clientY - startY) + 'px';
}

function stopDrag(e) {
    document.documentElement.removeEventListener('mousemove', doDrag, false);
    document.documentElement.removeEventListener('mouseup', stopDrag, false);
}*/
        </script>
    </body>
</html>