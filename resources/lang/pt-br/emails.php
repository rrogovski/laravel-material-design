<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Emails Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various emails that
    | we need to display to the user. You are free to modify these
    | language lines according to your application's requirements.
    |
    */

    /*
     * Activate new user account email.
     *
     */

    'activationSubject'  => 'Ativação obrigatória',
    'activationGreeting' => 'Bem vindo!',
    'activationMessage'  => 'Você precisa ativar seu email antes, para poder usar todos os nossos serviços.',
    'activationButton'   => 'Ativar',
    'activationThanks'   => 'Obrigado por usar nossa aplicação!',

    /*
     * Goobye email.
     *
     */
    'goodbyeSubject'    => 'Lamentamos você ir... :\'(',
    'goodbyeGreeting'   => 'Olá :username,',
    'goodbyeMessage'    => 'Lamentamos muito você ir. Gostariamos de informar que sua conta foi excluída. Obrigado pelo tempo que compartilhamos. Você tem '.config('settings.restoreUserCutoff').' dias para restaurar sua conta.',
    'goodbyeButton'     => 'Restaurar conta',
    'goodbyeThanks'     => 'Esperamos vê-lo novamente!',

];
