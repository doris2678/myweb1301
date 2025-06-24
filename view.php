<?php
 switch ($_GET['do']??"title") {
    case 'title':
?>
<h3 style="text-align:center;">新增網站標題圖片</h3>
<hr>
<form action="">
    <div>
        <label for="">標題區圖片：</label>
        <input type="file" name="img">
    </div>
    <div>
        <label for="">標題區替代文字</label>
        <input type="text" name="text" id="">
    </div>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>



<?php
        echo "title";
        break;
    case 'ad':
        echo "ad";
        break;
    
    default:
        # code...
        break;
 }

?>