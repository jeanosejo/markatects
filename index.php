<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Markatects</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta name="viewport" content="width=device-width" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/styles.css" rel="stylesheet" />
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
  <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="wizard-container">
          <div class="card wizard-card" id="wizard">
            <form action="" method="">
              <div class="wizard-navigation">
                <div class="progress-with-circle">
                  <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4"></div>
                </div>
                <ul>
                  <li>
                    <a href="#type" data-toggle="tab">
                      <div class="icon-circle"><i class="ti-car"></i></div></a>
                  </li>
                  <li>
                    <a href="#budget" data-toggle="tab">
                      <div class="icon-circle"><i class="ti-money"></i></div></a>
                  </li>
                  <li>
                    <a href="#trade" data-toggle="tab">
                      <div class="icon-circle"><i class="ti-exchange-vertical"></i></div></a>
                  </li>
                  <li>
                    <a href="#credit" data-toggle="tab">
                      <div class="icon-circle"><i class="ti-credit-card"></i></div></a>
                  </li>
                  <li>
                    <a href="#status" data-toggle="tab">
                      <div class="icon-circle"><i class="ti-briefcase"></i></div></a>
                  </li>
                  <li>
                    <a href="#name" data-toggle="tab">
                      <div class="icon-circle"><i class="ti-user"></i></div></a>
                  </li>
                  <li>
                    <a href="#contact" data-toggle="tab">
                      <div class="icon-circle"><i class="ti-mobile"></i></div></a>
                  </li>
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane" id="type">
                  <div class="row">
                    <div class="col-md-12">
                      <h5 class="info-text"> Pick Your Type Of Vehicle</h5>
                      <p class="info-subtext">Please select the type of vehicle that you want</p>
                    </div>
                    <div class="col-md-12 slider_container">
                      <div class="cascade-slider_container" id="cascade-slider">
                        <div class="cascade-slider_slides">
                          <div class="cascade-slider_item" data-vehicle="car">
                            <img src="images/car.png" alt="">
                          </div>
                          <div class="cascade-slider_item" data-vehicle="suv">
                            <img src="images/suv.png" alt="">
                          </div>
                          <div class="cascade-slider_item" data-vehicle="van">
                            <img src="images/van.png" alt="">
                          </div>
                          <div class="cascade-slider_item" data-vehicle="truck">
                            <img src="images/truck.png" alt="">
                          </div>
                        </div>
                      </div>
                      <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev">◀</span>
                      <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next">▶</span>
                      <input type="hidden" name="vehicle" value="car">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="budget">
                  <h5 class="info-text">What Is Your Budget?</h5>
                  <p class="info-subtext">Please choose an estimate that will fit your budget</p>
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-4 col-md-offset-2 col-sm-6">
                        <div class="choice" data-toggle="radio-budget">
                          <input type="radio" name="budget" value="under" checked>
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Under $250 / month</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="choice" data-toggle="radio-budget">
                          <input type="radio" name="budget" value="250">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>$250 - 374 / month</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-4 col-md-offset-2 col-sm-6">
                        <div class="choice" data-toggle="radio-budget">
                          <input type="radio" name="budget" value="375">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>$375 - 500 / month</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="choice" data-toggle="radio-budget">
                          <input type="radio" name="budget" value="over">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Over $500 / month</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="trade">
                  <h5 class="info-text">Do You Have A Trade In?</h5>
                  <p class="info-subtext">If you have a vehicle that you want to trade with</p>
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-4 col-md-offset-2 col-sm-6">
                        <div class="choice" data-toggle="radio-trade">
                          <input type="radio" name="trade" value="yes">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Yes</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="choice" data-toggle="radio-trade">
                          <input type="radio" name="trade" value="no">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>No</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="choice" data-toggle="radio-trade">
                          <input type="radio" name="trade" value="unsure">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Unsure</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="credit">
                  <h5 class="info-text">What Is Your Estimated Credit Rating?</h5>
                  <p class="info-subtext">Please choose your estimated credit card rating</p>
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-4 col-sm-6">
                        <div class="choice" data-toggle="radio-credit">
                          <input type="radio" name="credit" value="good">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Good (Over 650)</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="choice" data-toggle="radio-credit">
                          <input type="radio" name="credit" value="fair">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Fair (550-650)</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="choice" data-toggle="radio-credit">
                          <input type="radio" name="credit" value="poor">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Poor (Under 550)</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-4 col-md-offset-2 col-sm-6">
                        <div class="choice" data-toggle="radio-credit">
                          <input type="radio" name="credit" value="bankrupt">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Current Bankruptcy</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-sm-offset-3">
                        <div class="choice" data-toggle="radio-credit">
                          <input type="radio" name="credit" value="unsure">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>No Credit / Unsure</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="status">
                  <h5 class="info-text">What Is Your Employment Status?</h5>
                  <p class="info-subtext">Please choose your current employment status</p>
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-4 col-sm-6">
                        <div class="choice" data-toggle="radio-status">
                          <input type="radio" name="status" value="employed">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Employed</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="choice" data-toggle="radio-status">
                          <input type="radio" name="status" value="self">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Self-Employed</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="choice" data-toggle="radio-status">
                          <input type="radio" name="status" value="student">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Student</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-4 col-md-offset-2 col-sm-6">
                        <div class="choice" data-toggle="radio-status">
                          <input type="radio" name="status" value="retired">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Retired / Pension</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-sm-offset-3">
                        <div class="choice" data-toggle="radio-status">
                          <input type="radio" name="status" value="other">
                          <div class="card card-checkboxes card-hover-effect">
                            <p>Other</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="name">
                  <h5 class="info-text">What Is Your Name?</h5>
                  <p class="info-subtext">Please enter your first and last name</p>
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-5 col-md-offset-1 col-sm-6">
                        <div class="form-group">
                          <label>First Name</label>
                          <input type="text" class="form-control" placeholder="First Name" name="firstname">
                        </div>
                      </div>
                      <div class="col-md-5 col-sm-6">
                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="contact">
                  <h5 class="info-text">Best Way To Contact You?</h5>
                  <p class="info-subtext">Please enter your primary email address and phone number</p>
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="col-md-5 col-md-offset-1 col-sm-6">
                        <div class="form-group">
                          <label>Email Address</label>
                          <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                      </div>
                      <div class="col-md-5 col-sm-6">
                        <div class="form-group">
                          <label>Phone Number</label>
                          <input type="text" class="form-control" name="phone" placeholder="Primary Phone Number">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="wizard-footer">
                <input type="button" class="btn btn-previous btn-default btn-wd" name="previous" value="Previous" />
                <input type="button" class="btn btn-next btn-fill btn-danger btn-wd" name="next" value="Pick a Car" id="btnNext" />
                <input type="submit" class="btn btn-finish btn-fill btn-success btn-wd" name="finish" value="Get Pre-Approval" data-toggle="modal" data-target="#approvalModal" />
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="approvalModal" tabindex="-1" role="dialog">
    <div class="modal-dialog approval-modal" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="check-container">
                <i class="ti-check"></i>
              </div>
              <h5 class="congrats-title">Congratulations!</h5>
              <p>You are now Qualified for Pre-Approval</p>
              <p class="terms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success btn-round" data-dismiss="modal">Continue</button>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
  <script src="assets/js/scripts.js" type="text/javascript"></script>
  <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
  <script>
    $('#cascade-slider').cascadeSlider({
      
    });
  </script>
</body>
</html>
