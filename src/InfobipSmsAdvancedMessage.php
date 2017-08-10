<?php

namespace NotificationChannels\Infobip;

class InfobipSmsAdvancedMessage extends InfobipMessage
{
    private $notifyUrl;

    /**
     * @param $notifyUrl
     */
    public function notifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    /**
     * @return mixed
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }
}