<h1>更新校園映像資料</h1>
<hr>
<form action="./api/upload.php" method="POST" enctype="multipart/form-data">
  <table>
    <tr>
      <td>校園映像圖片:</td>
      <td>
        <input type="file" name="img">
      </td>
    </tr>
  </table>
  <div>
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <input type="hidden" name="table" value="Image">
    <input type="submit" value="更新">
    <input type="reset" value="重置">
  </div>
</form>