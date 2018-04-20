<html>
<head>
</head>
<body>
<h1>Nhận dữ liêu từ radio button</h1>
<form action="process_data_get_radio_button.php" method="POST">

    <!-- Multiple Radios (inline): Giới tính -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="gender">Giới tính</label>
        <div class="col-md-4">
            <label class="radio-inline" for="gender-0">
                <input type="radio" name="gender" id="gender-0" value="1" checked="checked">
                Nam
            </label>
            <label class="radio-inline" for="gender-1">
                <input type="radio" name="gender" id="gender-1" value="2">
                Nữ
            </label>
        </div>
    </div>

    <br>
    <br>
    <input type="submit" name ="submit_login" value ="Gửi thông tin">


</form>
</body>
</html>
