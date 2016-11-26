var Register = (function($,config)
{
    return{
        init: init
    };
    
    
    function init() {
        actionRegister();
        actionLogin();
        validateRegister();
        console.log('rep');
    }
    
    function actionRegister() {

        $('#registerSubmit').on('click',function(e)
        {
            e.preventDefault();
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
    }

    /**
     *
     * @param $element jQuery object
     */
   function onActionBlur($element)
    {
        var name  = $element.prop('name');

        switch( name)
        {
            case 'username':
                case 'lastname':
                    {
                       if( $selector.val().length == 0 )
                       {
                           $element.addClass(  'uk-form-danger' );
                           $element.prop('placeholder','Поле не может быть пустым ! ');
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
                    if( $selector.val().length == 0  )
                    {
                        $element.addClass(  'uk-form-danger' );
                        $element.prop('placeholder','Поле не может быть пустым ! ');
                    }
                    else if(  $selector.val().length <= 6 )
                    {
                        $element.addClass(  'uk-form-danger' );
                        $element.prop('placeholder','пароль должен быть более 6 символов! ');
                    }
                    else
                        {
                            $element.addClass(  'uk-form-success' );
                        }
                    break;
                }
            case 'repeat_password':
            {
                if( $element.val() !=  $('input[name="repeat_password"]').val() )
                {

                }
                break
            }


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
    
}(jQuery,CONFIG))