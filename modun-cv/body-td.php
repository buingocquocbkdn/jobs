<?php session_start(); ?>
<h1>Công ty của bạn</h1>
<h3>Vui lòng điền thông tin về công ty của bạn. Sau đó hãy chờ đợi, chúng tôi sẽ xác nhận và công ty của bạn sẽ sớm có mặt trên website của chúng tôi!</h3>
<div class="log">
	<div class="content2 w3agile">
   
		<form action="" method="post" id="cv"  enctype="multipart/form-data">
			<input type="text" name="name_com" value="" placeholder="Tên công ty" />
			<input type="text" name="mota" value=""  placeholder="Mô tả về công ty bạn"/>
			<input type="email" name="email" value="" placeholder="Email công ty"/>
			<input type="text" name="lienhe" value="" placeholder="Website công ty"/>
			<input type="text" name="fb" value="" placeholder="Facebook (nếu có)"/>
			<input type="text" name="tw" value="" placeholder="Twitter (nếu có)"/>
			<input type="text" name="pt" value="" placeholder="Pinterest (nếu có)"/>
          	<p>
			<label>Avatar</label>
            <input type="file"  name="hinhanh" value="" />
            </p>
			<input type="submit" class="register" name ="submit"value="Submit">
		</form>
	</div>
</div>
