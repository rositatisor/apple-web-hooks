<?php

namespace App\Service;

class Transaction
{
    private string $autoRenewAdamId;
    private string $notificationType;
    private string $password; // TODO: handle password in more secure way maybe?

    /**
     * @return string
     */
    public function getAutoRenewAdamId(): string
    {
        return $this->autoRenewAdamId;
    }

    /**
     * @param string $autoRenewAdamId
     */
    public function setAutoRenewAdamId(string $autoRenewAdamId): void
    {
        $this->autoRenewAdamId = $autoRenewAdamId;
    }

    /**
     * @return string
     */
    public function getNotificationType(): string
    {
        return $this->notificationType;
    }

    /**
     * @param string $notificationType
     */
    public function setNotificationType(string $notificationType): void
    {
        $this->notificationType = $notificationType;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}