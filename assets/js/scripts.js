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
      var $current = index + 1;
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
      $('[name="vehicle"]').val("car");
    } else if (pos === 2) {
      setVehicleAttribute(children, 30, -90, -210, -270, 0.5, 1, 0.5, 0.5);
      vehicle = 'Pick an SUV';
      $('[name="vehicle"]').val("suv");
    } else if (pos === 3) {
      setVehicleAttribute(children, 0, -60, -180, -300, 0.5, 0.5, 1, 0.5);
      vehicle = 'Pick a Van';
      $('[name="vehicle"]').val("van");
    } else {
      setVehicleAttribute(children, -30, -90, -150, -270, 0.5, 0.5, 0.5, 1);
      vehicle = 'Pick a Truck';
      $('[name="vehicle"]').val("truck");
    }
    setButtonValue(0);
  });
  $('[data-toggle="radio-budget"]').click(function() {
    setRadioAttribute(this, 'radio-budget');
  });
  $('[data-toggle="radio-trade"]').click(function() {
    setRadioAttribute(this, 'radio-trade');
  });
  $('[data-toggle="radio-credit"]').click(function() {
    setRadioAttribute(this, 'radio-credit');
  });
  $('[data-toggle="radio-status"]').click(function() {
    setRadioAttribute(this, 'radio-status');
  });
  $("body").on("submit", "form", function(event) {
    event.stopPropagation();
    event.preventDefault();
    var data = $(this).serialize();
    console.log(data);
  });
});

(function($) {
  $.fn.cascadeSlider = function(opt) {
    var $this = this,
      itemClass = opt.itemClass || 'cascade-slider_item',
      // arrowClass = opt.arrowClass || 'cascade-slider_arrow',
      $item = $this.find('.' + itemClass),
      // $arrow = $this.find('.' + arrowClass),
      $arrow = $this.siblings(),
      itemCount = $item.length;

    var defaultIndex = 0;

    changeIndex(defaultIndex);

    $arrow.on('click', function() {
      var action = $(this).data('action'),
        nowIndex = $item.index($this.find('.now'));

      if(action == 'next') {
        if(nowIndex == itemCount - 1) {
          changeIndex(0);
        } else {
          changeIndex(nowIndex + 1);
        }
      } else if (action == 'prev') {
        if(nowIndex == 0) {
          changeIndex(itemCount - 1);
        } else {
          changeIndex(nowIndex - 1);
        }
      }

      var slider_item = $(".cascade-slider_item.now").data('vehicle');
      $('[name="vehicle"]').val(slider_item);
      if (slider_item === 'car') {
        vehicle = 'Pick a Car';
      } else if (slider_item === 'suv') {
        vehicle = 'Pick an SUV';
      } else if (slider_item === 'van') {
        vehicle = 'Pick a Van';
      } else {
        vehicle = 'Pick a Truck';
      }
      setButtonValue(0);
    });

    for (var i = 0; i < itemCount; i++) {
      $('.cascade-slider_item').each(function(i) {
        $(this).attr('data-slide-number', [i]);
      });
    }

    function changeIndex(nowIndex) {
      $this.find('.now').removeClass('now');
      $this.find('.next').removeClass('next');
      $this.find('.prev').removeClass('prev');
      if(nowIndex == itemCount -1) {
        $item.eq(0).addClass('next');
      }
      if(nowIndex == 0) {
        $item.eq(itemCount -1).addClass('prev');
      }

      $item.each(function(index) {
        if(index == nowIndex) {
          $item.eq(index).addClass('now');
        }
        if(index == nowIndex + 1 ) {
          $item.eq(index).addClass('next');
        }
        if(index == nowIndex - 1 ) {
          $item.eq(index).addClass('prev');
        }
      });
    }
  };
})(jQuery);

function setRadioAttribute(el, rb) {
  wizard = $(el).closest('.wizard-card');
  wizard.find('[data-toggle="'+rb+'"]').removeClass('active');
  $(el).addClass('active');
  $(el).find('[type="radio"]').attr('checked','true');
}
function setButtonValue(index) {
  if (index === 0) {
    $("#btnNext").attr('value', vehicle);
  } else {
    $("#btnNext").attr('value', 'Next');
  }
}
