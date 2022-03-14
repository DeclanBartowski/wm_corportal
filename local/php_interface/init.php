<?php

AddEventHandler("main", "OnBeforeEventAdd", array("FormSend", "OnBeforeEventAddHandler"));

class FormSend
{
    function OnBeforeEventAddHandler(&$event, &$lid, &$arFields, &$message_id, &$files)
    {
        if ($message_id == 13) {
            $props = array_merge((array)($arFields['SERVICES']), (array)($arFields['PRICE']),
                (array)($arFields['SOURCE']));
            $props = array_filter($props);

            if (!empty($props)) {
                \CModule::IncludeModule("iblock");
                $propertyEnums = \CIBlockPropertyEnum::GetList([], array("IBLOCK_ID" => 8, 'ID' => $props));
                while ($enumField = $propertyEnums->GetNext()) {
                    $propsValue[$enumField["ID"]] = $enumField["VALUE"];
                }
                $code = ['SERVICES', 'PRICE', 'SOURCE'];
                foreach ($code as $codeDetail) {

                    if (is_array($arFields[$codeDetail])) {
                        foreach ($arFields[$codeDetail] as &$value) {
                            if (isset($propsValue[$value])) {
                                $value = $propsValue[$value];
                            }
                        }
                        unset($value);
                    } else {
                        $arFields[$codeDetail] = $propsValue[$arFields[$codeDetail]];
                    }
                }
            }
        }
    }
}