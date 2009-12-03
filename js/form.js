<script type='text/javascript'>
errors="";
function checkEmail(email) {
  var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
  if (!filter.test(email)) {
    return false;
  }else{
   return true;
 }
}
$("#send_info").click(function(){
  var name = $("#name").val();
  var email = $("#email").val();
  var message = $("#message").val();
  if(typeof(name)=="undefined" || !isNaN(parseInt(name)) || name.length<1 ){
    errors += "<li>Please enter a valid name.</li>";
  }  
  if(!checkEmail(email)){
    errors += "<li>Email is invalid.</li>"
  }
  if(typeof(message)=="undefined" || message.length<20){
    errors += "<li>Please add a message of 20 or more characters.</li>";
  }
  if(errors.length>0){
    error_message = "";
    error_message += errors + "</ol>";
    $("#error").html(error_message);
    $("#error").css("display","block");
    $("#error").dialog({
      title: "Please fix the following errors and send again:",
			bgiframe: true,
			width: 400,
			height: 100,
			modal: true,
      draggable: true,
      autoOpen: false
    });
    $("#error").dialog('open');
  }else{
    var args = $("form").serialize();
    $.post("form.php", args,
    function(data){
      if(data==""){
        $("#success").html("Name: " + name + "<br/>Email: " + email + "<br/>Message:<br/>" + message);
        $("#success").dialog({
          title: "Thank you. You will be contacted shortly.",
          bgiframe: true,
			    width: 400,
			    height: 100,
			    modal: true,
          draggable: true,
          autoOpen: false
        });
        $("#success").dialog('open');
        window.location = "http://zhouyaoji.com/julesvano/";
      }else{
        $("#error").html(data);
         $("#error").dialog({
          title: "The following errors occured:",
          bgiframe: true,
			    width: 400,
			    height: 100,
			    modal: true,
          draggable: true,
          autoOpen: false
        });
        $("#error").dialog('open');
     }
    }, "text");
  }    
  errors = "";
  error_message="";
 });
</script>
