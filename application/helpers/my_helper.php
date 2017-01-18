<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
+-------------------------------------+
    Name: send_email
    Purpose: melakukan pengecekan apakah ada user yang login
    @param return : TRUE atau FALSE
+-------------------------------------+
*/
if ( ! function_exists('send_email')) {
    function send_email($param, $email_content)
    {
        $CI =& get_instance();
		$CI->load->library('email');
		
        $config['useragent'] = 'nezindaclub.com';
        $config['wordwrap'] = FALSE;
        $config['mailtype'] = 'html';
        $CI->email->initialize($config);

        $CI->email->from($CI->config->item('email_admin'), $CI->config->item('title'));
        $CI->email->to($param['email']);
        $CI->email->subject($param['subject']);
        $CI->email->message('<html><head></head><body>'.$email_content.'</body></html>');
		
        $send = $CI->email->send();
        return $send;
    }
}
