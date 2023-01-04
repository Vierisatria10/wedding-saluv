<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
 
class Template {
    var $template_data = array();

    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
    {
        $this->CI =& get_instance();
        // $SESSION_ID = $this->CI->session->userdata('SESSION_ID');
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        // $view_data['SESSION'] = $this->CI->db->where('id', $SESSION_ID)->get('users')->row();
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}
