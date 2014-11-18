<?php

require_once "SwiftMailer/swift_required.php";

class Mail {
    /**
     * @var Swift_Mailer
     */
    private static $_mailer;

    /**
     * @var Swift_SmtpTransport
     */
    private static $_transport;

    /**
     * @var
     */
    private static $_cfg;

    /**
     * 发送邮件
     * @param $subject
     * @param array $tos=>array( $email => $name ,  $email2 => $name2);
     * @param $from_name
     * @param $content
     * @param null $attachs
     *
     * @return bool
     * @throws Exception
     */

    public static function sendMail($subject, Array $tos, $from_name, $content, $attachs = null) {

        self::getTransport();

        $message = Swift_Message::newInstance()
            ->setFrom(array(self::$_cfg['username'] => $from_name))
            ->setTo($tos)
            ->setSubject($subject)
            ->setBody($content, 'text/html', 'utf-8');


		if (!empty($attachs) && is_array($attachs))
		{
			foreach ($attachs as $attach)
			{
				if (file_exists($attach))
				{
                    $message->attach( Swift_Attachment::fromPath($attach));
				}
			}
		}
        try{

            self::$_mailer->send($message);

            return true;

        }catch (Exception $e){

            throw new Exception('There was a problem communicating with SMTP: ' . $e->getMessage());

        }
	}

    private static function getTransport() {

        $_config = Yaf_Registry::get("config");
        self::$_cfg = $_config->mail->smtp->toArray();

        self::$_transport = Swift_SmtpTransport::newInstance(self::$_cfg['service'],25)
            ->setUsername(self::$_cfg['username'])
            ->setPassword(self::$_cfg['password']);

        self::$_mailer = Swift_Mailer::newInstance(self::$_transport);
    }
}
