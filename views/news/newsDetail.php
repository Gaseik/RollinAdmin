<?php

$pageDir = "News";
$pageTitle = "News Detail";

$Getnews = $data->getNewsByID($data->id);

require_once 'views/template/header.php';
$news = new News();
?>
<div class="container-fluid">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>欄位</th>
              <th>資料</th>
            </tr>
          </thead>
          <tbody>
            
            <tr>
              <td>NewsID</td>
              <td><?= $Getnews->NewsID?></td>            
            </tr>

            <tr>
              <td>Title</td>
              <td><?= $Getnews->Title?></td>            
            </tr>

            <tr>
              <td>CreateDate</td>
              <td><?= $Getnews->CreateDate?></td>            
            </tr>

            <tr>
              <td>UpdateDate</td>
              <td><?= $Getnews->UpdateDate?></td>            
            </tr>

            <tr>
              <td>Description</td>
              <td><?= $Getnews->Description?></td>            
            </tr>     

          </tbody>
        </table>
      
      </div>
    </div>  
  </div>

</div>
<?php

require_once 'views/template/footer.php';

?>