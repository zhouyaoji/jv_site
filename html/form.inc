 <form name='contact_info'>
 <p class="warning">You must have JavaScript enabled to use this form</p>
 <fieldset>
   <div id='error'></div>
   <div id='success'></div>
   <legend>Your Contact Details</legend>
   <div id='form_name'>
     <label for='name'><em>*</em> Name:</label>
     <input name='name' id='name' type='text' size='23'/>
   </div>
   <div id='form_email'>
     <label for='email'><em>*</em> Email:</label>
     <input name='email' id='email' type='text' size='23'>
   </div>
   <div id='form_message'>
     <br/>
     <label for='message'><em style='color: red;'>*</em> Message:</label>
     <textarea name='message' id='message' rows='3' cols='33'></textarea>
  </div>
 </fieldset>
<fieldset>
 <div>
   <legend>Mailing List</legend>
   <span id='mail_list_label' class='small-font' style='padding-bottom: 5px;'>Want to know about future events and news?</span>
   <input type='radio' name='mailing_list' value='true' checked /><span class='small-font'>Yes</span>
   <input type='radio' name='mailing_list' value='false'/><span class='small-font'>No</span><br/>
 </fieldset>
</form> 
  <button id='send_info'>Send</button>
 <script type='text/javascript'>
  $('.warning').remove();
 </script>
 </div>
