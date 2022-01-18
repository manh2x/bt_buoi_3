<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <?php
$a=$b=$c=$d=$result="";

if(isset($_POST['click'])){
    $name=$_POST['name'];
    $plane=$_POST['plane'];
    $address=$_POST['address'];
    $number=$_POST['number'];
    if($name==""){
        $a="vui lòng nhập tên";
    }
    if($number==""){
        $b="vui lòng nhập SĐT";
    }
    if($address==""){
        $c="vui lòng nhập address";
    }
    if($plane==""){
        $d="vui lòng chọn phương tiện";
    }
    else{
        $result="Bạn đăng ký thành công";
    }
}
   ?>
    <h2 style="color: green;" align="center">Đăng ký du lịch</h2>
    <div style="background-color: rgb(23, 202, 104); width: 500px; margin-left: 400px;">
        <form action="#" method="post">
          
            <table border="1">
                <tr>
                    <td>
                        <label for="name">Họ và tên</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name" placeholder="Nhập họ và tên" >
                        <label style="color: red;"><?php echo $a; ?></label>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        <label for="address">Địa chỉ</label>
                    </td>
                    <td>
                        <input type="text" name="address" id="address" placeholder="Nhập địa chỉ"> 
                        <label style="color: red;"><?php echo $c; ?></label>
                    </td>
                   
                </tr>
                <tr>
                    <td>
                        <label for="number">Phone number</label>
                    </td>
                    <td>
                        <input type="number" name="number" id="number" placeholder="Nhập số điện thoại">
                        <label style="color: red;"><?php echo $b; ?></label>
                    </td>
                   
                </tr>
                <tr>
                    <td>
                        <label for="vietnam">Khách Việt Nam</label>
                    </td>
                    <td>
                        <input type="checkbox" name="vietnam" id="vietnam" value="Việt Nam">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tour">Chọn tour</label>
                    </td>
                    <td>
                        <select name="tour" id="tour">
                            <optgroup label="Miền Bắc">
                                <option value="Bái Đính-Tràng An-Tam Trúc">Bái Đính-Tràng An-Tam Trúc(Ninh Bình-Hà Nam)</option>
                                <option value="Tam Đảo-Sapa-Mộc châu">Tam Đảo-Sapa-Mộc châu(Vĩnh Phúc-Lào cai-Sơn La)</option>
                            </optgroup>
                          
                        </select>
                        
                    </td>
                   
                </tr>
                <tr>
                    <td>
                        <p>Phương Tiện</p>
                    </td>
                    <td>
                        <input type="radio" id="plane" name="plane" value="Máy Bay">
                        <label for="plane">Máy bay</label>
                        <input type="radio" id="car" name="plane" value="Ô tô">
                        <label for="car">Ô tô</label>
                        
                        <label style="color: red;"><?php echo "  --".$d; ?></label>
                    </td>
                   
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset style="width: 400px;" class="center">
                            <legend>Số Người tham gia</legend>
                            <div>
                                <label for="human">Người lớn</label>
                                <input type="number" name="old" id="old" style="width:50px">
                                <label for="young">Trẻ em</label>
                                <input type="number" name="young" style="width:50px">
                            </div>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="desc">Ghi chú thêm</label>
                    </td>
                    <td>
                        <textarea name="desc" id="desc" name="desc" cols="50" rows="4"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >
                        <div align="center">
                            <input type="submit" value="Đăng ký" name="click" id="form-btn" onclick="dang_ky()">
                        </div>
                    </td>
                </tr>
                <tr>
                   <td colspan="2" align="center"> <label style="color: red; font-size:20px"> <?php  echo $result; ?></label></td>
                </tr>
            </table>
           
        </form>
    </div>
</body>

<script>
    function dang_ky() {
        var name=document.getElementById('name');
        var address=document.getElementById('address');
        var number=document.getElementById('number');
        var plane=document.getElementById('plane');
        if(name==address==number==plane==""){
            alert("Đăng ký thất bại(thiếu thông tin)");

        }
        else{
            alert("Bạn đã đăng ký thành công");
        }

    }
</script>
</body>

</html>