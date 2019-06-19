<?php
namespace atrisa\alert;

use Yii;

/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * Yii::$app->session->setFlash('error', 'This is the message');
 * Yii::$app->session->setFlash('success', 'This is the message');
 * Yii::$app->session->setFlash('info', 'This is the message');
 * ```
 *
 * Multiple messages could be set as follows:
 *
 * ```php
 * Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);
 * ```
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @author Alexander Makarov <sam@rmcreative.ru>
 */
class Alert extends \yii\bootstrap\Widget
{
    /**
     * @var array the alert types configuration for the flash messages.
     * This array is setup as $key => $value, where:
     * - key: the name of the session flash variable
     * - value: the bootstrap alert type (i.e. danger, success, info, warning)
     */
    public function init()
    {
        parrent::init();
        if(Yii::$app->session->hasflash('success')) 
        {
            echo '<div class="alert alert-succes">';
            echo Yii::$app->session->getFlash('success');
            echo '</div>';
        } else if (Yii::$app->session->hasFlash('error')) {
            echo '<div class='alert alert-danger">';
            echo Yii::$app->session->getFlash('error');
            echo '</div>';
        }
    }
}
