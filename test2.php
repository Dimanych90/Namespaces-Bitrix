<?php


namespace Bitrix\Units;


class Unit
{
    public function whoAmI()
    {
        echo 'My name is Dima';
    }

    public static function getByClientId($clientId)
    {
        if (!array_key_exists($clientId, static::$applicationCache)) {
            if (strval(intval($clientId)) == $clientId) {
                $filter = array('=ID' => $clientId);
            } else {
                $filter = array(
                    array(
                        'LOGIC' => 'OR',
                        '=CODE' => $clientId,
                        '=CLIENT_ID' => $clientId,
                    ),
                );
            }

            $dbRes = static::getList(array(
                'filter' => $filter,
                'select' => array(
                    '*',
                    'MENU_NAME' => 'LANG.MENU_NAME',
                    'MENU_NAME_DEFAULT' => 'LANG_DEFAULT.MENU_NAME',
                    'MENU_NAME_LICENSE' => 'LANG_LICENSE.MENU_NAME',
                )
            ));
        }
    }
}