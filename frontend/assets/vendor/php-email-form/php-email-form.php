<?php
class PHP_Email_Form {
    public $ajax = false;
    public $to = '';
    public $from_name = '';
    public $from_email = '';
    public $subject = '';
    public $smtp = array();
    private $messages = array();

    public function add_message($message, $subject = '', $length = 0) {
        if ($length) {
            $message = substr($message, 0, $length);
        }
        $this->messages[$subject] = $message;
    }

    public function send() {
        $to = $this->to;
        $from = $this->from_email;
        $name = $this->from_name;
        $subject = $this->subject;

        $headers = "From: $name <$from>\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $message_body = '';
        foreach ($this->messages as $subject => $message) {
            $message_body .= "$subject: $message\n\n";
        }

        if ($this->smtp) {
            // Configuração SMTP (exemplo básico)
            // Aqui você pode usar a biblioteca PHPMailer ou outra para SMTP
            return 'SMTP configuration not implemented';
        } else {
            // Envio básico de e-mail usando a função mail() do PHP
            return mail($to, $subject, $message_body, $headers) ? 'Message sent' : 'Message failed';
        }
    }
}
