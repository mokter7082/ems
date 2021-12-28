<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container"><br>
  <a href="login.php" class="btn btn-primary">login</a>
  <h2 class="text-center">Welcome to your Employee manmagme</h2><br>
<div class="row">
  <div class="col-md-4 offset-md-4">
    <form action="" method="post">
      <table class="table table-bordered">
        <tr>
          <td colspan="2" class="text-center font-weight-bold"><label for="">Employee Information</label></td>
        </tr>
        <tr>
          <td><label for="">Designation</label></td>
          <td colspan="1">
                <select class="form-control Chose" name="Chose">
                  <option value="">Select</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                </select>
          </td>
        </tr>
        <tr>
          <td><label for="">ID</label></td>
          <td><input type="text" name="roll" class="form-control" pattern="[0-9]{5}" placeholder="Please Enter valid Id"/></td>
        </tr>
        <tr>
           <td class="text-center" colspan="2"><input type="submit" name="submit" value="Show Info" class="btn btn-primary"/></td>
        </tr>
      </table>
    </form>
  </div>
</div>
</div>




  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
