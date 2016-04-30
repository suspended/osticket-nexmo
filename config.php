<?php

require_once INCLUDE_DIR . 'class.plugin.php';

class NexmoPluginConfig extends PluginConfig {

    function getStaffList() {
        $staff = array();
        $sql = "SELECT `staff_id` AS `id`, CONCAT_WS(' ', `firstname`, `lastname`) AS `fullname` FROM " . TABLE_PREFIX . "staff";
        $result = db_query($sql);
        while($row = db_fetch_array($result)) {
            $staff[$row['id']] = $row['fullname'];
        }
        return $staff;
    }

    function getOptions() {        
        return array(
            'nexmo-label' => new SectionBreakField(array(
                'label' => 'Nexmo Configuration',
                )),
            'nexmo-api-key' => new TextboxField(array(
                'label' => 'Nexmo API Key',
                'configuration' => array('size'=>100, 'length'=>200),
                )),	
            'nexmo-api-secret' => new TextboxField(array(
                'label' => 'Nexmo API Secret',
                'configuration' => array('size'=>100, 'length'=>200),
                )),
            'nexmo_from_number' => new TextboxField(array(
                'label' => 'Your Nexmo Number',
                'configuration' => array('size'=>100, 'length'=>200),
                )),
            'nexmo_to_number' => new TextboxField(array(
                'label' => 'Number to Send SMS to',
                'configuration' => array('size'=>100, 'length'=>200),
                )),
            'notify-label' => new SectionBreakField(array(
                'label' => 'Staff Configuration',
                ))
            );
    }

    function pre_save(&$config, &$errors) {
        global $msg;
        if (!$errors)
            $msg = 'Configuration updated successfully!';
        return true;
    }
}
