<?php
  require_once('core/init.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>USPTO Trademark Deadlines Calculator</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom core CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">USPTO Trademark Deadlines Calculator</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a data-toggle="modal" href="#myModal">About</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">

      <div class="row"><div class="col-sm-12"><p><?php echo $main->msg; ?></p></div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"></div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4"><h4>Input the registration date</h4></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-2"></div>
      </div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>

      <form method="post" action="">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">Registration Month</div>
        <div class="col-sm-4"><?php $main->registration_month(); ?></div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">Registration Day</div>
        <div class="col-sm-4"><?php $main->registration_day(); ?></div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">Registration Year</div>
        <div class="col-sm-4"><?php $main->registration_year(); ?></div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"><input type="submit" name="submit" class="btn btn-default pull-right" value="Calculate"></div>
        <div class="col-sm-2"></div>
      </div>
      </form>

      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4"><h4>Results</h4></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-2"></div>
      </div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">First Section 8 - Earliest date for filing</div>
        <div class="col-sm-2"><?php $main->section8_earliest(); ?></div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">First Section 8 - Normal due date for filing</div>
        <div class="col-sm-2"><?php $main->section8_normal(); ?></div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">First Section 8 - Last day of the grace period (additional fees)</div>
        <div class="col-sm-2"><?php $main->section8_last(); ?></div>
        <div class="col-sm-2"></div>
      </div>


      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">First Renewal - Earliest date for filing (combined Section 8&9)</div>
        <div class="col-sm-2"><?php $main->renewal_earliest(); ?></div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">First Renewal - Normal due date for filing (combined Section 8&9)</div>
        <div class="col-sm-2"><?php $main->renewal_normal(); ?></div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-6">First Renewal - Last day of the grace period (combined Section 8&9, additional fees)</div>
        <div class="col-sm-2"><?php $main->renewal_last(); ?></div>
        <div class="col-sm-2"></div>
      </div>

      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>
      <div class="row"><div class="col-sm-12"> &nbsp; </div></div>


      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">USPTO Trademark Deadlines Calculator</h4>
            </div>
            <div class="modal-body">
              <p>This service is provided <i>as is</i> and without any warranty.</p>
              <p>
                You can send direct GET requests with the registration date, with the format YYYY-MM-AA:
                <br/>
                <a href="http://uspto.dthlabs.com?regdate=2000-01-01">http://uspto.dthlabs.com?regdate=2000-01-01</a>
              </p>
              <p>Last reviewed on Aug 06, 2016</p>
              <p>Developed by dthlabs.com</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
    </div><!-- /.container -->

    <footer>
      <div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
          <div class="container">
            <div class="navbar-text pull-left">
              <p>All rights reserved, 2016 - dthlabs.com</p>
            </div>
          </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://www.alterland.net/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://dev/x/accounting/assets/js/custom.js"></script>
  </body>
</html>
