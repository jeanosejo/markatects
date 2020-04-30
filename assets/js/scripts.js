angle = 0;
pos = 1;
vehicle = 'Pick a Car';
$(document).ready(function() {
  // var $validator = $('.wizard-card form').validate({
  //   rules: {
  //     budget: {
  //       required: true
  //     },
  //     trade: {
  //       required: true
  //     },
  //     credit: {
  //       required: true
  //     },
  //     status: {
  //       required: true
  //     },
  //     firstname: {
  //       required: true,
  //       minlength: 2
  //     },
  //     lastname: {
  //       required: true,
  //       minlength: 2
  //     },
  //     email: {
  //       required: true
  //     },
  //     phone: {
  //       required: true
  //     }
  //   },
  // });
	$('.wizard-card').bootstrapWizard({
    'tabClass': 'nav nav-pills',
    'nextSelector': '.btn-next',
    'previousSelector': '.btn-previous',
    onNext: function(tab, navigation, index) {
    	// var $valid = $('.wizard-card form').valid();
    	// if(!$valid) {
    	// 	$validator.focusInvalid();
    	// 	return false;
    	// }
      setButtonValue(index);
    },
    onInit : function(tab, navigation, index) {
      var $total = navigation.find('li').length;
      $width = 100 / $total;
      navigation.find('li').css('width', $width + '%');
    },
    onTabClick : function(tab, navigation, index) {
      // var $valid = $('.wizard-card form').valid();
      // if(!$valid){
      //   return false;
      // } else{
      //   return true;
      // }
    },
    onTabShow: function(tab, navigation, index) {
      var $total = navigation.find('li').length;
      var $current = index+1;
      var $wizard = navigation.closest('.wizard-card');
      if($current >= $total) {
        $($wizard).find('.btn-next').hide();
        $($wizard).find('.btn-finish').show();
      } else {
        $($wizard).find('.btn-next').show();
        $($wizard).find('.btn-finish').hide();
      }
      var move_distance = 100 / $total;
      move_distance = move_distance * (index) + move_distance / 2;
      $wizard.find($('.progress-bar')).css({width: move_distance + '%'});
      $wizard.find($('.wizard-card .nav-pills li.active a .icon-circle')).addClass('checked');
      setButtonValue(index);
    }
  });
  $('.spinner-btn').on('click', function (e) {
    figure = $('#spinner');
    children = figure[0].children;
    sign = $(this).data("sign");
    if (!sign) {
      angle = angle + 90;
      if (pos > 3) pos = 1; else pos += 1;
    } else {
      angle = angle - 90;
      if (pos < 2) pos = 4; else pos -= 1;
    }
    figure.css({"-webkit-transform": "rotateY("+angle+"deg)", "-moz-transform": "rotateY("+angle+"deg)", "transform": "rotateY("+angle+"deg)"});
    if (pos === 1) {
      setVehicleAttribute(children, 0, -120, -180, -240, 1, 0.5, 0.5, 0.5);
      vehicle = 'Pick a Car';
    } else if (pos === 2) {
      setVehicleAttribute(children, 30, -90, -210, -270, 0.5, 1, 0.5, 0.5);
      vehicle = 'Pick an SUV';
    } else if (pos === 3) {
      setVehicleAttribute(children, 0, -60, -180, -300, 0.5, 0.5, 1, 0.5);
      vehicle = 'Pick a Van';
    } else {
      setVehicleAttribute(children, -30, -90, -150, -270, 0.5, 0.5, 0.5, 1);
      vehicle = 'Pick a Truck';
    }
    setButtonValue(0);
  });
  $('[data-toggle="wizard-radio"]').click(function() {
    wizard = $(this).closest('.wizard-card');
    wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
    $(this).addClass('active');
    $(wizard).find('[type="radio"]').removeAttr('checked');
    $(this).find('[type="radio"]').attr('checked','true');
  });
});

function setVehicleAttribute(ch, v1, v2, v3, v4, o1, o2, o3, o4) {
  $(ch[0]).css({"-webkit-transform": "rotateY("+v1+"deg)", "-moz-transform": "rotateY("+v1+"deg)", "transform": "rotateY("+v1+"deg)", "opacity": o1});
  $(ch[1]).css({"-webkit-transform": "rotateY("+v2+"deg)", "-moz-transform": "rotateY("+v2+"deg)", "transform": "rotateY("+v2+"deg)", "opacity": o2});
  $(ch[2]).css({"-webkit-transform": "rotateY("+v3+"deg)", "-moz-transform": "rotateY("+v3+"deg)", "transform": "rotateY("+v3+"deg)", "opacity": o3});
  $(ch[3]).css({"-webkit-transform": "rotateY("+v4+"deg)", "-moz-transform": "rotateY("+v4+"deg)", "transform": "rotateY("+v4+"deg)", "opacity": o4});
}
function setButtonValue(index) {
  if (index === 0) {
    $("#btnNext").attr('value', vehicle);
  } else {
    $("#btnNext").attr('value', 'Next');
  }
}
