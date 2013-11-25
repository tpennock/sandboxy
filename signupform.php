<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
    <form action="http://thedentalpress.us7.list-manage1.com/subscribe/post?u=90fa7c9410dafb8f38a4e9fbe&amp;id=6c9c995397" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <fieldset class="uk-form">
            <div class="mc-field-group uk-form-row">
                <label for="mce-EMAIL" class="uk-form-label">Email Address</label>
                <input type="email" value="" name="EMAIL" class="required email uk-width-1-1" id="mce-EMAIL" placeholder="email address">
            </div>
            <div class="uk-form-row">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button uk-button uk-button-expand">
            </div>
            <div class="uk-form-row">
                <div id="mce-responses" class="clear">
                    <small class="response uk-text-danger" id="mce-error-response" style="display:none"></small>
                    <small class="response uk-text-success" id="mce-success-response" style="display:none"></small>
                </div>
            </div>
        </fieldset>
  </form>
</div>
<script type="text/javascript">
  var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
  try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
          if (this.readyState == 'complete') mce_preload_check();
      }    
  }
}
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
head.appendChild(script);
var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#b85f66;} #mc_embed_signup div.mce_inline_error{font-size: .9em; margin: .5em 0; padding: 0; z-index: 1; color:#b85f66;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = jQuery("#mc-embedded-subscribe-form").validate(options);
      jQuery("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://thedentalpress.us7.list-manage.com/subscribe/post-json?u=90fa7c9410dafb8f38a4e9fbe&id=6c9c995397&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
      beforeSubmit: function(){
        jQuery('#mce_tmp_error_msg').remove();
        jQuery('.datefield','#mc_embed_signup').each(
            function(){
                var txt = 'filled';
                var fields = new Array();
                var i = 0;
                jQuery(':text', this).each(
                    function(){
                        fields[i] = this;
                        i++;
                    });
                jQuery(':hidden', this).each(
                    function(){
                        var bday = false;
                        if (fields.length == 2){
                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                        if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                          this.value = '';
                                      } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                          this.value = '';
                                      } else {
                                       if (/\[day\]/.test(fields[0].name)){
                                           this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
                                       } else {
                                           this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
                                       }
                                   }
                               });
});
return mce_validator.form();
}, 
success: mce_success_cb
};
jQuery('#mc-embedded-subscribe-form').ajaxForm(options);


});
}
function mce_success_cb(resp){
    jQuery('#mce-success-response').hide();
    jQuery('#mce-error-response').hide();
    if (resp.result=="success"){
        jQuery('#mce-'+resp.result+'-response').show();
        jQuery('#mce-'+resp.result+'-response').html(resp.msg);
        jQuery('#mc-embedded-subscribe-form').each(function(){
            this.reset();
        });
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                jQuery('#mce-'+resp.result+'-response').show();
                jQuery('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = jQuery(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = jQuery(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = jQuery(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = jQuery().parent(input_id).get(0);
                }
                if (f){
                    jQuery(f).append(html);
                    jQuery(input_id).focus();
                } else {
                    jQuery('#mce-'+resp.result+'-response').show();
                    jQuery('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            jQuery('#mce-'+resp.result+'-response').show();
            jQuery('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
<!--End mc_embed_signup-->