<h1>新增校園映像資料</h1>
<hr>
<form action="./api/add.php" method="POST" enctype="multipart/form-data">
  <table>
    <tr>
      <td>校園映象資料圖片:</td>
      <td>
        <input type="file" name="img">
      </td>
    </tr>
  </table>
  <div>
    <input type="submit" value="新增">
    <input type="hidden" name="table" value="Image">
    <input type="reset" value="重置">
  </div>
</form>