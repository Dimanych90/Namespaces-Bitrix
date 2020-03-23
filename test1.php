<?php


namespace Bitrix\Medelyaev;


class Test
{

    public function whoAmI()
    {
        echo 'My name is Dima';
    }

    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
            ),
            'CLIENT_ID' => array(
                'data_type' => 'string',
                'required' => true,
                'validation' => array(__CLASS__, 'validateClientId'),
            ),
            'CODE' => array(
                'data_type' => 'string',
                'required' => true,
                'validation' => array(__CLASS__, 'validateCode'),
            ));
    }
}

//$this->MODULE_VERSION = $arModuleVersion["VERSION"]; Версия модуля

/*function DoInstall()
{
    global $USER, $APPLICATION, $step;
    if ($USER->IsAdmin())
    {
        $step = IntVal($step);
        if ($step < 2)
        {
            $APPLICATION->IncludeAdminFile(Loc::getMessage("B24C_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/b24connector/install/step1.php");
        }
        elseif ($step == 2)
        {
            if (!IsModuleInstalled("b24connector")) //Проверка подключения ядра d7
            {
                $this->InstallDB();
                $this->InstallEvents();
                $this->InstallFiles();
                $GLOBALS["errors"] = $this->errors;
                $APPLICATION->IncludeAdminFile(Loc::getMessage("B24C_INSTALL_TITLE"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/b24connector/install/step2.php");
            }
        }
    }*/