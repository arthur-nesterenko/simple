var Register = (function($,config)
{
    /**
     * for button validate
    */
    config.notValid = false;


    return{
        init: init
    };
    
    
  

    function init() {
        actionRegister();
        actionLogin();
        validateRegister();
    }
    
    function actionRegister() {

        $('#registerSubmit').on('click',function(e)
        {
            e.preventDefault();
          
           $('#regiserForm [required]').trigger('blur');
            if (config.notValid)
            {

                $(this).prop('disabled','true');
                 return false;
            }
            

            var userData = $('#regiserForm').serialize();

             $.post(config.ajax_register,userData,function(response)
             {
                console.log( response );
             },'json');
        })

    }

    /**
     *
     * @param $element jQuery object
     */
    function onActionFocus($element) {
        $element.removeClass();
         $('#registerSubmit').prop('disabled',false);
          config.notValid = false;
    }

    /**
     *
     * @param $element jQuery object
     */
   function onActionBlur($element)
    {
        var name  = $element.prop('name');
        var danger = false;
         config.notValid = false;
        var info = {
            timeout : 1500,
            pos     : 'top-center'
        }
        switch( name)
        {
            case 'username':
                case 'lastname':
                    {
                       if( $element.val().length == 0 )
                       {
                           $element.addClass(  'uk-form-danger' );
                           $element.prop('placeholder','Поле не может быть пустым ! ');
                           info.status = 'danger';
                           info.message = 'Поле не может быть пустым !';
                           danger = true;
                       }
                       else
                           {
                               $element.addClass(  'uk-form-succes' );
                           }
                           break;
                    }
            case 'user_role':{ console.log('Important field'); break;}
            case 'password':
                {
                    if( $element.val().length == 0  )
                    {
                        $element.addClass(  'uk-form-danger' );
                        $element.prop('placeholder','Поле не может быть пустым ! ');
                        info.status = 'danger';
                        info.message = 'Поле не может быть пустым !';
                        danger = true;
                    }
                    else if(  $element.val().length <= 6 )
                    {
                        $element.addClass(  'uk-form-danger' );
                        info.message = 'Пароль должен быть более 6 символов! ';
                        danger = true;
                    }
                    else
                        {
                            $element.addClass(  'uk-form-success' );
                        }
                    break;
                }
            case 'repeat_password':
            {
                if( $element.val() !=  $('input[name="password"]').val() )
                {
                        $element.addClass(  'uk-form-danger' );
                        info.status = 'danger';
                        info.message = 'Пароль не совпадают';
                        danger = true;
                }
                break
            }
            case 'email':
            {
                if( !validateEmail($element.val()) )
                {
                        $element.addClass(  'uk-form-danger' );
                        info.status = 'danger';
                        info.message = 'Не правильный Email ';
                        danger = true;
                }
                else
                {
                    $element.addClass(  'uk-form-succes' );
                }
                break;
            }


        }

        if(danger)
        {
             config.notValid =  true;
             UIkit.notify(info);
        }
           



    }
    function validateRegister()
    {
        $('#regiserForm').on('focus blur','[required]',function(e)
        {
            var $this = $(this);
            switch(e.type)
            {
                case 'focusin':
                        case 'focus' : onActionFocus($this); break;
                case 'blur':
                    case 'focusout': onActionBlur($this); break;
            }
        })
    }
    function actionLogin()
    {
        console.log('action for login ')
    }


function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}


    
}(jQuery,CONFIG))