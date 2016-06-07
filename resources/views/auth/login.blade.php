
<link rel="stylesheet" href="/login.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">

<form class="login" method="POST" action="{{url('login')}}">
{!!csrf_field()!!}
  <fieldset>

  	<legend class="legend">Selamat Datang...</legend>

    <div class="input">
    	<input type="text" placeholder="Username" name="username" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>

    <div class="input">
    	<input type="password" placeholder="Password" name="password" required />
      <span><i class="fa fa-lock"></i></span>
    </div>

    <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>

  </fieldset>
</form>

  <!-- <div class="feedb  ack">
  	Login Berhasil <br />
    redirecting...
  </div>

</form> -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>

$( ".input" ).focusin(function() {
  $( this ).find( "span" ).animate({"opacity":"0"}, 200);
});

$( ".input" ).focusout(function() {
  $( this ).find( "span" ).animate({"opacity":"1"}, 300);
});

// $(".login").submit(function(){
//   $(this).find(".submit i").removeAttr('class').addClass("fa fa-check").css({"color":"#fff"});
//   $(".submit").css({"background":"#2ecc71", "border-color":"#2ecc71"});
//   $(".feedback").show().animate({"opacity":"1", "bottom":"-80px"}, 400);
//   $("input").css({"border-color":"#2ecc71"});
//   return true;
// });

</script>
