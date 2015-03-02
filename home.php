<?php include('header.php') ?>

<?php 
#printUsers(); 
login_and_get();
?>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Account Details</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="assets/img/blank_portrait.png" class="img-circle"> </div>
              <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td>Username:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Full name:</td>
                      <td></td>
                    </tr>      
                    <tr>
                      <td>Email Address:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Date of Birth:</td>
                      <td></td>
                    </tr>
                    <tr>
                      <tr>
                        <td>Gender:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Physical Address:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Account Creation Date:</td>
                        <td></td>
                      </tr>
                      <td>Phone Number:</td>
                      <td>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="panel-footer">
            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">cancel</a>
            <span class="pull-right">
              <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-success">update <i class="fa fa-edit"></i></a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php') ?>
