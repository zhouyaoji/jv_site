/*
  function show_text(e)
  {
    var body_text = document.getElementById("body_text");
    var attr_down = { height: { from: 0, to: 285 } };
    var attr_up =   { height: { from: 285, to: 0 }};
    var anim_up = new YAHOO.util.Anim('body_text',attr_up,.5);
    anim_up.animate();
      var text_container = e.target.getAttributeNode('id').value;
   var anim_down = new YAHOO.util.Anim('body_text',attr_down,1);
    setTimeout(function() {
      if(text_container=='home_link'){
        body_text.innerHTML =  home;
      }else if(text_container=='contact_link'){
        body_text.innerHTML = contact;
      }else if(text_container=='events_link'){
        body_text.innerHTML = events;
      }else if(text_container=='clients_link'){
        body_text.innerHTML = clients;
      }else if(text_container=='about_link'){
        body_text.innerHTML = about;
      }
      anim_down.animate()},500);

}
  YAHOO.util.Event.addListener("home_link", "click", show_text);
  YAHOO.util.Event.addListener("contact_link", "click", show_text);
  YAHOO.util.Event.addListener("events_link", "click", show_text);
  YAHOO.util.Event.addListener("clients_link", "click", show_text);
  YAHOO.util.Event.addListener("about_link", "click", show_text);
*/

