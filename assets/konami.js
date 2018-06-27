// Konami and more

// KONAMI CODE
	  var audio1 = new Audio('konami.mp3');
      $(document).ready(function() {
        var keys = [];
        var code = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
		$("#konami").hide();
        $(document).keydown(function(keyEvent) {
          keys.push(keyEvent.keyCode);
          if ( keys.length > code.length ) { keys.shift(); }
          if ( keys.toString() == code.toString() ) {
            $('#konami').slideDown('slow');
			audio1.play();
          }
        });
      });
	  
	  // Elliot code
      var audio = new Audio('alele.mp3');
      $(document).ready(function() {
        var keys = [];
        var code = [69, 76, 76, 73, 79, 84];
		$("#elliot").hide();
        $(document).keydown(function(keyEvent) {
          keys.push(keyEvent.keyCode);
          if ( keys.length > code.length ) { keys.shift(); }
          if ( keys.toString() === code.toString() ) {
            $('#elliot').slideDown('slow');
			audio.play();
          }
        });
      });
	  
	  // Thomas code
      $(document).ready(function() {
        var keys = [];
        var code = [84, 72, 79, 77, 65, 83];
        $(document).keydown(function(keyEvent) {
          keys.push(keyEvent.keyCode);
          if ( keys.length > code.length ) { keys.shift(); }
          if ( keys.toString() == code.toString() ) {
            window.location.href = 'http://yaypixxo.com/tthhoommaass/';
          }
        });
      });