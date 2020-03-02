<?php

$pageDir = "User";
$pageTitle = "User Delete";

$user = $data->getUserById($data->id); 

if(isset($_POST['delete'])){
    $user->UserID = $_POST['delete']
    $data->deleteUser([$user->UserID]);
    header("Location: ../List");
    exit();
}


require_once 'views/template/header.php';

?>


<div class="container-fluid">
  <div class="col-md-8 mx-auto">
    <div class="card p-3">
      <div class="card-body">
        <form method="post" action="User/Delete">
            <table class="table table-bordered table-sm">
                <thead class="table-info">
                    <tr>
                        <th>欄位</th>
                        <th>資料</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>會員ID</td>
                        <td><?= $user->UserID?></td>            
                    </tr>
                    <tr>
                        <td>姓名</td>
                        <td><?= $user->UserName?></td>            
                    </tr>
                    <tr>
                        <td>暱稱</td>
                        <td><?= $user->NickName?></td>            
                    </tr>
                    <tr>
                        <td>性別</td>
                        <td><?= $user->Gender?></td>            
                    </tr>
                    <tr>
                        <td>生日</td>
                        <td><?= $user->Birthdate?></td>            
                    </tr>
                    <tr>
                        <td>電話</td>
                        <td><?= $user->Phone?></td>            
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?= $user->Email?></td>            
                    </tr>
                    <tr>
                        <td>密碼</td>
                        <td><?= $user->Password?></td>            
                    </tr>
                    <tr>
                        <td>國家</td>
                        <td><?= $user->Country?></td>            
                    </tr>
                    <tr>
                        <td>郵遞區號</td>
                        <td><?= $user->PostalCode?></td>            
                    </tr>
                    <tr>
                        <td>地址</td>
                        <td><?= $user->City?><?= $user->District?><?= $user->Address?></td>            
                    </tr>
                    <tr>
                        <td>註冊日期</td>
                        <td><?= $user->CreateDate?></td>            
                    </tr>           
                    <tr>
                        <td>Coupon</td>
                        <td></td>
                        <!-- 之後再連Coupon資料 -->
                    </tr>
                </tbody>
            </table>
            
            <span class="float-right mt-4">
                <button type="submit" name="delete" class="btn btn-info">刪除</button>
                <a class="btn btn-secondary" href="/RollinAdmin/User/List/">返回表單</a>
            </span>
        </form>
      </div>
    </div>  
  </div>

</div>
  







<?php

require_once 'views/template/footer.php';

?>