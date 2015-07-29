<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8" />
  <title>个人门磁观点-丁盯官网</title>
  <?php require_once('topHeader.php') ?>
</head>
<body class="mobile">
  <?php require_once('backHeader.php') ?>
  <div class="container">
    <div class="content">
      <div class="pro-eval">
        <div class="pic">
          <h3> <em>*</em>上传图片</h3>
         <!-- 
          <div class="upload">
           <h3>
              上传图片
            </h3>
            <div class="cur">
              <img src="<?php echo base_url().'static/' ?>images/temp/img_1.png" />
            </div>
            <div class="hint">
              <p>图片尺寸：500X500像素</p>
              <?php echo form_open_multipart('pc/opinion/upload_prodpic');?> 
              <input type="file" name="userfile" size="20" />
              <input type="submit" value="点击上传图片" style="width: 100%;display: block;padding: 12px 0;font-size: 20px;color: #333;background-color: #38c8a4;"/>
              </form>
            </div>
          </div> -->
          <form action="<?php echo site_url('pc/opinion/upload_prodpic') ?>" enctype="multipart/form-data" method="post" >
            <input type="file" name="uploadImg"  />
          </form>
          <ul class="imglist">
          <li>
            <img src="/static/mobile/images/p0.jpg" style="width: 180px;height: 180px;"/>
            <a href="" class="add"></a>
          </li>

          <?php
            if(!empty($opinion)){
            for($i=0;$i<count($pictures);$i++){
          ?>
          <li>
            <img src="<?php echo base_url().$pictures[$i];?>" style="width: 180px;height: 180px;"/>
            <a href="" class="del"></a>
          </li>
          <?php
            }
            }
          ?>

          </ul>
      </div>
      <form action="<?php echo site_url('pc/opinion/do_modify') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <div class="pro-grade">
          <div class="stars">
            <h3> <em>*</em>
              产品打分
            </h3>
            <div class="row">
              <div class="col_l">外观</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1 <?php if(isset($stars[0]) && $stars[0] == '1') echo 'checked';?>"></label>
                  <label  class="star star_2 <?php if(isset($stars[0]) && $stars[0] == '2') echo 'checked';?>"></label>
                  <label  class="star star_3 <?php if(isset($stars[0]) && $stars[0] == '3') echo 'checked';?>"></label>
                  <label  class="star star_4 <?php if(isset($stars[0]) && $stars[0] == '4') echo 'checked';?>"></label>
                  <label  class="star star_5 <?php if(isset($stars[0]) && $stars[0] == '5') echo 'checked';?>"></label>
                  <input  id="star" type="hidden" name="star1" value=""/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col_l">稳定性</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1 <?php if(isset($stars[1]) && $stars[1] == '1') echo 'checked';?>"></label>
                  <label  class="star star_2 <?php if(isset($stars[1]) && $stars[1] == '2') echo 'checked';?>"></label>
                  <label  class="star star_3 <?php if(isset($stars[1]) && $stars[1] == '3') echo 'checked';?>"></label>
                  <label  class="star star_4 <?php if(isset($stars[1]) && $stars[1] == '4') echo 'checked';?>"></label>
                  <label  class="star star_5 <?php if(isset($stars[1]) && $stars[1] == '5') echo 'checked';?>"></label>
                  <input  id="star" type="hidden" name="star2" value=""/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col_l">智能</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1 <?php if(isset($stars[2]) && $stars[2] == '1') echo 'checked';?>"></label>
                  <label  class="star star_2 <?php if(isset($stars[2]) && $stars[2] == '2') echo 'checked';?>"></label>
                  <label  class="star star_3 <?php if(isset($stars[2]) && $stars[2] == '3') echo 'checked';?>"></label>
                  <label  class="star star_4 <?php if(isset($stars[2]) && $stars[2] == '4') echo 'checked';?>"></label>
                  <label  class="star star_5 <?php if(isset($stars[2]) && $stars[2] == '5') echo 'checked';?>"></label>
                  <input  id="star" type="hidden" name="star3" value=""/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col_l">功耗</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1 <?php if(isset($stars[3]) && $stars[3] == '1') echo 'checked';?>"></label>
                  <label  class="star star_2 <?php if(isset($stars[3]) && $stars[3] == '2') echo 'checked';?>"></label>
                  <label  class="star star_3 <?php if(isset($stars[3]) && $stars[3] == '3') echo 'checked';?>"></label>
                  <label  class="star star_4 <?php if(isset($stars[3]) && $stars[3] == '4') echo 'checked';?>"></label>
                  <label  class="star star_5 <?php if(isset($stars[3]) && $stars[3] == '5') echo 'checked';?>"></label>
                  <input  id="star" type="hidden" name="star4" value=""/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pro-view">
        <h3> <em>*</em>
          产品观点
        </h3>
        <div class="inputbox">
          <textarea name="web_description" style="height:250px;">
            <?php if(isset($opinion['view'])) echo trim(strip_tags($opinion['view']));?>
          </textarea>
        </div>
      </div>
      <div class="finish">
        <input type="submit" class="btn btn-a" value="完&nbsp;&nbsp;成">
      </div>
    </form>
  </div>
</div>

 <div class="footer">
    <div class="container">
      <div class="contact"><img src="<?php echo base_url()?>static/mobile/images/contact.png"></div>
      <p class="center">Copyright © 2014  丁盯智能  京ICP备14039007号-1</p>
    </div>
  </div>
<script type="text/javascript" src="<?php echo base_url().'static/' ?>script/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'static/' ?>script/jquery.rotate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'static/' ?>script/m/script.js"></script>
</body>
</html>